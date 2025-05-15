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


<!doctype html>
<html lang="ru">
<head>
  <title>Корзина для лендинга</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link type="text/css" href="style.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/logo.png"/>
  <script defer src="js/cart.js"></script>



   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
 
  <link rel="stylesheet" href="css/templatemo-style.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>





 <h2 style="text-align: center;"> МЕНЮ:</h2>
                                           
  <div class="dropdown">
    <button type="button" class="btn btn-body dropdown-toggle" data-toggle="dropdown"  style="background-color: #93b38a; width: 100%; margin-top: 10px; margin-bottom: 10px;">
      Первое
    </button>
    <div class="dropdown-menu">
      

      <a class="dropdown-item">
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
        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="btn-new" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-porc="<?=$res['porc']?>">В корзину</button></td> 

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
        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-porc="<?=$res['porc']?>">В корзину</button></td> 

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
        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-porc="<?=$res['porc']?>">В корзину</button></td> 

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
        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-porc="<?=$res['porc']?>">В корзину</button></td> 

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
        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-porc="<?=$res['porc']?>">В корзину</button></td> 

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
        
 <td><?=$res['name']?></td>
        <td><?=$res['porc']?> г.</td>
        <th><?=$res['cena']?> руб.</th>
       
       
       <td class="td">  <button class="cart-add" data-name="<?=$res['name']?>" data-price="<?=$res['cena']?>" data-porc="<?=$res['porc']?>">В корзину</button></td> 

       </tr>
     
     
   
     <?php
          }
          ?>         
</table>
</a>
 </div>
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
<c-cart currency="₽" fab="1" action="thankyou.php" method="post">
  

  <!---->
<div slot="header" class="my-header">
 <!-- содержимое вашего хидера -->
 </div>
 
 <div slot="underitems" class="my-bonuses">
 <!-- то, что вы хотите разместить под списком позиций -->
 </div>
 
 <div slot="form" class="my-form">
 <!-- ваша супер-форма -->
 </div>
 
 <div slot="underform" class="my-whatever">
 <!-- что-то критически важное тут -->
</div>




</c-cart>

</body>
</html>
