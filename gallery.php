<?php

include_once('setup.php');

$salat="SELECT * FROM `menu` WHERE `kat`='САЛАТЫ'";
$sql=mysqli_query($link, $salat);

$pervoe="SELECT * FROM `menu` WHERE `kat`='ПЕРВОЕ'";
$sql1=mysqli_query($link, $pervoe);

$vtoroe="SELECT * FROM `menu` WHERE `kat`='ВТОРОЕ'";
$sql2=mysqli_query($link, $vtoroe);

$garneer="SELECT * FROM `menu` WHERE `kat`='ГАРНИРЫ'";
$sql3=mysqli_query($link, $garneer);

$sous="SELECT * FROM `menu` WHERE `kat`='СОУСА'";
$sql4=mysqli_query($link, $sous);

$hleb="SELECT * FROM `menu` WHERE `kat`='МУЧНЫЕ'";
$sql5=mysqli_query($link, $hleb);

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>ObedKMV</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
 
  <link rel="stylesheet" href="css/templatemo-style.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link type="text/css" href="style.css" rel="stylesheet">
<script defer src="js/cart.js"></script>

<style class="bg-block" style="">
  body {
  background: url(img/fon1.jpg);
  background-attachment: fixed;
   }

  table{
   border:0px solid grey;
   border-collapse: collapse;
    width: 100%;
}


td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

.placeholder-box {
  display: block; 
  position: relative;
  margin: 20px 0;
}
.placeholder-box input {
  display: block;
  box-sizing: border-box;
  width: 100%;
  height: 35px;
  line-height: 35px;
  padding: 0 10px;
  font-size: 14px;
  font-weight: 400;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 5px;
}
.placeholder-text {    
  display: none;
  width: 100%; 
  line-height: 37px;
  position: absolute;
  left: 10px;
  top: 0;
  bottom: 0;
  color: #888;
  cursor: text;
  user-select: none;
}
 
.placeholder-box input:invalid + .placeholder-text {
  display: block;
}

</style>

<link rel="stylesheet" href="style.css" type="text/css">






</head>

<body><div class="container">
  <div class="tm-page-container mx-auto">
    <header class="tm-header text-center">
      <h1 class="tm-title text-uppercase">ОБЕДЫ С ДОСТАВКОЙ</h1>
      <p class="tm-primary-color"><i>по Пятигорску, Иноземцево</i></p>
    </header>

    <section class="tm-section">
      <nav class="tm-nav">
        <ul>
          <li>
            <a href="index.php"><span class="tm-nav-deco"></span>Главная</a>
          </li>
          <li class="active">
            <a href="gallery.php"><span class="tm-nav-deco"></span>Меню</a>
          </li>
          <li>
            <a href="contact.php"><span class="tm-nav-deco"></span>Контакты</a>
          </li>
        </ul>
      </nav>


  
         


  <h2 style="text-align: center;"> МЕНЮ:</h2>
                                           
  <div class="dropdown">
    <button type="button" class="btn btn-body dropdown-toggle" data-toggle="dropdown"  style="background-color: #93b38a; width: 100%; margin-top: 10px; margin-bottom: 10px;">
      Первое
    </button>
    <div class="dropdown-menu">
      

      <a class="dropdown-item" style="overflow-x:auto;">
       
        <table class="table table-hover"> 
          <tr>
        <th>Название</th>
        <th>Порция</th>
        <th>Цена</th>
       
        <th>Действие</th>
      </tr>
          <?php
          while ($res=mysqli_fetch_array($sql1)) {
            ?>
<tr class="bld" id="pb"> 
        
<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="Обед КМВ">
  <meta itemprop="name" content="<?=$res['name']?>">
  <meta itemprop="description" content="Первое блюдо, порция <?=$res['porc']?> г.">
  <meta itemprop="productID" content="1">
  <meta itemprop="url" content="https://obedkmv.ru">
  <meta itemprop="image" content="img/micpic/pervoe.png">
    
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <meta itemprop="availability" content="available for order">
   <meta itemprop="condition" content="new"> 
   <meta itemprop="price" content="<?=$res['cena']?>">
    <meta itemprop="priceCurrency" content="RUB">
  </div>
</div>




     




 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-image="img/micpic/pervoe.png">В корзину</button></td> 

       </tr>
     
   
     <?php
          }
          ?>         
</table>

</a>
 </div>
</div>






 <div class="dropdown">
    <button type="button" class="btn btn-body dropdown-toggle" data-toggle="dropdown" style="background-color: #93b38a; width: 100%;">
      Салаты
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">
      <table class="table table-hover">
        <th>Название</th>
        <th>Порция</th>
        <th>Цена</th>
      

       <?php
          while ($res=mysqli_fetch_array($sql)) {
            ?>
       <tr class="bld" id="pb"> 


<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="Обед КМВ">
  <meta itemprop="name" content="<?=$res['name']?>">
  <meta itemprop="description" content="Салат, порция <?=$res['porc']?> г.">
  <meta itemprop="productID" content="1">
  <meta itemprop="url" content="https://obedkmv.ru">
  <meta itemprop="image" content="img/micpic/salat.png">
    
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <meta itemprop="availability" content="available for order">
   <meta itemprop="condition" content="new"> 
   <meta itemprop="price" content="<?=$res['cena']?>">
    <meta itemprop="priceCurrency" content="RUB">
  </div>
</div>


        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-image="img/micpic/salat.png">В корзину</button></td> 

       </tr>
     
     <?php
          }
          ?>         
</table></a>
 </div>
</div>
          



<div class="dropdown">
    <button type="button" class="btn btn-body dropdown-toggle" data-toggle="dropdown"  style="background-color: #93b38a; width: 100%; margin-top: 10px; margin-bottom: 5px;">
      Второе
    </button>
    <div class="dropdown-menu">
      

      <a class="dropdown-item">
        <table class="table table-hover"> 
          <tr>
        <th>Название</th>
        <th>Порция</th>
        <th>Цена</th>
      </tr>
          <?php
          while ($res=mysqli_fetch_array($sql2)) {
            ?>
<tr class="bld" id="pb"> 


<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="Обед КМВ">
  <meta itemprop="name" content="<?=$res['name']?>">
  <meta itemprop="description" content="Второе блюдо, порция <?=$res['porc']?> г.">
  <meta itemprop="productID" content="1">
  <meta itemprop="url" content="https://obedkmv.ru">
  <meta itemprop="image" content="img/micpic/vtoroe.png">
    
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <meta itemprop="availability" content="available for order">
   <meta itemprop="condition" content="new"> 
   <meta itemprop="price" content="<?=$res['cena']?>">
    <meta itemprop="priceCurrency" content="RUB">
  </div>
</div>

        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-image="img/micpic/vtoroe.png">В корзину</button></td> 

       </tr>
     
   
     <?php
          }
          ?>         
</table>
</a>
 </div>
</div>


<div class="dropdown">
    <button type="button" class="btn btn-body dropdown-toggle" data-toggle="dropdown"  style="background-color: #93b38a; width: 100%; margin-top: 5px; margin-bottom: 5px;">
      Гарнир
    </button>
    <div class="dropdown-menu">
      

      <a class="dropdown-item">
        <table class="table table-hover"> 
          <tr>
        <th>Название</th>
        <th>Порция</th>
        <th>Цена</th>
      </tr>
          <?php
          while ($res=mysqli_fetch_array($sql3)) {
            ?>
<tr class="bld" id="pb"> 

<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="Обед КМВ">
  <meta itemprop="name" content="<?=$res['name']?>">
  <meta itemprop="description" content="Гарнир, порция <?=$res['porc']?> г.">
  <meta itemprop="productID" content="1">
  <meta itemprop="url" content="https://obedkmv.ru">
  <meta itemprop="image" content="img/micpic/garnir.png">
    
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <meta itemprop="availability" content="available for order">
   <meta itemprop="condition" content="new"> 
   <meta itemprop="price" content="<?=$res['cena']?>">
    <meta itemprop="priceCurrency" content="RUB">
  </div>
</div>
        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-image="img/micpic/garnir.png">В корзину</button></td> 

       </tr>
     
   
     <?php
          }
          ?>         
</table>
</a>
 </div>
</div>

<div class="dropdown">
    <button type="button" class="btn btn-body dropdown-toggle" data-toggle="dropdown"  style="background-color: #93b38a; width: 100%; margin-top: 5px; margin-bottom: 5px;">
      Соусы
    </button>
    <div class="dropdown-menu">
      

      <a class="dropdown-item">
        <table class="table table-hover"> 
          <tr>
        <th>Название</th>
        <th>Порция</th>
        <th>Цена</th>
      </tr>
          <?php
          while ($res=mysqli_fetch_array($sql4)) {
            ?>
<tr class="bld" id="pb"> 


<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="Обед КМВ">
  <meta itemprop="name" content="<?=$res['name']?>">
  <meta itemprop="description" content="Соусы, порция <?=$res['porc']?> г.">
  <meta itemprop="productID" content="1">
  <meta itemprop="url" content="https://obedkmv.ru">
  <meta itemprop="image" content="img/micpic/sous.png">
    
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <meta itemprop="availability" content="available for order">
   <meta itemprop="condition" content="new"> 
   <meta itemprop="price" content="<?=$res['cena']?>">
    <meta itemprop="priceCurrency" content="RUB">
  </div>
</div>

        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-image="img/micpic/sous.png">В корзину</button></td> 

       </tr>
     
   
     <?php
          }
          ?>         
</table>
</a>
 </div>
</div>

<div class="dropdown">
    <button type="button" class="btn btn-body dropdown-toggle" data-toggle="dropdown"  style="background-color: #93b38a; width: 100%; margin-top: 5px; margin-bottom: 20px;">
      Мучные
    </button>
    <div class="dropdown-menu">
      

      <a class="dropdown-item">
        <table class="table table-hover"> 
          <tr>
        <th>Название</th>
        <th>Порция</th>
        <th>Цена</th>
      </tr>
          <?php
          while ($res=mysqli_fetch_array($sql5)) {
            ?>
<tr class="bld" id="pb"> 


<div itemscope itemtype="http://schema.org/Product">
  <meta itemprop="brand" content="Обед КМВ">
  <meta itemprop="name" content="<?=$res['name']?>">
  <meta itemprop="description" content="Мучные, порция <?=$res['porc']?> г.">
  <meta itemprop="productID" content="1">
  <meta itemprop="url" content="https://obedkmv.ru">
  <meta itemprop="image" content="img/micpic/muchn.png">
    
  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
 <meta itemprop="availability" content="available for order">
   <meta itemprop="condition" content="new"> 
   <meta itemprop="price" content="<?=$res['cena']?>">
    <meta itemprop="priceCurrency" content="RUB">
  </div>
</div>

        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-image="img/micpic/muchn.png">В корзину</button></td> 

       </tr>
     
     
   
     <?php
          }
          ?>         
</table>
</a>
 </div>
</div>

   

<c-cart currency="₽" fab="1" action="thankyou.php" method="post">

 <!--
<div slot="header" class="my-header">
  содержимое вашего хидера 
 </div>-->
 
  <div slot="underitems" class="my-bonuses">
<h4 style="color: #9f9f9f;">Доставка по г. Пятигорску и КМВ</h4>
<p>Все вопросы принимаются по <a href="tel:79280135958"><i class="fa fa-phone"></i><span style="color: #327339;"> 8-928-013-59-58</span></a> 
</p>
 </div>


  
 <div slot="form" class="my-form">
 <form class="my-form" action="thankyou.php" method="post">
  <label class="placeholder-box">
  <input required type="text" name="name">
  <div class="placeholder-text">Имя получателя...</div>
</label>
  
<label class="placeholder-box">
  <input required type="tel" name="phone"> 
  <div class="placeholder-text">Номер телефона...</span></div>
</label>

<label class="placeholder-box">
  <input required type="text" name="adress">
  <div class="placeholder-text">Адрес доставки...</span></div>
</label>

 <input type='hidden' name='cart'>
  <input type="submit" value="Оформить заказ" style="background-color: #7da66f; width: 100%; height: 40px; margin-bottom: 20px; border-radius: 10px;">
  <br><br>
<input type="reset" name="reset" style="background-color: #ebeee7; width: 100%; height: 30px; margin-bottom: 20px; border-radius: 10px; margin-bottom: 20px">



 </form> 
 </div>
 <!--
 <div slot="underform" class="my-whatever">
  что-то критически важное тут
</div> -->

</c-cart>








<div class="tm-page-container mx-auto">

         
                    
             


    <footer>
      <span>ООО «Риал-Хобби»
357500, Россия, г. Пятигорск, пр. Калинина, 9</span>
    </footer>
<footer>
  <span>Все права защищены © «Риал-Хобби» 2005 - 2022</span>
  </footer>

</div>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      // Magnific Pop up
      // https://dimsemenov.com/plugins/magnific-popup/
      $('.tm-gallery').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
          enabled: true
        },
      });
    });
  </script>



</body>
</html>