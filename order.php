<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="utf-8">
    <title>EDC обратная связь</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
 
<?php
   $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['name']) and !empty($_POST['phone']) and 
   !empty($_POST['select'])){
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
      $select = trim(strip_tags($_POST['select']));
      $comment-to-order = trim(strip_tags($_POST['comment-to-order']));
 
      mail('dkfolkin@gmail.com',
           'ЗАКАЗ с EDCSTORE', 
      'Вам написал: '.$name.'<br />
      Его номер: '.$phone.'<br />
      Его комментарий к заказу: '.$comment-to-order.'<br />
      Его сообщение: '.$message,
           "charset=utf-8");
 
      echo "Ваш заказ успешно отправлен!<Br> Вы получите ответ в 
      ближайшее время<Br> $back";
 
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>
</html>