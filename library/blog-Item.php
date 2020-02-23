<?php 

	require_once "DbPdo.php";     
  require_once "UploadClass.php";
 

  
  if(!empty($_POST))
	{           
       $id= stripslashes($_POST['idComent']);                //   aca estoy
       $name= stripslashes($_POST['name_blog']);          //   aca estoy
       $email= stripslashes($_POST['email_blog']);            //   aca estoy
       $text= stripslashes($_POST['comment_blog']);              //   aca estoy
       $date= date("Y-m-d h:i:s ");

       $recaptcha = $_POST["g-recaptcha-response"];
 
       $url = 'https://www.google.com/recaptcha/api/siteverify';
       $data = array(
         'secret' => '6LePTdsUAAAAAC8V3vBC0nLo_tQfmUpo3Z2V_XZ6', // clave servidor
         //'secret' => '6LdRJnUUAAAAAPDBPKoSbUc40EzAfRuAHMjJSsh1',
         'response' => $recaptcha
       );
       $options = array(
         'http' => array (
           'method' => 'POST',
           'content' => http_build_query($data)
         )
       );
       $context  = stream_context_create($options);
       $verify = file_get_contents($url, false, $context);
       $captcha_success = json_decode($verify);
       if ($captcha_success->success) {
          $obj_comment = new UploadClass();
          $result = $obj_comment->blogListComentSave($id,$name,$email, $text, $date); 
          if($result <> null){ // echo "<script> alert('GUARDADO...');</script>";  
                            $_POST = array();        // echo $result;
                            }
       } else {
        
        // echo "<script> alert('NO GUARDADO Eres un robot!...');</script>";
        // Eres un robot!  exit; 

       }
  }

  $id = $_GET['id'];
  $obj_prod3 = new UploadClass();
 
  $row7 = $obj_prod3->blogListId($id);
  $row6 = $obj_prod3->blogListComentId($id); 
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

  <!-- Color Schemes :: Uncomment one for apply :: -->
  <link rel="stylesheet" href="../css/colors/azure.css">

 <!-- botones redes sociales:  this plataform is the news card : -->
 <script type = 'text/javascript' src = 'https://platform-api.sharethis.com/js/sharethis.js#property=5e4bd4faeac6ff0012aa5888&cms=website' async = 'async'> </script> 
 <!-- recaptcha -->
 <script src='https://www.google.com/recaptcha/api.js'></script>
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
	
   require_once "navegadorLibrary.php";
?>





    </br></br></br></br>

    <!-- Section Headings -->
 <div class="container">
    <div class="row">
              <div class="col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                        <div class="section-title">
                          <span class="uppercase" style="vertical-align: bottom;"> <a href="#top" class="logo"><img
                                src="../img/petroB01.png" width="440" alt="" /> </a> </span>

                          </div>
                              <h2 class="section-heading">Blog Diego Balverde</h2>
                          </div>
                        </div>
              </div>
        <!-- End Section Headings -->
    </div>
  </div>





    <!-- Content Section -->
  <section class="page-section">
      <div class="container">
          <div class="row">                <!-- rowt -->
            <div class="col-sm-7 col-sm-offset-1"> 





<!-- aca empieza post"************************************************************************ -->
<?php for ($i=0; $i < count($row7); $i++) {  ?>
    <!-- Post -->
    <div class="blog-item" id="news-02">
              
        <!-- Date -->
        <div class="blog-item-title">
        </br>
        <span class="date-num bg-warning"><?php  echo $tex = substr($row7[$i]['date_blog'],8,2); ?>-<?php  echo $tex = substr($row7[$i]['date_blog'], 5,2); ?>-<?php  echo $tex = substr($row7[$i]['date_blog'], 0,4); ?></span>
        </div>
        </br>  
        <!-- Post Title -->
        <h2 class="blog-item-title animate text-center"><a href="javascript:void(0);"><?php echo $tex = substr($row7[$i]['titulo_blog'],0,40);   ?></a></h2>
        <!-- Author, Categories, Comments -->
        <div class="blog-item-data text-right">Posted by <a href="javascript:void(0);"><?php echo $row7[$i]['posted_blog']; ?></a></div>
        <!-- Media Gallery -->
        <div class="blog-media">
        <ul class="clearlist content-slider">
            <li>
                 <img src="../images/portfolio/<?php echo $row7[$i]['foto_blog']; ?>" alt="" />
            </li>
        </ul>
        </div>
            <!-- Social Links -->
            <div class="sharethis-inline-share-buttons mb-30""></div>
            <!-- End Social Links -->
        <!-- Text Intro -->
        <div class="blog-item-body mb-30">
           <p><?php echo $row7[$i]['text_blog']; ?>
            </p>
        </div>
        </br> 
       
        </br> 
        
  <?php  }  ?>



<!-- -------------------------------------Aca FORM comentarios --------------------------------------------- -->
        </br></br>
        <div class="group row text-center">
             <button type="button" class="btn btn-primary">Do you want to tell me something</button>
        </div>
        
        </br>

        <form id="Commentform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">

            <div class="form-group row">
                <label for="name">.  Name</label>
                <input type="text" class="form-control  " name ="name_blog" id="name_blog" placeholder="Name" required>
            </div>
            <div class="form-group row">
                <label for="email" >.  Email</label>
                <input type="email" class="form-control" name ="email_blog" id="email_blog"placeholder="Email" required>
            </div>
            <div class="form-group row">
                  <label for="comment">.  Comment</label>
                  <textarea class="form-control  "  name ="comment_blog"  id="comment_blog" placeholder="write this comment" required></textarea>
            </div>
            <div class="form-group row">
              <!--   <div class="g-recaptcha" data-sitekey="6LdRJnUUAAAAAAsfktrBwMWcSG5dXnfWK0C1YKbS"></div> -->
               <div class="g-recaptcha" data-sitekey="6LePTdsUAAAAAN4oGvInMq4MGpW63zok62dqZVt1"></div>  <!--  *****clave servidor ***** -->
            </div>

            </br>
            <div class="form-group row text-center">
            <input type="hidden"  name ="idComent" id="idComent" value="<?php echo $_GET['id']; ?>"  >
            <input type="hidden"  name ="idControl" id="idControl" value="1"  >
                <button type="submit" id="btn-Comment" class="btn btn-primary">Comment</button>
            </div>

        </form>


         </br></br>
<!-- -------------------------------------Aca FORM comentarios --------------------------------------------- -->

<!-- -------------------------------------Aca   comentarios --------------------------------------------- -->


        <table class="table table-hover" >
          <thead>
            <tr>
              <th scope="col" colspan="2" class="text-center"><h2><strong><?php echo count($row6); ?> COMENTS</strong></h2></th>
            </tr>
          </thead>

          <tbody>
             <tr>
              <td colspan="2" class="bg-success"></td>
            </tr>
           

 <?php for ($i=0; $i < count($row6); $i++) {  ?>

          <!-- inicio bucle --> 
            <tr>
              <th scope="row"><p class="h5"> <strong> <?php echo $row6[$i]['name_comment_blog']; ?> </strong></p></th>
                <th scope="row" class="text-right text-muted">
                    <span class="date-num "><small><?php  echo $tex = substr($row6[$i]['date_comment_blog'],8,2); ?>/<?php  echo $tex = substr($row6[$i]['date_comment_blog'], 5,2); ?>/<?php  echo $tex = substr($row6[$i]['date_comment_blog'], 0,4); ?></small></span>
                </th> 
            </tr>
            <tr>
              <td colspan="2"><p><em>  <?php echo $row6[$i]['text_comment_blog']; ?> </em></p></td>
            </tr>
            <tr >
              <td colspan="2" class="bg-success" >  </td>
            </tr>
          <!-- fin bucle --> 

 <?php   }   ?>
     
          
             
                 
          </tbody>
        </table>
<!-- -------------------------------------Aca  comentarios --------------------------------------------- -->
        </br></br></br></br></br></br> 


        <!-- Read More Link -->
        <div class="blog-item-foot text-center">
              <button type="button" class="btn btn-primary" onClick="window.location='blog-list';" title="RETURN" > Return...  </button>
        </div>
</div>
<!--  --------------End Post------------------------------------------------------ -->





<!-- aca termina post"************************************************************************ -->


 



  <!-- caca comienza el sidebar"************************************************************************ -->


                </div> <!-- col-sm-7 col-sm-offset-1 -->
            </div> <!-- row -->
        </div><!-- container-->    
    </section>    <!-- End Content Section -->


 










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