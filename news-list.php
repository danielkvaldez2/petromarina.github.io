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

 <!-- botones redes sociales::  this plataform is the news card -->
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









    <!-- Content Section -->
    <section class="page-section">
      <div class="container">

        <div class="row">

          <!-- Content -->
          <div class="col-sm-7 col-sm-offset-1">












            <?php  
            
           
              require_once "library/UploadClass.php";
  
               $id = $_GET['id'];
               
	             $obj_prod1 = new UploadClass(); 
               $row1 = $obj_prod1->noticiasNewsT($id);

               
              for ($i=0; $i < count($row1); $i++) {  
              
              
              ?>
            <!-- Post -->
            <div class="blog-item" >
              </br></br></br>
              <!-- Date -->
              <div class="blog-item-date">
                </br></br></br></br>
                <span class="date-num"><?php echo $row1[$i]['dia']; ?></span> <?php echo $row1[$i]['mes']; ?>
              </div>

              <!-- Post Title -->
              <h2 class="blog-item-title animate"><a href="javascript:void(0);"><?php echo $row1[$i]['titulo']; ?></a></h2>

              <!-- Author, Categories, Comments -->
              <div class="blog-item-data">
                Posted by <a href="javascript:void(0);"><?php echo $row1[$i]['posted']; ?></a>
                <span class="separator">&mdash;</span>
                <a href="javascript:void(0);">Ships</a>, <a href="javascript:void(0);">merchant navy</a>
                <span class="separator">&mdash;</span>
                <a href="javascript:void(0);"><span class="number">8</span>&nbsp;Comments</a>
              </div>

              <!-- Media Gallery -->
              <div class="blog-media">
                <ul class="clearlist content-slider">
                  <li>


                        <?php 
                                      if($row1[$i]['video'] == 1) { 
                        ?> 
                                      <iframe width="500" height="355" src="https://www.youtube.com/embed/<?php echo $row1[$i]['archivo']; ?> " frameborder="0"allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php          
                                      } elseif ($row1[$i]['video'] == 0) {
                        ?>
                        <img src="login/files/Noticias-<?php echo $row1[$i]['id']; ?>-<?php echo $row1[$i]['archivo']; ?>" width="500" height="350" alt="" />
                       <!-- <img src="images/portfolio/<?php //echo $row1[$i]['archivo']; ?> " width="500" height="350" alt="" /> -->
                        <?php  
                                      }
                        ?> 
    

                  </li>

                </ul>
              </div>

              <!-- Social Links -->
              <div class="sharethis-inline-share-buttons"></div>
              <!-- End Social Links -->

              <!-- Text Intro -->
              <div class="blog-item-body">
                <p>
                  
                <?php echo $row1[$i]['texto']; ?>

                </p>
              </div>

              <div class="sharethis-inline-reaction-buttons"></div>


              <!-- Read More Link -->
              <div class="blog-item-foot text-center">
                <a href="news-last-word" style="background-color: #003142;"
                  class="btn btn-mod  btn-small">Return
                  PETROMARINA NEWS<i class="fa fa-angle-right"></i></a>
              </div>

            </div>
            <!-- End Post -->
           
              <?php  
            
              }  
              
              
              ?>





          </div>
          <!-- End Content -->



















          <!-- Sidebar -->
          <div class="col-sm-3 col-sm-offset-1 sidebar">

            <!-- Search Widget -->
            <div class="widget">
              <form class="form-inline form" role="form">
                <div class="search-wrap">
                  <button class="search-button animate" type="submit" title="Start Search">
                    <span class="icon-magnifier"></span>
                  </button>
                  <input type="text" class="form-control search-field" placeholder="Search...">
                </div>
              </form>
            </div>
            <!-- End Search Widget -->

            <!-- Widget -->
            <div class="widget">

              <h5 class="widget-title">Categories</h5>

              <div class="widget-body">
                <ul class="clearlist widget-menu">
                  <li>
                    <a href="javascript:void(0);" title="">Branding</a>
                    <small>
                      - 7
                    </small>
                  </li>
                  <li>
                    <a href="javascript:void(0);" title="">Design</a>
                    <small>
                      - 15
                    </small>
                  </li>
                  <li>
                    <a href="javascript:void(0);" title="">Development</a>
                    <small>
                      - 3
                    </small>
                  </li>
                  <li>
                    <a href="javascript:void(0);" title="">Photography</a>
                    <small>
                      - 5
                    </small>
                  </li>
                  <li>
                    <a href="javascript:void(0);" title="">Other</a>
                    <small>
                      - 1
                    </small>
                  </li>
                </ul>
              </div>

            </div>
            <!-- End Widget -->

            <!-- Widget -->
            <div class="widget">

              <h5 class="widget-title">Tags</h5>

              <div class="widget-body">
                <div class="tags">
                  <a href="javascript:void(0);">Design</a>
                  <a href="javascript:void(0);">Portfolio</a>
                  <a href="javascript:void(0);">Digital</a>
                  <a href="javascript:void(0);">Branding</a>
                  <a href="javascript:void(0);">Theme</a>
                  <a href="javascript:void(0);">Clean</a>
                  <a href="javascript:void(0);">UI & UX</a>
                  <a href="javascript:void(0);">Love</a>
                </div>
              </div>

            </div>
            <!-- End Widget -->

            <!-- Widget -->
            <div class="widget">

              <h5 class="widget-title">Comments</h5>

              <div class="widget-body">
                <ul class="clearlist widget-comments">
                  <li>
                    John Doe on <a href="javascript:void(0);" title="">Very interesting the news</a>
                  </li>
                  <li>
                    Emma Johnson on <a href="javascript:void(0);" title="">I find everything about maritime navigation
                      here</a>
                  </li>

                </ul>
              </div>

            </div>
            <!-- End Widget -->





            <!-- Widget  
                            <div class="widget">
                                
                                <h5 class="widget-title">Text widget</h5>
                                
                                <div class="widget-body">
                                    <div class="widget-text clearfix">
                                        
                                        <img src="images/team/team-1.jpg" alt="" width="70" height="70" class="img-circle left img-left">
                                        
                                        Consectetur adipiscing elit. Quisque magna ante eleifend eleifend. 
                                        Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
                                        Quisque magna ante eleifend eleifend. 
                                    
                                    </div>
                                </div>
                                
                            </div>                            
                            End Widget -->





            <!-- Widget -->
            <div class="widget">

              <h5 class="widget-title">Archive</h5>

              <div class="widget-body">
                <ul class="clearlist widget-menu">
                  <li>
                    <a href="javascript:void(0);" title="">February 2019</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" title="">January 2019</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" title="">December 2018</a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- End Widget -->

            <!-- Widget 
                            <div class="widget">
                                
                                <h5 class="widget-title">Last posts</h5>
                                
                                <div class="widget-body">
                                    <ul class="clearlist widget-posts">
                                        <li>
                                            Posted by John Doe 7 Mar <a href="#" title="">Lorem ipsum dolor sit amet</a>
                                        </li>
                                        <li>
                                            Posted By Emma Johnson 7 Mar <a href="#" title="">Suspendisse accumsan interdum tellus</a>
                                        </li>
                                        <li>
                                            Posted by John Doe 7 Mar <a href="#" title="">Praesent ultricies ut ipsum</a>
                                        </li>
                                        <li>
                                            Posted Mark Deen 5 Mar <a href="#" title="">Vivamus malesuada vel nulla vulputate</a>
                                        </li>
                                        <li>
                                            Posted by Sam Brin 3 Mar <a href="#" title="">Aenean auctor egestas auctor</a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                              End Widget -->

          </div>
          <!-- End Sidebar -->
        </div>

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