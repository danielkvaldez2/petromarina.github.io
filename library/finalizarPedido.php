 <?php 
  if(session_id()=="")
   {
      session_start();
   }




//echo "entre en FINALIZARPEDIDO.PHP1</br>";
         // print_r($_GET);
         // echo "<--GET</br>";
         // print_r($_POST);
         // echo "<--POST</br>";
         // print_r($_SESSION);
         // echo "<--SESSION</br>";
//echo "entre en FINALIZARPEDIDO.PHP2</br>";


//session_destroy();  
//header ("Location: http://www.petromarina.net/library/supplylogistics.php");// redireciona al inicio si no hay conexion borrar

           require_once "conexion.php";

          $nombre= $mysqli->real_escape_string($_POST['nombreC']);                //   aca estoy
          $direccion= $mysqli->real_escape_string($_POST['direccionC']);          //   aca estoy
          $telefono= $mysqli->real_escape_string($_POST['telefonoC']);            //   aca estoy
          $horario= $mysqli->real_escape_string($_POST['horarioC']);              //   aca estoy
          $correo= $mysqli->real_escape_string($_POST['correoC']);                //   aca estoy



  //echo "entre en FINALIZARPEDIDO.PHP3</br>";           
            $mi_carrito=$_SESSION['carrito'];
            $ubicacion=$_SESSION['ipUsuario'];
                $ip=$ubicacion[0]['IP'];   // "255:343:234:234";
                $lat=$ubicacion[0]['Latitud']; // "59.34345";
                $long=$ubicacion[0]['Longitud'];  // "25.534534";
 /*echo "entre en FINALIZARPEDIDO.PHP4</br>";
           echo $nombre." -1 </br>" ;
            echo $direccion." -2</br> " ;
            echo $telefono." -3</br> " ;
            echo $horario." -4</br></br> " ;
            echo $correo." -5</br> " ;
            echo $ip." -6 </br>" ;
            echo $lat." -7 </br>" ;
            echo $long." -8 </br>" ;
   echo "entre en FINALIZARPEDIDO.PHP5</br>";   */       
  require_once "UploadClass.php";
            $obj_prodg = new UploadClass();
            $result = $obj_prodg-> grabaVenta($nombre,$direccion,$telefono,$horario,$correo,$ip,$lat,$long);
            if($result <> null){
            //echo "<script> alert('GUARDADO...');</script>";
            // echo $result;
                ?> 


 
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
      <body style="background: white;color:black;font-size: 16px;">
      <div  style="width:800px;height500px;overflow:auto;"> 
      <div class="contenedorC" > 
        <div class="contenedorl">  
          <div class="cabezera">
                <center><h1>Ticket-Purchase</h1></center>
          </div> 
          <center>
            <?php 
          
                  $saludo='
                  <h2> Petromarina.net <br></h2>
                  <h2> Thanks for your purchase <br></h2><h4>'.$nombre.'</h4>  
                  Your transactions have ended and we have sent you<br>
                  a receipt for your purchase by EMAIL<br>
                  An operator of our Company will contact you.<br> 
                  Best regards.-
                  <br> 
                  <h2>Petromarina.net  </h2>';
                  
                  $pedido1 ='
                  <h3> Thanks for your purchase <br></h3><h4>'.$nombre.'</h4> 
                  Your transactions have ended.  <br>
                  An operator of our Company will contact you. <br>
                  Best regards.-
                  <br>';
                  $pedido .= '
                  CLIENT DATA <br>
                  Name: '.$nombre.'<br>
                  Direction: '.$direccion.'<br>
                  Phone: '.$telefono.'<br>
                  E-Mail: '.$correo.'<br>
                  <br>
                  Your purchase is as follows:   <br>
                  <br>';
                      if (isset($mi_carrito)){
                          $total=0;
                          $pedido.=' 
                                              <table width="533" border="0">
                                                <tr>
                                                  <td colspan="5" align="center" bgcolor="#65b31c" style="color:white;"><h3>LIST OF YOUR PURCHASES</h3></td>
                                                </tr>
                                                <tr>
                                                  <td width="182" align="center" bgcolor="#9CDB60">Product</td>
                                                  <td width="84" align="center" bgcolor="#9CDB60">Price</td>
                                                  <td width="109" align="center" bgcolor="#9CDB60">Quantity</td>
                                                  <td colspan="2" align="center" bgcolor="#9CDB60">Sub-Total</td>
                                                </tr>
                                                
                                                ';		 
                          
                          for ($i=0;$i<count($mi_carrito);$i++){	
                                if($mi_carrito[$i]<> NULL)
                                {	  
                                $subtotal= $mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];
                                $total=$total+$subtotal;
                                $pedido.='   
                                  <tr>
                                      <td bgcolor="#C5ED9F" class="prosesosTxt">'.                             $mi_carrito[$i]['nombre']         .'</td>
                                      <td align="right" bgcolor="#C5ED9F"class="prosesosTxt">'.               $mi_carrito[$i]['precio']         .'</td>
                                      <td align="center" bgcolor="#C5ED9F"class="prosesosTxt">'.              $mi_carrito[$i]['cantidad']       .'</td> 				
                                      <td width="94" align="right" bgcolor="#C5ED9F"class="prosesosTxt">'.    $subtotal                         .'</td>  
                                  </tr>
                                ';	
                                
                                }
                          }
                          $pedido.=' <tr><td></td><td></td><td align="right"> Total</td><td  align="right" bgcolor="#9CDB60"class="prosesosTxt">  '.$total;
                          $pedido.='</td></tr> <tr><td><br><br><h1>petromarina.net </h1> <br></td></tr>';		  	
                          echo $saludo;
                          echo $pedido; // anular estey activa mail// anular estey activa mail// anular estey activa mail
                          // anular estey activa mail// anular estey activa mail// anular estey activa mail
                          // anular estey activa mail// anular estey activa mail// anular estey activa mail
                          // anular estey activa mail// anular estey activa mail// anular estey activa mail
                                              ////////////////////////////////////////////////////////////
                  
                  // Varios destinatarios
              
                  $para  = $correo . ', '; // atenci?n a la coma
                  $para .= 'danielkvaldez2@gmail.com';  //////////// correo de la empresa
                  



                  // subject
                  $titulo = 'Compra realizada ...';
                // $titulo2 = 'Nueva Compra en la web ...';
                  
                  // message
                  $mensaje = $pedido1.$pedido;
                // $mensaje2 = $pedido;
                  
                  // Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
                  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
                  $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                  // Cabeceras adicionales
                  //$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
                  $cabeceras .= 'From: Petromarina <danielkvaldez2@gmail.com>' . "\r\n";
                  //$cabeceras .= 'Cc: danielkvaldez@hotmail.com' . "\r\n";
                  //$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";
                  
                  // Mail ****************************************************************************** ACA SE MANDA EL EMAIL *************************************************
                  mail($para, $titulo, $mensaje, $cabeceras);
                // @mail($para2, $titulo2, $mensaje2, $cabeceras);
                  // Mail ****************************************************************************** ACA SE MANDA EL EMAIL *************************************************
                            /////////////////////////////////////////////////////////////
                      }	
                      
      ?>

      <button type="button" class="btn btn-success " onclick="window.print();" ><span>To Print <i class="icon icon-newspaper"></i></span></button>
          
        </center>
      </div>
      </div>
      

          <?php session_destroy(); ?>
      <button onClick="location.href='supplylogistics'" class="btn btn-warning mb-8" title="Salir" ><span> Exit <i class="icon icon-cart"></i></span></button> 

      </br>  </br>
        <?php    
   
          }
            else {
                 
                  echo "No se pudo Realizar la transaccion, Disculpe, pruebe de nuevo, Gracias.";
                  header ("Location: supplylogistics");// redireciona al inicio si no hay conexion       http://petromarina.net/library/
              
            }
        
session_destroy();  
    
  ?>

 </div>
 </body>
</html>

