<?php

$email=$_POST['email'];
$name=$_POST['name'];
$porc=$_POST['porc'];
$cena=$_POST['cena'];



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

<script defer src="путь/к/файлу/cart.js"></script>



<script defer src="cart.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body>
	
<center><h1>Корзина</h1></center>


<h4>Вот че вы заказали:</h4>
<li>
  <ol><?=$res['name']?></ol>
</li>






<c-cart currency="₽" fab action="thankyou.php"></c-cart>

</body>
</html>