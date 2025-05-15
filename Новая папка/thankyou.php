<?php ignore_user_abort(true); error_reporting(0);

require_once "./mail.php";

emailForm("margaritkaa.2018@mail.ru, emilart1@yandex.ru, zakaz@tastyarts.ru");
?>
<!doctype html>
<html lang="ru">
<head>
  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87409896, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87409896" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="img/logo.png"/>
  <title>Заявка принята</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/templatemo-style1.css">
  <style>
    html {
      box-sizing: border-box;
      line-height: 1;
      font-family: "Segoe UI", Arial, Helvetica, sans-serif;
      scroll-behavior: smooth;
      font-size: 16px;
    }

    @media all and (max-width: 38rem) {
      html {
        font-size: 14px;
      }
    }

    *, *:before, *:after {
      box-sizing: inherit;
      font-family: inherit;
    }

    body {
      margin: 0;
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      color: rgba(0, 0, 0, .7);
      background-color: #eef1f3;
    }

    .button {
      display: inline-block;
      background: transparent linear-gradient(to bottom, #ac4381 0%, #6d174a 100%) repeat scroll 0 0;
      border: none;
      box-shadow: 0 2px 1px 0 #6d174a;
      outline: none;
      padding: .75rem 1.5rem;
      text-transform: uppercase;
      color: #fff;
      font-weight: bold;
      font-family: inherit;
      font-size: .75rem;
      border-radius: .25rem;
      cursor: pointer;
      box-sizing: border-box;
      text-decoration: none;
    }

    .button:active {
      transform: translateY(1px);
      box-shadow: 0 1px 1px 0 #6d174a;
    }

    .thankyou {
      text-align: center;
      background: url(img/operator.png) 4rem bottom no-repeat, url(img/city.jpg) center bottom no-repeat #fff;
      background-size: auto, 100%;
      width: 100%;
      padding: 2rem 1rem;
      min-height: 100vh;
    }

    .thankyou h1 {
      font-weight: 500;
      font-size: 2.5rem;
      color: #ac4381;
      margin: 0 0 2rem;
    }

    .thankyou img {
      max-width: 100%;
      margin: 1rem 0;
    }

    .thankyou .button {
      margin-top: 1rem;
    }
  </style>

 
</head>
<body>

<div class="thankyou">
  <h1>Спасибо, заявка принята!</h1>
  <p>Оператор свяжется с вами в течение 15-20 минут по номеру <?= $_POST["phone"] ?></p>
  <img src="img/divider.png">
  <p>Если вы допустили ошибку, вернитесь на страницу заказа и оставьте заявку еще раз</p>
  <button class="button" onclick="history.go(-1);">Вернуться</button>


    <section id="about" >
          <div class="container">
          
  
        
   <div class="row" id="pay">
                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                 <h2 >Способы ОПЛАТЫ</h2>  
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">

<h4>Переводом на карту</h4>
<p>
Карта СБЕРБАНКА: 4276 6000 3658 4890<br>
Привязка по номеру телефона: 8-928-013–59-58<br>
Получатель: Маргарита Валерьевна А.
</p>    

                                   <h4>При покупке самовывозом</h4>
                                   <p>Оплата осуществляется по адресу: Пятигорск, Крайнего 49, Деловой центр, 2 этаж. С 9-00 до 18-00. <br>
                                        Понедельник - выходной.</p>


<h4>По реквизитам</h4>
<p>
Получатель: АГАДЖАНЯН МАРГАРИТА ВАЛЕРЬЕВНА<br>
ИНН 262518064314, ОГРНИП 317265100019630<br>
Номер счета: 40817810860101691236<br>
Банк получателя: СТАВРОПОЛЬСКОЕ ОТДЕЛЕНИЕ N5230 ПАО СБЕРБАНК<br>
БИК: 040702615, Корр. счет: 30101810907020000615<br>
ИНН: 7707083893, КПП: 263443001<br>
SWIFT-код: SABRRUMM<br>
<br>
Юр.адрес: 357500, г. Пятигорск, ул. Крайнего 49, Деловой центр, 2 этаж

</p>

                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-info">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                 <h2>Способы доставки</h2>  
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <h4>САМОВЫВОЗ</h4>
                                   <p>Самовывоз осуществляется по адресу : Пятигорск, Крайнего 49, Деловой центр, 2 этаж. С 9-00 до 18-00. <br>
                                        Понедельник - выходной.</p>


<h4>Доставка по г. Пятигорску и КМВ</h4>
<ul style="text-align: left;">
<li>г. Пятигорск: 150 руб.</li>
<li>г. Ессентуки: 500-550 руб.</li>
<li>г. Кисловодск: 1000 руб.</li>
<li>г. Мин.Воды: 500-550 руб.</li>
<li>г. Железноводск: 500-550 руб.</li>
<li>п. Иноземцево: 200-250 руб.</li>
<li>г. Лермонтов: 300-350 руб.</li>
<li>г. Георгиевск: 1000 руб.</li>
</ul>
<h4>Типы доставки</h4>
<ul style="text-align: left;">
<li>Бесконтактная доставка</li>
<li>Доставка до двери</li>
<li>Доставка СЮРПРИЗ</li>
<li>Доставка к указанному времени</li>
</ul>

<p>В момент получения заказа, получатель обязан проверить его состояние и целостность. В случае обнаружения видимых повреждений, сообщить об этом курьеру и производителю, по телефону <span style="color: red;">8-928-013-59-58</span>, о выявленных повреждениях. В противном случае отправление считается доставленным в надлежащем виде, и дальнейшие претензии в этой связи не принимаются.
</p>
<p>Время ожидания курьера по адресу, указанному заказчиком, не должно превышать 15 минут. Ожидание за каждые последующие 15 минут - 50 руб.</p>

<p>Доставка работает с 9.00 до 18-00.
При покупке от 1000₽, если сказать кодовые слова <span style="color: red;">«вкусный бонус»</span> - десерт в подарок.
</p>                                     
                              </div>
                         </div>
                    
                    </div>
              
               </div>


     <h4>МЕНЮ:</h4>
           <p><a href="catpd.php" class="section-btn btn btn-default smoothScroll">Порционные ПП десерты</a>
  <a href="cattort.php" class="section-btn btn btn-default smoothScroll">Целые Торты</a>
  <a href="catprod.php" class="section-btn btn btn-default smoothScroll">Полезный магазин</a></p>         

 
  </div>  

     </section>

</div>

<script>
  localStorage.removeItem('cart');
</script>
</body>
</html>
