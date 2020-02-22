<?php
	
   require_once "DbPdo.php";

?>

<!doctype html>
<html lang="es">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-H00580WDRK"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-H00580WDRK');
	</script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
  <title>PETROMARINA</title>
  <meta name="description"
    content="Buques - Combustibles - Supermercado - Almacen - Bebidas - Comestibles - Perfumeria">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  <meta name="language" content="es" />
  <meta name="dc.creator" content="danielkvaldez" />
  <meta name="revisit" content="1 day" />
  <meta name="description" content="Puerto Quequen Buenos Aires Argentina " />
  <meta name="keywords" content="Buques Combustibles Supermercado Almacen Bazar Panificados " />
  <meta name="robots" content="index, follow" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" /><!-- or black-traslucent -->
  <link rel="apple-touch-startup-image" href="http://www.petromarina.net/petrom152.png" />
  <link rel="shortcut icon" href="http://www.petromarina.net/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" type="image/png" href="http://www.petromarina.net/petrom16.png" />
  <link rel="shortcut icon" type="image/svg+xml" href="http://www.petromarina.net/petromSVG.svg" />
  <link rel="apple-touch-icon" size="" href="http://www.petromarina.net/petrom152.png" />

  <!-- CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css"> 
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="../css/style-responsive.css">

  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/animations.min.css">
  <link rel="stylesheet" href="../css/vertical-rhythm.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/rev-slider.css">
  <link rel="stylesheet" href="../rs-plugin/css/settings.css" media="screen" />
  <link rel="stylesheet" href="../css/stylep.css">

  <link rel="stylesheet" type="text/css" href="../css/fonts.css">
  <link rel="stylesheet" type="text/css" href="../css/stylep.css">




</head>

<body>

<?php
   require_once "navegadorLibrary.php";
?>



<div class="container">




  </br></br></br>

  <section id='databaseShips'>
    <!-- databaseShips -->

<?php
          
               require_once "UploadClass.php";
               
               $obj_prod = new UploadClass(); 
               $row = $obj_prod->dataBaseShip01();

               for ($i=0; $i < count($row); $i++) 
               {  
?>



    <a href="databaseShips91?id=<?php echo $row[$i]['id']; ?>" class="contDBS" title="<?php echo $row[$i]['name']; ?>">
      <div class="DBSimg">
        <img src="../img/dataBaseShip/<?php echo $row[$i]['imagen']; ?>" width="120px" height="100px" alt="" />
      </div>
      <div class="DBSdetalles">
        <p style="background:rgb(0, 49, 66);color:white;">Name :<strong><?php echo $row[$i]['name']; ?></strong> </p>
        <p style=" background:rgb(241,241,241);color:black;">IMO / MMSI :<strong><?php echo $row[$i]['imo']; ?>/<?php echo $row[$i]['mmsi']; ?></strong> </p>
        <p style="background:rgb(255,255,255);color:black;">Ship Type:<strong> <?php echo $row[$i]['typeship']; ?></strong> </p>
        <p style=" background:rgb(241,241,241);color:black;">Registered Shipowner :<strong> <?php echo $row[$i]['maker']; ?></strong>
        </p>
      </div>
      <div class="DBSenlaces">
        <img src="../img/000.jpg" width="70px" height="70px" alt="" />
      </div>
    </a>
    <br>
 

 <?php 
            } 
?>









 <br><br>

    

<button type="button" class="btn btn-danger btn-lg  btn-block ">to view the entire database you must register</button>




    <br><br><br><br>  <br><br><br><br> 



  </section> <!-- fin resulprtado de la busqueda databaseShips -->

 
<button type="button" class="btn btn-primary btn-lg  btn-block ">DataBase 329.681 buques </button>

</div>


 <br><br><br><br>





  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  


  <!-- JS -->
  <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/SmoothScroll.js"></script>
  <script type="text/javascript" src="../js/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" src="../js/jquery.localScroll.min.js"></script>
  <script type="text/javascript" src="../js/jquery.ba-hashchange.min.js"></script>
  <script type="text/javascript" src="../js/jquery.viewport.mini.js"></script>
  <script type="text/javascript" src="../js/jquery.countTo.js"></script>
  <script type="text/javascript" src="../js/jquery.appear.js"></script>
  <script type="text/javascript" src="../js/jquery.sticky.js"></script>
  <script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="../js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="../js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="../js/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="../js/jquery.magnific-popup.min.js"></script>
  <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
  <script type="text/javascript" src="../js/gmap3.min.js"></script>
  <script type="text/javascript" src="../js/all.js"></script>
  <script type="text/javascript" src="../js/contact-form.js"></script>
  <script type="text/javascript" src="../js/animations.min.js"></script>
  <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

</body>

</html>