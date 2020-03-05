</br></br> 
<?php 
   if(session_id()=="")
   {
      session_start();
   }

if (isset($_POST["idProd"])) {
  $id = $_POST["idProd"];
} else {
  $id = 4;
}

// echo $id;

               require_once "UploadClass.php";
 
               $obj_prod22 = new UploadClass(); 
               $productos = $obj_prod22->getProductos3($id);

               for ($i=0; $i < count($productos); $i++) {  

?>

                            
                                       
                    <!-- Parametro q-->	

    <div class="productContainer">
        <div class="productFlag bg-<?php echo $productos[$i]['id_categProd'] ?>"">. </div>
            <div class="product " id="<?php echo $productos[$i]['id_producto']?>" pesable="false">
                  
                  <br>
                  <div class="description limitRow tooltipHere" title="" data-toggle="tooltip" data-original-title="<?php trabajo::corta_palabra($productos[$i]['strProdNombProducto'],16); ?>">
                        <?php echo trabajo::corta_palabra($productos[$i]['strProdNombProducto'],16); ?>
                  </div>

              
              
                  <div class="image">
                    <a id='verF'  href="javascript:void(0)">


                  <img  class="lazyload verBien "   src="../library/public/img/productos/<?php echo $productos[$i]['strProdImagen']?>" alt='NO IMAGEN'  title='<?php echo $productos[$i]['strProdNombProducto'] ?> - <?php echo $productos[$i]['strProdDescripcion']?>' />
                      
                     
                
                    </a>		<!--inicio cucarda-->	
                    <!--fin cucarda-->	
                  </div>


              
                  <div class="item-promo">
                        <?php if ($productos[$i]['strOferta']==1){  echo "O F E R T A";} else {echo "";} ;  ?>
                  </div>

          <div class="colorShop1 bg-<?php   echo $productos[$i]['id_categProd'] ?>"">.</div>
          <div class="colorShop2">.</div>
          <div class="colorShop bg-<?php   echo $productos[$i]['id_categProd'] ?>">       
 
                   <div class="precio-unidad">
                    <span class="precio-referencia">	$	</span>	
                    <span>		<?php echo 12*$productos[$i]['floatProdPrecio']  ?>	</span> 
                    <span class="precio-referencia">	x 12 un.	</span>
                    <br>	
                          <p style="font-size: 10px; color: #fff; font-weight: normal; margin-bottom: 0px;">.
                          </p>
                  </div>  
                
              
                  <div class="description1 limitRow tooltipHere precio-referencia " title="" data-toggle="tooltip" data-original-title=" <?php echo trabajo::corta_palabra($productos[$i]['strProdDescripcion'],40); ?>">
                    <?php echo trabajo::corta_palabra($productos[$i]['strProdDescripcion'],40); ?>
                  </div>


          <!--        <div class="precio-referencia">
                      $ 	<?php //echo $productos[$i]['floatProdPrecio']; ?> x Unidad
                  </div>	-->
                
                  <div class="action-control">                                              
                      <a id='compra<?php echo $productos[$i]['id_producto']?> ' class="btn btn-primary btn-lg "   title='to Buy' href='prosesos?RecordId=<?php echo $productos[$i]['id_producto'] ?>&Foto=<?php echo $productos[$i]['strProdImagenThumb']?>&Titulo=<?php echo $productos[$i]['strProdNombProducto']?>&Codigo=<?php echo $productos[$i]['id_categProd'];?>-k-<?php echo $productos[$i]['id_subcategProd']?>-k-<?php echo $productos[$i]['id_producto']?>&Importe=<?php echo $productos[$i]['floatProdPrecio']?>&ProdMarca=<?php echo $productos[$i]['strProdMarca']?>&ProdVolumen=<?php echo $productos[$i]['strProdVolumen']?>&ProdDescripcion=<?php echo $productos[$i]['strProdDescripcion']?>&Cantidad=6&Oferta=<?php echo $productos[$i]['strOferta']?>'>
                          <span class="add2cart"><i class="fa fa-shopping-cart"></i></span> 
                      </a>                                  
                    </div>	
                </div>
              </div>	
              </div>
             
                                      













             
   <?php                           
                }
              
  
              ?>
              </br>   </br>   </br>   </br>   </br>
 
  