<?php 

   require_once "DbPdo.php";
   require_once "headLibrary.php"; 
 
     
    /* echo '¡Hola ** 1- ' .  $_GET["id"]  . ' **** 2- '.  $_GET["vid"]  . ' ****';
    
     echo '<script language="javascript">	
                            alert("Gracias por 1- '.  $_GET["id"]  . ' ****** 2- '.  $_GET["vid"]   . ' SUSCRIBIRTE");	
     </script>';*/
     $id =$_GET["id"] ;
    

	
 
  

        require_once "UploadClass.php";             
	             $obj_prod3 = new UploadClass(); 
               $row3 = $obj_prod3->dataBaseports02($id);
               
              for ($i=0; $i < count($row3); $i++) {  

?>

    <div class="portsPlay"  >

                <?php
                    if (empty($row3[$i]['video'] )) 
                { ?>
                            <img class="centrall" src="../img/ports/<?php echo $row3[$i]['imagen']; ?>"  alt="no toy" /> 
                <?php }
                else{ 
                            if (empty($row3[$i]['videoYTube'] )) 
                { ?>
                            <img src="../img/ports/<?php echo $row3[$i]['video'];  ?>" alt="no toy" />
                <?php }
                else{  ?>
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $row3[$i]['video'];  ?>" frameborder="0"
                         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>     
                 } ?>

                <?php } }  ?>
     </div>
    <!--end portsPlay--> 


    <div class="modal01" id="modal1">
          <div class="tituloMo">
                    </br>
                    <img  src="../img/dataBaseShip/flags/<?php echo $row3[$i]['flag']; ?>">   
                    <h4><i class="fas fa-anchor"></i> Port of <?php echo $row3[$i]['name']; ?></h4> 
                    <h5><?php echo $row3[$i]['direccion']; ?></h5>
            </div><!--div tituloMo-->  
            <div class="cuerpoMo">      
                    <b>Phone:</b> (+1 562) 471-8677</br>
                    <b> Email:</b> info@petromarina.net</br>
                    <h5><?php echo $row3[$i]['country']; ?></h5>
                    <b>Surface: </b>  <?php echo $row3[$i]['surface']; ?> 
                    <b>Opening: </b>  <?php echo $row3[$i]['opening']; ?></br>
                    <b>Containers: </b>  <?php echo $row3[$i]['annualcontainers']; ?>(TEU) </br>
                    <b>Load: </b> 	 <?php echo $row3[$i]['annualtonel']; ?>  
                    <b>Docks: </b> <?php echo $row3[$i]['docks']; ?> </br>
                    <b>Depth: </b> <?php echo $row3[$i]['depth']; ?>  
                    <b>Ships: </b> <?php echo $row3[$i]['annualships']; ?> </br>	
            </div><!--div cuerpoMo--> 
            <div  class="foto" >
                      <img src="../img/ports/<?php echo $row3[$i]['imagen']; ?>" alt="">
             </div><!--div foto-->          
            <div class="foterMo">     
                      <h5><b>Coordinates:</b> <?php echo $row3[$i]['coordenadasS']; ?>   / <?php echo $row3[$i]['coordenadasW']; ?>  </h5>  
                    <img src="../img/logo-white.png" width="120" alt=""> <b>Phone:</b> (+1 562) 471 8677
            </div><!--div foterMo-->      
    </div><!--div modale01-->



<div class="modal02" id="modal2">

      <div class="tituloMo">
                    </br>
                    <img  src="../img/dataBaseShip/flags/<?php echo $row3[$i]['flag']; ?>">   
                    <h4><i class="fas fa-anchor"></i> Port of <?php echo $row3[$i]['name']; ?></h4>             
      </div><!--div tituloMo--> 
      <div class="cuerpoMo">
                              <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                                  <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                                      var setting = {"height":385,"width":377,"zoom":14,"queryString":"Port of Long Beach, Long Beach, California, EE. UU.","place_id":"ChIJM6Z-YdA23YARcbfKWj8SL08","satellite":true,"centerCoord":[33.7541850019184,-118.216458],"cid":"0x4f2f123f5acab771","lang":"es","cityUrl":"/us/ca/los-angeles","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"151929"};
                                      var d = document;
                                      var s = d.createElement('script');
                                      s.src = 'https://1map.com/js/script-for-user.js?embed_id=151929';
                                      s.async = true;
                                      s.onload = function (e) {
                                        window.OneMap.initMap(setting)
                                      };
                                      var to = d.getElementsByTagName('script')[0];
                                      to.parentNode.insertBefore(s, to);
                                    })();</script><a href="https://1map.com/es/map-embed?embed_id=151929">1 Map</a></div>
      </div><!--div cuerpoMo-->    
      <div class="foterMo">     
                      <h5><b>Coordinates:</b> <?php echo $row3[$i]['coordenadasS']; ?>   / <?php echo $row3[$i]['coordenadasW']; ?>  </h5>  
                    <img src="../img/logo-white.png" width="120" alt=""> <b>Phone:</b> (+1 562) 471 8677
      </div><!--div foterMo-->   
</div><!--div modale02-->


<?php           
              }               
?>

  </div>
  <!-- End Page Wrap -->


  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function () {
      $("#botonocultamuestra").click(function () {
        $("#modal1").each(function () {
          displaying = $(this).css("display");
          if (displaying == "block") {
            $(this).fadeOut('slow', function () {
              $(this).css("display", "none");
            });
          } else {
            $(this).fadeIn('slow', function () {
              $(this).css("display", "block");
            });
          }
        });
      });
      $("#botonocultamuestra2").click(function () {
        $("#modal2").each(function () {
          displaying = $(this).css("display");
          if (displaying == "block") {
            $(this).fadeOut('slow', function () {
              $(this).css("display", "none");
            });
          } else {
            $(this).fadeIn('slow', function () {
              $(this).css("display", "block");
            });
          }
        });
      });
      $("#botonocultamuestra3").click(function () {
        $(location).attr('href','portsPetromarina');
      });





    });

  </script>
</body>

</html>

