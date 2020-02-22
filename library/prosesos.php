  <?php 
  if(session_id()=="")
   {
      session_start();
   }
  require_once "UploadClass.php"; ?>
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
    
    
		 <link rel="stylesheet" type="text/css" href="../css/fonts.css" />
     <link rel="stylesheet" type="text/css" href="../css/style.css" /> 
     <link rel="stylesheet" type="text/css" href="../css/stylep.css" />
</head>
<body style="background: white;">
<div  style="background: #014358;width:100%;height:100%;overflow:auto;text-align:center;">
</br> </br>     
<?php
 
       //  print_r($_GET);
       //  echo "<--GET</br>";
      //   print_r($_POST);
       //  echo "<--POST</br>";
      //   print_r($_SESSION);
      //   echo "<--SESSION</br>";
        

if (isset($_GET['RecordId']) ) {
			$idProducto=$_GET['RecordId'];
			$strImagen = $_GET['Foto'];
			$strTitulo=$_GET['Titulo'];
			$strCodigoProducto=$_GET['Codigo'];
			$intPrecio=$_GET['Importe'];
			$strMarca=$_GET['ProdMarca'];
			$strVolumen=$_GET['ProdVolumen'];
			$strDescripcion=$_GET['ProdDescripcion'];
			$cantidad=$_GET['Cantidad'];
			$intoferta = $_GET['Oferta'];
			$mi_carrito[]=array('id'=>$idProducto,'imagen'=>$strImagen,'nombre'=>$strTitulo,'codigo'=>$strCodigoProducto,'precio'=>$intPrecio, 'marca'=>$strMarca,  'volumen'=>$strVolumen,  'descripcion'=>$strDescripcion,'cantidad'=>$cantidad,'oferta'=>$intoferta);
}
 // echo $cantidad."el ID del producto es : <b>".$idProducto."</b> - el titulo es: <b>".$strTitulo."</b> - el codigo es: <b>".$strCodigoProducto."</b> - el Precio del producto es <b> $ ".$intPrecio.".- </b> ------";


if (isset($_SESSION['carrito'])) {
	$mi_carrito=$_SESSION['carrito'];
		if (isset($_GET['RecordId']) ) {
			$idProducto=$_GET['RecordId'];
			$strImagen = $_GET['Foto'];
			$strTitulo=$_GET['Titulo'];
			$strCodigoProducto=$_GET['Codigo'];
			$intPrecio=$_GET['Importe'];
			$strMarca=$_GET['ProdMarca'];
			$strVolumen=$_GET['ProdVolumen'];
			$strDescripcion=$_GET['ProdDescripcion'];
			$cantidad=$_GET['Cantidad'];
			$intoferta = $_GET['Oferta'];
				        $pos=-1;
						for($i=0;$i<count($mi_carrito);$i++){
								if ($idProducto==$mi_carrito[$i]['id']){
									$pos=$i;	
								}	
						}
						if ($pos<>-1){
							  $cuanto=$mi_carrito[$pos]['cantidad'] + $cantidad;
							  $mi_carrito[$pos]=array('id'=>$idProducto,'imagen'=>$strImagen,'nombre'=>$strTitulo,'codigo'=>$strCodigoProducto,'precio'=>$intPrecio, 'marca'=>$strMarca,  'volumen'=>$strVolumen,  'descripcion'=>$strDescripcion,'cantidad'=>$cantidad,'oferta'=>$intoferta);
						 } else {
							$mi_carrito[]=array('id'=>$idProducto,'imagen'=>$strImagen,'nombre'=>$strTitulo,'codigo'=>$strCodigoProducto,'precio'=>$intPrecio, 'marca'=>$strMarca,  'volumen'=>$strVolumen,  'descripcion'=>$strDescripcion,'cantidad'=>$cantidad,'oferta'=>$intoferta);
						}
		}
}

if (isset($_POST['id2']))
{
	$indice=$_POST['id2'];
	$cuanto=$_POST['cantidad2'];
	$mi_carrito[$indice]['cantidad']=$cuanto;
}

if (isset($_POST['id3']))
{
	$indice=$_POST['id3'];
	$mi_carrito[$indice]=NULL;
}

if (isset($mi_carrito))$_SESSION['carrito']=$mi_carrito;
?>
 
 <button onclick = "location='supplylogistics'" class="buttonx grande verdeProseso fancybox fancybox.iframe" title="Continue Shopping"><span> Continue Shopping <i class="icon icon-cart"></i></span></button>  				
 


<div class="tituloCarritoProseso">Purchase Detail</div>
<br/><br/><br/><br/>

<?php 
		if (isset($mi_carrito)){
				 $total=0;
				for ($i=count($mi_carrito);$i>=0;$i--){	
				        if($mi_carrito[$i]<> NULL){		
							?> 

				<div class="carritoProseso">

					  <div class="fotoProseso">
                           <img src="<?php echo 'public/img/productos/'.$mi_carrito[$i]['imagen']; ?> " height="45"/> 
            </div>
            
						<div class="contentProseso"><?php echo ($mi_carrito[$i]['oferta']==1)?"<div class='circuloEsquina2'>OFERTA</div>":"";?>
				                  <div class="tituloProseso">
                                <?php echo trabajo::corta_palabra($mi_carrito[$i]['nombre'],25); ?> 
                          </div>
							            <div class="marcaProseso">
                                <span><?php echo $mi_carrito[$i]['marca']; ?> |</span><span>| <?php echo $mi_carrito[$i]['volumen']; ?>  |</span><span>| Codigo: <?php echo $mi_carrito[$i]['codigo']; ?>  </span>
                          </div>
                          <div class="detalleProseso"id="ww">
                                <?php echo $mi_carrito[$i]['descripcion']; ?>
                          </div>
            </div>
            
						<div class="importeProseso">
                      $<strong>  <?php echo $mi_carrito[$i]['precio']; ?></strong>
            </div>

						<div class="cantidadProseso" >
					        <form action="" method="post" name="actualizo">
								    <input name="id2" type="hidden" value="<?php echo $i ?>" />
								    <input class="inputNumber" name="cantidad2" type="number" value="<?php echo $mi_carrito[$i]['cantidad']; ?>"  min="1" max="24"width="15" height="15"  />
								    <input name="" class="giro2" type="image" src="public/iconos/actualuzar3.png" align="middle" title="Cambie la Cantidad y presione este Boton para Actualizar" width="15" height="15" />
							</form>
						</div>	

						<div class="subtotalProseso">
                          $<strong><?php $subtotal= $mi_carrito[$i]['precio']*$mi_carrito[$i]['cantidad'];$total=$total+$subtotal;echo $subtotal; ?></strong> 
            </div>			  
						
						<div class="borraProseso">
				         <form action="" method="post" name="borrar">
					            <input name="id3" type="hidden" value="<?php echo $i ?>" />
					            <input name="" class="giro2" type="image" src="public/iconos/borrar1.png" align="middle" title="Sacar del Carrito el Producto" width="20" height="20" />
					    </form> 

						</div>											     
				</div>   	

<?php  	 
											    }
								 		}
								} 
						 ?> 
	<div class="totalComprarProseso">
<?php if (isset($_SESSION['carrito']) && $total >10){ ?>
	 <div class="comprarProsseso"> 
	    <form id="form1" name="form1" method="post" action="ConfirmarPedido">
	     <button type="submit" class="buttonx grande azupProseso fancybox fancybox.iframe" title="Confirm" ><span>Confirm <i class="icon icon-forward"></i></span></button>
	    </form>
	 </div>
<?php } else { ?> 
	<div class="comprarProsseso">
	    <button type="button" class="buttonx grande azupProseso " title="Minimal Purchase $10.-" ><span>Minimal Purchase $10.- <i class="icon icon-cart"></i></span></button>
	</div>
<?php } ?>
    <div class="totalProseso">
    	<span style="font-size:0.6em;padding-top:15px;">Total $</span><strong> <?php if (isset($total))echo $total ;?> </strong></div>
   </div>


 <button onclick = "location='supplylogistics'" class="buttonx grande verdeProseso fancybox fancybox.iframe" title="Continue Shopping" ><span> Continue Shopping <i class="icon icon-cart"></i></span></button>  				
 

	 
