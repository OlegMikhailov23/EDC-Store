<?php 
  if(!empty($_POST['name']) and !empty($_POST['phone']) AND !empty($_POST['message'])) {
    
    $theme = 'Новое сообщение'
    
    $letter = 'Данные сообщения:\r\n';
    $letter .= 'Имя: '.$_POST['name'].'r\n';
    $letter .= 'Телефон: '.$_POST['phone'].'r\n';
    $letter .= 'Сообщение'.$_POST['message'].'r\n';
    
    if (mail('dkfolkin@gmail.com', $theme, $letter)) {
      header('location:/thankyou.html');
  }
  }
?>