 <?php 
  if(session_id()=="")
   {
      session_start();
   } 
       //  print_r($_GET);
      //   echo "<--GET</br>";
      //  print_r($_POST);
     //    echo "<--POST</br>";
     //    print_r($_SESSION);
     //    echo "<--SESSION</br>";
  ?>

  <!doctype html>
<html lang="es">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
		<title>PETROMARINA</title>
       <meta name="description" content="Buques - Combustibles - Supermercado - Almacen - Bebidas - Comestibles - Perfumeria">   
       <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
       <meta name="language" content="es" /> 
                        <meta name="dc.creator" content="danielkvaldez" /> 
                        <meta name="revisit" content="1 day" /> 
                        <meta name="description" content= "Puerto Quequen Buenos Aires Argentina " />
                        <meta name="keywords" content="Buques Combustibles Supermercado Almacen Bazar Panificados " />
                        <meta name="robots" content="index, follow" />
                        <meta name="apple-mobile-web-app-capable" content="yes" />
                        <meta name="apple-mobile-web-app-status-bar-style" content="black" /><!-- or black-traslucent -->
                        <link rel="apple-touch-startup-image" href="http://www.petromarina.net/petrom152.png" />  
        <link rel="shortcut icon" href="http://www.petromarina.net/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" type="image/png" href="http://www.petromarina.net/petrom16.png" />  
        <link rel="shortcut icon" type="image/svg+xml" href="http://www.petromarina.net/petromSVG.svg" /> 
        <link rel="apple-touch-icon" size="" href="http://www.petromarina.net/petrom152.png" />  
    
    
		 <link rel="stylesheet" type="text/css" href="../css/fonts.css" >
     <link rel='stylesheet' type='text/css' href='../css/style.css' /> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container-xl"> 

  <form id="form1" name="form1" method="post" action="finalizarPedido.php"> <!-- finalizarPedido.php -->
  

  <table class="table table-responsive  ">

  <thead>
     <tr>
      <td colspan="6" align="center" bgcolor="#FFFFFF"><strong>SHIP´S DATA</strong></td>
    </tr>
  </thead>
  <tbody>
    <tr>  
      <td colspan="6" align="center" bgcolor="#FFFFFF"></td>
    </tr>

    <tr>  
      <td align="right" bgcolor="#014358" style="color:white;">	NAME:</td>
      <td colspan="5" align="center" bgcolor="#014358"><label for="nombreC"></label>
        <input name="nombreC" type="text" id="nombreC"  placeholder='write your NAME' size="33" required/></td>
    </tr>

    <tr>
      <td align="right" bgcolor="#014358" style="color:white;">IMO:</td>
      <td colspan="5" align="center" bgcolor="#014358"><label for="direccionC"></label>
       <!-- <input name="direccionC" type="text" id="direccionC" size="55" />-->
        <input type='text'  name="direccionC" id='direccionC' placeholder='write your IMO'  size="33" required></td>
    </tr>

    <tr>
       
      <td align="right" bgcolor="#014358" style="color:white;">MMSI:</td>
      <td colspan="5" align="center" bgcolor="#014358"><label for="telefonoC"></label>
        <input name="telefonoC" type="text" id="telefonoC"  placeholder='write your MMSI'  size="33" required /></td>
    </tr>

    <tr>
      <td align="right" bgcolor="#014358" style="color:white;">SHIP MANAGER:</td>
      <td colspan="5" align="center" bgcolor="#014358"><label for="horarioC"></label>
        <input name="horarioC" type="text" id="horarioC"  placeholder='write your SHIP MANAGER'  size="33" /></td>
    </tr>

    <tr>  
      <td align="right" bgcolor="#014358" style="color:white;">E-MAIL:</td>
      <td colspan="5" align="center" bgcolor="#014358"><label for="correoC"></label>
         <!-- <input name="correoC" type="text" id="correoC" placeholder='Escribe tu Correo Electronico'  size="55" />c required  -->
        <input type='email' name="correoC" id='correo' placeholder='write your E-mail' size="33"></td>
    </tr>

    <tr>  
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="6" align="center" bgcolor="#FFFFFF"></td>
    </tr>

    <tr>  
      <td bgcolor="#FFFFFF"> </td>
      <td colspan="2" align="center" bgcolor="#FFFFFF">
             <button type="bottom" onClick="location.href='supplylogistics'" class="btn btn-danger" title="Continue Shopping"><span> Continue Shopping <i class="icon icon-cart"></i></span></button>  	 
      </td>
      <td colspan="2" align="center" bgcolor="#FFFFFF"> 			
           <button type="submit" onclick = "subimt"  class="btn btn-info" title="Confirm"><span>CONFIRM<i class="icon icon-ticket "></i></span></button>
      </td>
    </tr>

    <tr>  
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="4" align="center" bgcolor="#FFFFFF"></td>
    </tr>

    <tr>
      <td colspan="6" align="center" bgcolor="#FFFFFF">
    </tr>

    <tr>  
      <td colspan="6" align="center" bgcolor="#014358" style="color:white;">Purchase Information</td>
    </tr>

    <tr>
      <td width="35" align="center" bgcolor="#014358" style="color:white;">Image</td>
      <td width="40" align="center" bgcolor="#014358" style="color:white;">Product</td>
      <td width="20" align="center" bgcolor="#014358" style="color:white;">Price</td>
      <td width="20" align="center" bgcolor="#014358" style="color:white;">Quantity</td>
      <td colspan="2" align="center" bgcolor="#014358" style="color:white;">Sub-Total</td>
    </tr>

  
  <?php 
  


  $mi_carrito=$_SESSION['carrito'];

       if (isset($mi_carrito)){
  		 $total=0;
  		 for ($i=0;$i<count($mi_carrito);$i++){	
  		      if($mi_carrito[$i]<> NULL){		
  ?> 

    <tr  > 
         <td align="center"><img src="<?php echo 'public/img/productos/'.$mi_carrito[$i]['imagen']; ?> " width="50" height="50" align="right" /></td>
          <td class="prosesosTxt">                 <?php echo $mi_carrito[$i]['nombre']; ?>      </td>
          <td align="center"class="prosesosTxt">   <?php echo $mi_carrito[$i]['precio']; ?>      </td>
          <td align="center"class="prosesosTxt">   <?php echo $mi_carrito[$i]['cantidad']; ?>   </td> 
          
          <?php $subtotal= $mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
                $total=$total+$subtotal;
          ?>
          
          <td width="20" align="center"class="prosesosTxt">   <?php echo $subtotal ?>             </td>
          <td width="5" align="right"><img src="public/iconos/chequear.png" width="20" height="20" /></td>
      
    </tr>
   
   <?php  
   
  			      }
   			 }
  		 } 
   ?> 
    

    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td align="right"bgcolor="#FFFFFF">TOTAL</td>
      <td align="center"bgcolor="#014358"style="color:white;"><?php if (isset($total))echo $total ;?></td>
      <td align="right" bgcolor="#FFFFFF"><img src="public/iconos/chequear.png" width="20" height="20" /></td>
    </tr>

    </tbody>
  </table>
  
  </form>
</div>
 
</body>
</html>