<?php
include_once('setup.php');
$zapros="SELECT * FROM `catpd`";
$sql=mysqli_query($link,$zapros);



?>
<!DOCTYPE html>
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
     <title>Порционные ПП десерты TastyArts</title>
<!-- 



-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="Полезные десерты, здоровое питание.">
     <meta name="keywords" content="десерты, полезное, здоровое питание">
     <meta name="author" content="Emil Margaryan">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style1.css">
<!-- favicon -->
     <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

  <link type="text/css" href="style.css" rel="stylesheet">
 
  <script defer src="js/cart.js"></script>

<script type="text/javascript">
  var dostavka="";
function gor(){
    
     var gorod=document.getElementById("grd");
if(gorod.value=="Пятигорск")dostavka="150р";
else if(gorod.value=="Ессентуки")dostavka="500-550р";
else if(gorod.value=="Иноземцево")dostavka="200-250р";
else if(gorod.value=="Железноводск")dostavka="500-550р";
else if(gorod.value=="Лермонтов")dostavka="300-350р";
else if(gorod.value=="Мин.Воды")dostavka="500-550р";
else if(gorod.value=="Кисловодск")dostavka="1000р"; 
else if(gorod.value=="Георгиевск")dostavka="1000р";

document.getElementById("dst").innerHTML=dostavka;
}


</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149528551-2">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149528551-2');
</script>


</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button  class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="right: 5em;">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
             
             <a href="index.php" class="navbar-brand"><img src="images/logo.png" width="40" alt="TastyArts" title="TastyArts" > 
               </a>
          <a href="index.php" class="navbar-brand">ПП</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php#home" class="smoothScroll">Главная</a></li>
                         <li><a href="index.php#about" class="smoothScroll">Статьи</a></li>
                         <li><a href="index.php#team" class="smoothScroll">Меню</a></li>
                         <li><a href="index.php#menu" class="smoothScroll">Хиты</a></li>
                         <li><a href="index.php#contact" class="smoothScroll">Контакты</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right" style="margin-right: 1.5em;">
                           <li><a href="https://www.instagram.com/tastyarts_amm/" target="_blank" class="fa fa-instagram" title="Инстаграм"></a></li>
      <li><a href="https://wa.me/79280135958" class="fa fa-whatsapp" target="_blank" title="WhatsApp"></a></li>     
                         <li><a href="index.php#contact"><i class="fa fa-phone" title="Заказать"></i> +7(928)013-59-58</a></li>
                         <a href="dostavka.php" class="section-btn" title="Условия доставки/Реквизиты для оплаты">Доставка/Оплата</a>
                         
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                        
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Полезные десерты + натуральные продукты</h3>
                                             <h1>Наша цель - вкусная и здоровая еда</h1>
                                             <a href="index.php#team" class="section-btn btn btn-default smoothScroll">Хиты и новинки!</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Десерты</h3>
                                             <h1>Без глютена. Без сахара.</h1>
                                             <a href="index.php#menu" class="section-btn btn btn-default smoothScroll">Меню</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Наши вкусняшки</h3>
                                             <h1>Доступны для заказа и доставки по КМВ.</h1>
                                             <h4>По всем вопросам</h4>
                                             <a href="index.php#contact" class="section-btn btn btn-default smoothScroll">Обратная связь</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
                 <h4>Меню</h4>
  <p>
  <a href="cattort.php" class="section-btn btn btn-default smoothScroll">Торты</a>
  <a href="catprod.php" class="section-btn btn btn-default smoothScroll">Полезный магазин</a></p>

         <h4><a href="dostavka.php">Условия Доставки/Оплаты</a></h4>
          <hr>
          <h2>ПОРЦИОННЫЕ ПП ДЕСЕРТЫ</h2>

<?php
while($res=mysqli_fetch_array($sql)) {   
?>
<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="TastyArts">
  <meta itemprop="name" content="<?=$res['title']?>">
  <meta itemprop="description" content="<?=$res['sostav']?> <?=$res['kbju']?>">
  <meta itemprop="productID" content="<?=$res['id']?>">
  <meta itemprop="url" content="https://tastyarts.ru/images/catpd">
  <meta itemprop="image" content="https://tastyarts.ru/images/catpd/<?=$res['foto']?>">
    
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <meta itemprop="availability" content="available for order">
   <meta itemprop="condition" content="new"> 
   <meta itemprop="price" content="<?=$res['cena']?>">
    <meta itemprop="priceCurrency" content="RUB">
  </div>
</div>



               <div class="row" >
                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                  
                                   <h2><?=$res['title']?></h2>
                                    <h3 style="color: #ac4381;"><?=$res['cena']?> руб.</h3>
                                  
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p><?=$res['sostav']?></p>
                              <h5><?=$res['kbju']?></h5>
                              </div>
                         </div> 
                    <button class="cart-add section-btn btn btn-default" data-name="<?=$res['title']?>" data-price="<?=$res['cena']?>" data-image="https://tastyarts.ru/images/catpd/<?=$res['foto']?>">В корзину</button>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/catpd/<?=$res['foto']?>" class="img-responsive" alt="" >
                         </div>
                    </div>

              
               </div>


                <div class="row" >
                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                  
                                   <h2></h2>
                                   
                                  
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   
                            
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                             
                         </div>
                    </div>
              
               </div>

               <hr>
<?php
}
?>




<h4>Меню</h4>
  <p>
  <a href="cattort.php" class="section-btn btn btn-default smoothScroll">Торты</a>
  <a href="catprod.php" class="section-btn btn btn-default smoothScroll">Полезный магазин</a></p>

        <h4><a href="dostavka.php">Условия Доставки/Оплаты</a></h4>
  <a href="catpd.php" class="section-btn btn btn-default smoothScroll">Наверх</a>



          </div>
     </section>

<c-cart currency="₽" fab="1" action="thankyou.php" method="post">
<!---->


  <div slot="underitems" class="my-bonuses">
<h4>Доставка по г. Пятигорску и КМВ</h4>
<p>Все вопросы принимаются по <a href="tel:79280135958"><i class="fa fa-phone"></i><span style="color: red;"> 8-928-013-59-58</span></a> 
</p>
 </div>


 
 <div slot="underform" class="my-whatever">
 

<!--<ul>
<li>г. Пятигорск: 150 руб.</li>
<li>г. Ессентуки: 500-550 руб.</li>
<li>г. Кисловодск: 1000 руб.</li>
<li>г. Мин.Воды: 500-550 руб.</li>
<li>г. Железноводск: 500-550 руб.</li>
<li>п. Иноземцево: 200-250 руб.</li>
<li>г. Лермонтов: 300-350 руб.</li>
<li>г. Георгиевск: 1000 руб.</li>
</ul>
-->
<h4>Типы доставки</h4>
<ul>
<li>Бесконтактная доставка</li>
<li>Доставка до двери</li>
<li>Доставка СЮРПРИЗ</li>
<li>Доставка к указанному времени</li>
</ul>

<p>Время ожидания курьера по адресу, указанному заказчиком, не должно превышать 15 минут. Ожидание за каждые последующие 15 минут - 50 руб.</p>

<p>Доставка работает с 9.00 до 18-00.
При покупке от 1000₽, если сказать кодовые слова <span style="color: red;">«вкусный бонус»</span> - десерт в подарок.
</p>





 </div>

<!-- ваша супер-форма -->
 <div slot="form" class="my-form">
 <form class="my-form" action="thankyou.php" method="post">

 <br>
 <input type="text" name="name" placeholder="Ваше имя" style="width:100%;">
 <br><br>
 <input type="tel" name="phone" placeholder="Ваш телефон*" style="width:100%;" required>
<br><br>
 <label for="gorod">Населенный пункт: </label>
  <select name="gorod" id="grd" style="width:100%;" onchange="gor()">
  <option value="Пятигорск" title="150р">Пятигорск</option>
  <option value="Ессентуки" title="500-550р">Ессентуки</option>
<option value="Иноземцево" title="200-250р">Иноземцево</option>
<option value="Железноводск" title="500-550р">Железноводск</option>
<option value="Лермонтов" title="300-350р">Лермонтов</option>
<option value="Мин.Воды" title="500-550р">Мин.Воды</option>
<option value="Кисловодск" title="1000р">Кисловодск</option>
<option value="Георгиевск" title="1000р">Георгиевск</option>
  </select>
  <br> <h5>Стоимость доставки:</h5>
  <h5 id="dst">150р.</h5><br>
<textarea id="adres" name="adres" placeholder="Адрес для доставки" style="width:100%;" cols="40" rows="5"></textarea>
   <br>
<!--   <label>Доставка<br>
     <input type='text' name='dst' id='dst' value="150р" readonly style="width:100%;">
   </label>-->
 <br>

   <input type='hidden' name='cart'>
  <input type="submit" name="submit" style="width:100%;"><br><br>
<input type="reset" name="reset" style="width:100%;">
</form>

 </div>



</c-cart>



     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5" style="margin-top: 200px;">
          <div class="container">
               <div class="row">

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Наш адрес</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>СК, г. Пятигорск,<br> ул. Крайнего 49<br>Региональный Деловой Центр</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-8">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Заказ и доставка</h2>
                              </div>
                              <address class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>+7(928)013-59-58</p>
                                   <p><a href="mailto:info@tastyarts.ru">info@tastyarts.ru</a></p>
                                   <p>Instagram: tastyarts_amm</p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                         <div class="footer-info footer-open-hour">
                              <div class="section-title">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.2s">Часы работы</h2>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Понедельник: выходной</p>
                                   <div>
                                        <strong>Вторник - Пятница</strong>
                                        <p>9:00 - 18:00</p>
                                   </div>
                                   <div>
                                        <strong>Суббота - Воскресенье</strong>
                                        <p>9:00 - 18:00</p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-4">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                                <li><a href="https://www.instagram.com/tastyarts_amm/" target="_blank" class="fa fa-instagram" title="Инстаграм"></a></li>
      <li><a href="https://wa.me/79280135958" class="fa fa-whatsapp" target="_blank" title="WhatsApp"></a></li>     
                         </ul>

                         <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
                              <p>&copy; 2021 TastyArts.<br>
                                   ИП Агаджанян М. В.<br>
                                   ИНН 262518064314<br>
                                   ОГРНИП 317265100019630 
                              
                              <br><br>Дизайн: <a rel="nofollow" href="http://bitAM.RU" target="_blank">студия Эмиля Маргаряна bitAM.RU</a></p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>