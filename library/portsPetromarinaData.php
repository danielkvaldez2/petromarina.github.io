<?php
	
   require_once "DbPdo.php";
   require_once "headLibrary.php"; 

              require_once "UploadClass.php";
  

              
              /* $id = $_POST['id']; */
               $id = "1";
	             $obj_prod3 = new UploadClass(); 
               $row3 = $obj_prod3->dataBaseports02($id);
               
              for ($i=0; $i < count($row3); $i++) {  

?>

  

    <div class="modal01" id="modal1">
    <h2> <img width="50px" height="20px" src="../img/dataBaseShip/flags/<?php echo $row3[$i]['flag']; ?>">   </h2> 
      <h2><i class="fas fa-anchor"></i> Port of <?php echo $row3[$i]['name']; ?></h2> 
      <h5><?php echo $row3[$i]['direccion']; ?></h5>
      
      <b>Phone:</b> (+1 562) 471-8677
      <b> Email:</b> info@petromarina.net</br>
      <h5><?php echo $row3[$i]['country']; ?></h5>
      <b>Superficie: </b>  <?php echo $row3[$i]['surface']; ?></br>
      <b>Inauguración: </b>  <?php echo $row3[$i]['opening']; ?></br>
      <b>Volúmenes anuales de contenedores: </b> </br>	6.73 million twenty-foot equivalent units (TEU) (CY 2013) </br>
      <b>Carga por año </b></br>	 <?php echo $row3[$i]['annualtonel']; ?> </br>
      <b>Muelles: </b> <?php echo $row3[$i]['docks']; ?> </br>
      <b>Profundidad del proyecto: </b> <?php echo $row3[$i]['depth']; ?>   </br>
      <b>Cantidad de buques al año: </b> <?php echo $row3[$i]['annualships']; ?> </br></br>	
    
      <img src="../img/ports/<?php echo $row3[$i]['imagen']; ?>" width="445" height="250" alt="">

      <h5><b>Coordenadas:</b> <?php echo $row3[$i]['coordenadasS']; ?>   / <?php echo $row3[$i]['coordenadasW']; ?>    </br>
      </h5>
      <img src="../img/logo-white.png" width="120" alt="">
      <b>Phone:</b> (+1 562) 471 8677
    </div>


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
    });

  </script>
</body>

</html>