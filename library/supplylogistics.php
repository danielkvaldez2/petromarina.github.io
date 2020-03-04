<?php 
   if(session_id()=="")
   {
      session_start();
   }
?>


 
<html>
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
            <title>PETROMARINA </title>
              <meta name="description" content="Vessels - Fuels - Supermarket - Warehouse - Beverages - Edible - Perfumeria">
              <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
              <meta name="language" content="es" />
              <meta name="dc.creator" content="danielkvaldez" />
              <meta name="revisit" content="1 day" />
              <meta name="description" content="THE HUBB TOWER, 100 W Broadway Long Beach CA 90802, Long Beach, California 90802" />
              <meta name="keywords" content="Fuel Vessels Supermarket Warehouse Bazar Bakeries " />
              <meta name="robots" content="index, follow" />
              <meta charset="utf-8">
              <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
              <meta name="apple-mobile-web-app-capable" content="yes" />
              <meta name="apple-mobile-web-app-status-bar-style" content="black" /><!-- or black-traslucent -->
            <!-- Favicons -->
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
            <link rel="stylesheet" type="text/css" href="../css/colors/azure.css"> 
            <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css" >
            <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox-buttons.css" >


    </head>
    <body >
 
   




 <?php
	
   require_once "navegadorLibrary.php";
?>



   



                
            </br></br></br>
 <!-- supplylogistic -->  

          <div class="searchSupply">
                <div class='searchSupply1' >
                      <a id='compra<?php echo $productos[$i]['id_producto']?> ' class="btn btn-primary"   title='Carrito' href='prosesos'>
                              <span class="add2cart"><i class="fa fa-shopping-cart"></i></span> 
                      </a> 

                </div>
               
                 <div class="searchSupply2"> 

                        <form class="form-inline"  id="buscador" name="buscador" method="post" action="search">
                            <input class="form " id="buscar" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success " class="organizararriba" type="submit">
                                <img src="http://www.petromarina.net/img/search.png" width='18' height='18'>
                            </button>
                        </form>

                </div>    
<!-- resultado de la busqueda supplylogistic --> 
          </div>



<section class='supply'>   
    <div id="container ">
      

   <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      PRODUCT
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
 
<?php          require_once "UploadClass.php";
               $obj_prod = new UploadClass(); 
               $productos = $obj_prod->getCategoriaProd();
               for ($i=0; $i < count($productos); $i++) {    ?>
 
        <a href="#" id="<?php echo $productos[$i]['id_categProd']; ?>" class="ProdId btn bg-<?php echo $productos[$i]['id_categProd']; ?>  btn-block btn-sm" title="<?php echo $productos[$i]['nameSpain']; ?>"> <?php echo $productos[$i]['nameEngland']; ?> </a>
                                      
<?php     }     ?>

   </div>
  </div>       
        
    </div> <!-- <div id="contenedor">-->    
</section><!-- fin resultado de la busqueda supplylogistic --> 

<section class='supply'>   
    <div id="shopReturn">
        
    </div>   
</section><!-- fin resultado de la busqueda supplylogistic --> 

















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
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
        <script type="text/javascript" src="../js/gmap3.min.js"></script>
        <script type="text/javascript" src="../js/all.js"></script>
        <script type="text/javascript" src="../js/contact-form.js"></script>
        <script type="text/javascript" src="../js/animations.min.js"></script>
        <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery.fancybox.js"></script>
        <script type="text/javascript" src="../js/jquery.fancybox-buttons.js"></script>
        <script type="text/javascript" src="../js/jquery.lazyload.js"></script>
        <script>
        
                $(function(){
                        $("img").lazyload({
                            threshold:100,  
                            effect:"fadeIn"
                        })
                })
        </script>



<script src="despachador.js"></script>


        
  <?php //detecta ubicacion esto va en el html ?>
<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">// <![CDATA[
$(document).on("ready", function (){
if (navigator.geolocation) {
  var tiempo_de_espera = 3000;
  navigator.geolocation.getCurrentPosition(mostrarCoordenadas, mostrarError, { enableHighAccuracy: true, timeout: tiempo_de_espera, maximumAge: 0 } );
}
else {
  alert("La Geolocalizaciรณn no es soportada por este navegador");
}

function mostrarCoordenadas(position) {
  var lat=position.coords.latitude;
  var long=position.coords.longitude;
  // console.log('entre');
        $.get("ubicacionUser.php", {
          dato: position.coords.latitude,
          dato2: position.coords.longitude
          }, function(respuesta){
          $( "#resultado" ).html( respuesta );
          }, "html");

   //alert("Latitud: " + lat + ", Longitud: " + long);
}

function mostrarError(error) {
  var errores = {1: 'Permiso denegado', 2: 'Posiciรณn no disponible', 3: 'Expirรณ el tiempo de respuesta'};
  //alert("Error: " + errores[error.code]);
}


});
// ]]></script>






    </body>
</html>
