<?php

include_once('setup.php');

$salat="SELECT * FROM `menu` WHERE `kat`='САЛАТЫ'";
$sql=mysqli_query($link, $salat);

$pervoe="SELECT * FROM `menu` WHERE `kat`='ПЕРВОЕ'";
$sql1=mysqli_query($link, $pervoe);
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
   var msg=""; 
   $(".dropdown-item").click(function(){
      msg+=$(this).text()+"\n";
        $("#menu").val(msg);
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
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Первое
    </button>
    <div class="dropdown-menu">
       <?php
          while ($res=mysqli_fetch_array($sql1)) {
            ?>

      <a class="dropdown-item">
        <table>
<tr> 
        <td class="td"><?=$res['name']?></td>
         <td class="td"><?=$res['porc']?> г.</td> 
         <td class="td"><?=$res['cena']?> руб.</td> 
       </tr>
     </table>
   </a>
     <?php
          }
          ?>         

 </div>
</div>

 <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Салаты
    </button>
    <div class="dropdown-menu">
       <?php
          while ($res=mysqli_fetch_array($sql)) {
            ?>
      <a class="dropdown-item" href="#"><?=$res['name']?> <?=$res['porc']?> г. <?=$res['cena']?> руб.</a>
     <?php
          }
          ?>         

 </div>
</div>
            
        </section>

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
                                placeholder="Почта..." required="" />
                        </div>

                        <div class="form-group">
                            <textarea rows="6" id="menu" name="contact_message"
                                class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                                placeholder="Заказано..." required=""></textarea>
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