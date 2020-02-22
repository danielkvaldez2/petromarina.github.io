<?php
	
   require_once "library/DbPdo.php"; 

?>


<!DOCTYPE html>
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
  <meta name="author" content="Roman Kirichik">
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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/style-responsive.css">

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/animations.min.css">
  <link rel="stylesheet" href="css/vertical-rhythm.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/rev-slider.css">
  <link rel="stylesheet" href="rs-plugin/css/settings.css" media="screen" />
  <link rel="stylesheet" href="css/stylep.css">

  <!-- Color Schemes :: Uncomment one for apply :: -->
  <link rel="stylesheet" href="css/colors/azure.css">


 <!-- botones redes sociales:  this plataform is the news card : -->
 <script type = 'text/javascript' src = 'https://platform-api.sharethis.com/js/sharethis.js#property=5e4bd4faeac6ff0012aa5888&cms=website' async = 'async'> </script> 

</head>

<body class="appear-animate">

  <!-- Page Loader          
        <div class="page-loader">
            <b class="spinner">Loading...</b>
        </div>
          End Page Loader -->

  <!-- Page Wrap -->
  <div class="page" id="top">



 <?php
	
   require_once "navegadorRaiz.php";
?>


</br> </br></br> </br>

<!-- Section Headings -->
<div class="row">
          <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <div class="section-title">
            Last News<span class="st-point">.</span>
            </div>
            <h2 class="section-heading">the latest news from the world at a click </h2>
            <div class="section-line mb-10 mb-xxs-30"></div>
          </div>

</div>
<!-- End Section Headings -->







    <!-- Content Section -->
    <section class="small-section" id="lastNewsTop">
    
      <div class="container relative">

   

<?php
          
               require_once "library/UploadClass.php";
               
               $obj_prod = new UploadClass(); 
               $row = $obj_prod->noticiasNews();
               
?>




     <!-- Headings -->
        <h4 class="pt-0 mb-50 mb-xs-30">
          <span class="uppercase"><a href="#">Petromarina</a> <i class="fa fa-angle-right"></i> Last News</span>:
          <span class="serif normal"> 1<?php echo count($row); ?> posts found</span>
        </h4>
        <!-- End Headings -->




        <!-- Blog Posts Grid -->
        <div class="row multi-columns-row">




<?php     for ($i=0; $i < count($row); $i++) {   ?>


          <div class="col-sm-6 col-md-4 col-lg-4">
            <!-- Post -->
            <div class="blog-item">
              <!-- Image -->
              <div class="blog-media relative">

                <a href="news-list?id=<?php echo $row[$i]['id']; ?>">




                  <?php 
                                if($row[$i]['video'] == 1) { 
                  ?> 
                                <iframe width="350" height="225" src="https://www.youtube.com/embed/<?php echo $row[$i]['archivo']; ?> " frameborder="0"allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <?php          
                                } elseif ($row[$i]['video'] == 0) {
                  ?> 
 <img src="login/files/Noticias-<?php echo $row[$i]['id']; ?>-<?php echo $row[$i]['archivo']; ?>"width="350" height="225" alt="" />
        <!-- <img src="images/portfolio/<?php //echo $row[$i]['archivo']; ?> " width="350" height="225" alt="" />  -->
                  <?php  
                                }
                  ?> 
                              

                 





                  <div class="lp-date">
                    <span class="lp-date-num"><?php echo $row[$i]['dia']; ?></span>
                    <?php echo $row[$i]['mes']; ?>
                  </div>
                  <div class="lp-more">
                    Read More
                  </div>
                </a>

              </div>
              <!-- Social Links -->
              <div class="sharethis-inline-share-buttons"></div>
              <!-- End Social Links -->
              <!-- Post Title -->
              <h2 class="blog-item-title"><a href="javascript:void(0);" class="small strong"><?php echo $row[$i]['titulo']; ?></a></h2>

              <!-- Author, Categories, Comments -->

              <div class="blog-item-data mb-10">
                Posted by <a href="javascript:void(0);"> <?php echo $row[$i]['posted']; ?></a>
                <span class="separator">&mdash;</span>
                <a href="javascript:void(0);">Design</a>
                <span class="separator">&mdash;</span>
                <a href="javascript:void(0);"><span class="number">4</span>&nbsp;Comments</a>
              </div>


              <!-- Text Intro -->
              <div class="blog-item-body">
                <p class="small">
                   
                    <?php echo $tex = substr($row[$i]['texto'],0, 200);   ?>

                </p>
              </div>

              <!-- Read More Link -->
              <div class="blog-item-foot">               
                <a href="news-list?id=<?php echo $row[$i]['id']; ?>" style="background-color: #003142;" class="btn btn-mod  btn-small">Read
                  More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->
          </div>

            <?php }  ?>
            

















        </div>
        <!-- End Blog Posts Grid -->







        <!-- Pagination -->
        <div class="pagination">
          <a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
          <a href="javascript:void(0);" class="active">1</a>
          <a href="javascript:void(0);">2</a>
          <a href="javascript:void(0);">3</a>
          <a class="no-active">...</a>
          <a href="javascript:void(0);">9</a>
          <a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
        </div>
        <!-- End Pagination -->

      </div>
    </section>
    <!-- End Content Section -->






































    <!-- Foter -->
    <footer class="small-section bg-dark footer">
      <div class="container animate-init" data-anim-type="bounce-in-up" data-anim-delay="0">

        <!-- Footer Text -->
        <div class="footer-text">

          <!-- Copyright -->
          <div class="footer-copy">
            <a href="javascript:void(0);" target="_blank">&copy; petromarina.net <span class="number">2019</span></a>.
          </div>
          <!-- End Copyright -->

          <div class="footer-made">
            Made in <span class="serif"> petromarina.net</span>
            by <span class="serif"> Sistemas Petromarina Inc</span>.
          </div>

        </div>
        <!-- End Footer Text -->

        <!-- Social Links -->
        <div class="footer-social-links">
          <div class="social-links tooltip-bot">
            <a href="javascript:void(0);" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="javascript:void(0);" title="Google+" target="_blank"><i class="fa fa-google-plus"></i></a>
            <a href="javascript:void(0);" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="javascript:void(0);" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
            <a href="javascript:void(0);" title="E-mail" target="_blank"><i class="fa fa-envelope"></i></a>
          </div>
        </div>
        <!-- End Social Links -->

      </div>
    </footer>
    <!-- End Foter -->


  </div>
  <!-- End Page Wrap -->




  <!-- JS -->
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/SmoothScroll.js"></script>
  <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
  <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.ba-hashchange.min.js"></script>
  <script type="text/javascript" src="js/jquery.viewport.mini.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/jquery.sticky.js"></script>
  <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
  <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
  <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
  <script type="text/javascript" src="js/gmap3.min.js"></script>
  <script type="text/javascript" src="js/all.js"></script>
  <script type="text/javascript" src="js/contact-form.js"></script>
  <script type="text/javascript" src="js/animations.min.js"></script>
  <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->

</body>

</html>