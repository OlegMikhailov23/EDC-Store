<?php
  if (isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
    $secret = '6LeOJiMUAAAAAOMJk1Vy5vWCYX0m1YjPvty6GBwq';
    $ip = $_SERVER[REMOTE_ADDR];
    $response = $_POST['g-recaptcha-response'];
    $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
    $arr = json_decode($rsp, TRUE);
  }
  if(!empty($_POST['name']) and !empty($_POST['phone']) and 
   !empty($_POST['message']) and $arr['success']){
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
      $message = trim(strip_tags($_POST['message']));
      mail('dkfolkin@gmail.com','Письмо с EDCSTORE','Вам написал: '.$name.'<br>Его номер: '.$phone.'<br>Его сообщение: '.$message,"charset=utf-8");
      header("Location: send-form-ok.html");
      exit;
   } 
   else {
      header("Location: error.html");
      echo "Заполните все поля!";
      exit;
   }
?>