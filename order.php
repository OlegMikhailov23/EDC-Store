<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>EDC ЗАКАЗ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=latin,cyrillic">
    <link rel="stylesheet" href="CSS/mini-style.css">
</head>

<body>
    <header class="main-header">
        <div class="container clearfix">
            <nav class="main-navigation">
                <ul>
                    <li>
                        <a href="index.html"><img src="img/logo-site.png" width="190" height="30" alt="EDC STORE"></a>
                    </li>
                    <li>
                        <a href="goods.html">Товары</a>
                    </li>
                    <li>
                        <a href="Order-form.html">Заказать</a>
                    </li>
                    <li>
                        <a href="news.html">Новости</a>
                    </li>
                    <li>
                        <a href="about-us.html">О нас</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
        <div class="form-echo-container">
            <h2>☺Ваш запрос отправлен☺</h2>
            <h2>Мы с Вами свяжемся в ближайшее время!</h2>
            <a href="goods.html" class="btn">Назад к покупкам!</a>
        </div>
    </main>
    <footer class="main-footer">
        <div class="container clearfix">
            <section class="footer-contacts"><span class="footer-signature">
          #E.D.C. Store</span>
                <br>
                <br> Телефон: +7 (911) 731-84-25
            </section>
            <section class="footer-social">
                <p>Давайте дружить!</p>
                <a class="social-btn social-btn-vk" href="https://vk.com/e_d_c_store" target="_blank">Вконтакте</a>
                <a class="social-btn social-btn-inst" href="https://www.instagram.com/edc_store_kydex_holster/" target="_blank">Инстаграм</a>
            </section>
            <section class="footer-copyright">
                <p>Разработано:</p>
                <a class="btn" href="https://vk.com/huzky_dj" target="_blank">Oleg Mikhailov</a>
            </section>
        </div>
    </footer>
    <?php
   if(!empty($_POST['name']) and !empty($_POST['phone']) and 
   !empty($_POST['select'])){
      $name = trim(strip_tags($_POST['name']));
      $phone = trim(strip_tags($_POST['phone']));
      $select = trim(strip_tags($_POST['select']));
      $comment = trim(strip_tags($_POST['comment']));
 
      mail('dkfolkin@gmail.com','ЗАКАЗ с EDCSTORE','Вам написал: '.$name.'<br>Его номер: '.$phone.'<br>Он выбрал модель: '.$select.'<br>Его сообщение: '.$comment,"charset=utf-8");
      exit;
   } 
   else {
      echo "Для отправки сообщения заполните все поля! $back";
      exit;
   }
?>
</body>

</html>
