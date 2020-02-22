 
<?php        require_once "UploadClass.php";
 
  
                 $obj_prod = new UploadClass(); 
                 $productos = $obj_prod->getProductos();

     for ($i=0; $i < count($productos); $i++) { 
                  $VeProId .= "<div class='productosCaja fade'>  ";
                  $VeProId .= ($productos[$i]['strOferta']==1)?"<div class='circuloEsquina2'>OFERTA</div>":"";
                  $VeProId .= "<div class='cajatitulo'>";
                  $VeProId .= "<p class='titulo'>".trabajo::corta_palabra($productos[$i]['strProdNombProducto'],16)." </p>";
                  $VeProId .= "</div> ";
                  $VeProId .= "<div class='foto'>";
                  $VeProId .= "<a id='verF' class='fancybox-buttons' data-fancybox-group='button' href='library/public/img/productos/".$productos[$i]['strProdImagen']."' title='".$productos[$i]['strProdNombProducto']." - ".$productos[$i]['strProdDescripcion']."'>";
                  $VeProId .= "<img src='library/public/img/productos/".$productos[$i]['strProdImagenThumb']."' height='70' alt='no toy ja ja UP!'/></a>";
                  $VeProId .= "</div> "; 
                  $VeProId .= "<div class='importe'><span>$ ".$productos[$i]['floatProdPrecio']."</span></div>";
                  $VeProId .= "<div class='comprar'>";
                  $VeProId .= "<div class='antesCarrito'>".trabajo::corta_palabra($productos[$i]['strProdDescripcion'],40)."</div>";
                  $VeProId .= "<div class='antescCarrito'>";
                  $VeProId .= "<a id='verF' class='fancybox-buttons' data-fancybox-group='button' href='library/public/img/productos/".$productos[$i]['strProdImagen']."' title='".$productos[$i]['strProdNombProducto']." - ".$productos[$i]['strProdDescripcion']."'>";
                  $VeProId .= "<img src='library/public/iconos/verDetalle.png' width='22' height='22' > ";
                  $VeProId .= " </a></div>";
                  $VeProId .= " <div class='carritoRojo'>";
                  $VeProId .= "<a id='compra".$productos[$i]['id_producto']."' class='fancybox fancybox.iframe' title='Comprar' href='library/prosesos.php?RecordId=".$productos[$i]['id_producto'] ."&&Foto=".$productos[$i]['strProdImagenThumb']."&&Titulo=".$productos[$i]['strProdNombProducto']."&&Codigo=".$productos[$i]['id_categProd']."-k-".$productos[$i]['id_subcategProd']."-k-".$productos[$i]['id_producto']."&&Importe=".$productos[$i]['floatProdPrecio']."&&ProdMarca=".$productos[$i]['strProdMarca']."&&ProdVolumen=".$productos[$i]['strProdVolumen']."&&ProdDescripcion=".$productos[$i]['strProdDescripcion']."&&Cantidad=1&&Oferta=".$productos[$i]['strOferta']."'>";
                  $VeProId .= "<img src='library/public/iconos/carroCompra.png' width='22' height='22'> </a>";
                  $VeProId .= "</div> </div>";    
                  $VeProId .= "</div> ";                 
                                
     }
      return printf($VeProId);
      //  'library/public/img/productos/inicial.gif' data-original=
      //$VeProId .= "<img src='library/public/img/productos/inicial.gif' data-original='library/public/img/productos/".$productos[$i]['strProdImagenThumb']."' height='70' alt='no toy ja ja UP!'/></a>";