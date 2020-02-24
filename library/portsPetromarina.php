

 


<?php
          require_once "headLibrary.php"; 
?>


<body >

 
<div class="page" id="top">

<?php
      require_once "navegadorLibrary.php"; 
?>

</div>

    </br></br>
   
<div class="viewPorts" id="viewPorts">

   <?php
   require_once "portsPetromarinaPortNavegator.php"; 
   ?>                        
                 

</div><!--end viewPorts-->





            <div class="searchPorts">
              <div class="searchPortsItems">
                <img src="../img/logo-white.png" width="120" alt="">
                </br>
                <span class="portsViews" id="idports"> </span>
                <span class="portsViewsCountry" id="idcountry"> </span>
              </div><!-- End searchPortsItems -->
                          <input type="button" class="btn btn-danger m2 btnPorts3" id="botonocultamuestra3"  value="Return" />
                          <input type="button" class="btn btn-danger m2 btnPorts2" id="botonocultamuestra2"  value="Port Maps" />
                          <input type="button" class="btn btn-danger m2 btnPorts" id="botonocultamuestra"  value="Ports Data" />

            </div><!-- End searchPorts -->


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





  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 
  <script type="text/javascript">

      $(document).ready(function() {
                      
              //  alert("hola"); 

            //  $("#viewPorts").load("");


      
       });

        function portViews(lat, long,  port, country, video, idi) {
          //alert(lat+" / "+long+" / "+port+" / "+country+" / "+video+" / "+idi+" /FIN ");
          //  alert("hola2");
         
        /* var width = '100%';
          var height = '700';
          var latitude = ;
          var longitude =;
          var zoom = '10';*/
          //alert(width+"|||"+height+"|||"+latitude+"|||"+longitude)  ;
          $("#idports").text(port);
          $("#idcountry").text(country);
          $(".btnPorts").css("display", "block");
          $(".btnPorts2").css("display", "block");
          $(".btnPorts3").css("display", "block");
          
          $("#viewPorts").load("portsPetromarinaPlay?id="+idi+"&vid="+video+""); //mofif
          /*
          $("#viewPorts01").load("portsPetromarinaData.php");
          
        // location.reload();  ";*/

        }  

       
      </script>
 
</body>
