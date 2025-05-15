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


<style class="bg-block" style="">
  body {
  background: url(img/fon1.jpg);
  background-attachment: fixed;
   }
</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    var sum=0;
   var msg=""; 


   $(".bld").click(function(){
      msg+=$(this).children().text()+"\n";
        $("#menu").val(msg);

if($(this).attr("id")=="pb"){

  sum+=parseInt($(this).find("#cnpb").text());
        $("#itog").val(sum+" руб.");
}
  
else if($(this).attr("id")=="sl"){

  sum+=parseInt($(this).find("#cnsl").text());
        $("#itog").val(sum+" руб.");
}
  
     
  sum+=parseInt($(this).find("sl").text());
        $("#itog").val(sum+" руб.");  

      
 /* 
        sum+=parseInt($("#cnvb").text());
        $("#itog").val(sum+" руб.");


        sum+=parseInt($("#cngb").text());
        $("#itog").val(sum+" руб.");


        sum+=parseInt($("#cnsb").text());
        $("#itog").val(sum+" руб.");


        sum+=parseInt($("#cnmb").text());
        $("#itog").val(sum+" руб.");     
*/

        /////////////////////   

    });
    });




</script>

<style>
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

</style>



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
      

      <a class="dropdown-item">
        <table class="table table-hover"> 
          <tr>
        <th>Название</th>
        <th>Порция</th>
        <th>Цена</th>
        <th style="width: 20%;">Кол</th>
        <th></th>
      </tr>
          <?php
          while ($res=mysqli_fetch_array($sql1)) {
            ?>
<tr class="bld" id="pb"> 
        <td class="td"><?=$res['name']?> </td>
         <td class="td"><?=$res['porc']?> г. </td> 
         <td class="td"><span id="cnpb"><?=$res['cena']?></span> руб.</td>
         <td class="td" >
          <input type="number" step="1" min="1" style="max-width: 50px;"></td> 
         <td class="td"><button type="button">Подтвердить</button></td> 
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
            <tr class="bld" id="sl"> 
      
        <td class="td"><?=$res['name']?> </td>
        <td class="td"><?=$res['porc']?> г. </td>
        <td class="td"><span id="cnsl"><?=$res['cena']?></span> руб. </td>
      </a>
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
<tr class="bld"> 
        <td class="td"><?=$res['name']?> </td>
         <td class="td"><?=$res['porc']?> г. </td> 
         <td class="td"><span id="cnvb"><?=$res['cena']?></span> руб.</td> 
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
<tr class="bld"> 
        <td class="td"><?=$res['name']?> </td>
         <td class="td"><?=$res['porc']?> г. </td> 
         <td class="td"><span id="cnvb"><?=$res['cena']?></span> руб.</td> 
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
<tr class="bld"> 
        <td class="td"><?=$res['name']?> </td>
         <td class="td"><?=$res['porc']?> г. </td> 
         <td class="td"><span id="cnsb"><?=$res['cena']?></span> руб.</td> 
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
<tr class="bld"> 
        <td class="td"><?=$res['name']?> </td>
         <td class="td"><?=$res['porc']?> г. </td> 
         <td class="td"><span id="cnmb"><?=$res['cena']?></span> руб.</td> 
       </tr>
     
   
     <?php
          }
          ?>         
</table>
</a>
 </div>
</div>


      

<div class="tm-page-container mx-auto">

          <div class="container-fluid">
            
              
                 <form action="" method="POST" class="tm-contact-form">
                        <div class="form-group">
                            <input type="text" id="contact_name" name="contact_name"
                                class="col-lg-12 form-control rounded-0 border-top-0 border-right-0 border-left-0" style="width:100%;" 
                                placeholder="Имя..." required="" />
                        </div>
                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email"
                                class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                                placeholder="Номер телефона..." required="" />
                        </div>

                        <div class="form-group">
                            <input type="email" id="contact_email" name="contact_email"
                                class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                                placeholder="Адрес доставки..." required="" />
                        </div>

                        <div class="form-group">
                            <textarea rows="6" id="menu" name="contact_message" readonly 
                                class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                                placeholder="Заказано..." ></textarea>

   
                        </div>
 <div class="form-group">
                            <input type="text" id="itog" name="itog" readonly 
                                class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                               readonly value="0 руб." />
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary rounded-0">
                                Submit
                            </button>
                        </div>
                    </form>
              </div>
<!--форма для отправки
                <div class="tm-content">
                   
                </div>-->
<!--конец формы для отправки-->

</div>
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