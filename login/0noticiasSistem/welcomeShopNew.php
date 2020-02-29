<?php
	     if(session_id()=="")
   {
      session_start();
   }
   if(!isset($_SESSION["id_usuario"])) header("location: ../index.php"); 

   require '../funcs/loginConexion.php';
   require '../funcs/loginFuncs.php';
  
 
   $idUsuario = $_SESSION["id_usuario"];

   $sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
   $result = $mysqli->query($sql);
   
   $rowUser = $result->fetch_assoc();

	
 

	  
?>

<html>
<head>
		<title>Welcome</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
		
	
	 
</head>
	
<body>
	<div class="container text-center"> 
		</br> 
  
		<button class="btn btn-info my-2 my-sm-0 mb-3 "title="Return" onclick = "window.location.href='welcomeShop.php'">  Return </button>
		<button class="btn btn-danger my-2 my-sm-0 mb-3 "title="Return" onclick = "window.location.href='welcomeShop.php'"> New Record</button>
	 	 
		</br></br>
		<div class="shadow p-3 mb-5 bg-white rounded">		
			<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
				<a class="navbar-brand" href="#"> <?php echo 'Bienvenid@ '.utf8_decode($rowUser['nombre']); ?> </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<?php if($_SESSION['tipo_usuario']==1) { ?>
						<li class="nav-item">
							<a class="nav-link" href="#">Administrador <span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Petromarina Ports<span class="sr-only">(current)</span></a>
						</li>						
					<?php } ?>					
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>
					</ul>					
				</div>
			</nav>
		</div>
<?php if($_SESSION['tipo_usuario']==1) { ?>
		</br></br>

	<form class="form-horizontal" method="POST" action="guardarShops.php" enctype="multipart/form-data" autocomplete="off">

		<div class="shadow p-3 mb-5 bg-white rounded">
		 


			<div class="shadow p-3 mb-5 bg-white rounded">
			<div class="card" >
				<img src="../../library/public/img/productos/5.jpg" class="card-img-top" height="300" width ="400" alt="Imagen">
				</div> 
			</div> 
			<div class="form-group row">
			<label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>	
			<div class="col-sm-10">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="imagen" name="imagen" >
					<label class="custom-file-label" for="imagen">Choose file...</label>
				</div>
			</div>
			</div>

			<div class="shadow p-3 mb-5 bg-white rounded">

			<div class="form-group row bg-light ">
			    <div class="form-group col-md-6 ">
				    <label for="strProdNombProducto">Name Product</label>
					<input type="text" class="form-control" id="strProdNombProducto" name="strProdNombProducto" placeholder="Name Product"  >
				</div>
				<div class="form-group col-md-6 ">
				    <label for="strProdDescripcion">Nombre Producto</label>
					<input type="text" class="form-control" id="strProdDescripcion" name="strProdDescripcion" placeholder="Nombre Producto" >
				</div>
				
			</div>

			<div class="form-group row  ">
			    <div class="form-group col-md-4 ">
				    <label for="floatProdPrecio">Price</label>
					<input type="text" class="form-control" id="floatProdPrecio" name="floatProdPrecio" placeholder="Price"  >
				</div>
				<div class="form-group col-md-4 ">
				    <label for="strProdMarca"> BrandProduct </label>
					<input type="text" class="form-control" id="strProdMarca" name="strProdMarca" placeholder="Product Brand" >
				</div>
				<div class="form-group col-md-4">
				    <label for="strProdVolumen">Volumen</label>
					<input type="text" class="form-control" id="strProdVolumen" name="strProdVolumen" placeholder="Volumen"  >
				</div>
			</div>

			<div class="form-group row bg-light ">
			    <div class="form-group col-md-3 ">
				    <label for="strProdCodigo">Codigo</label>
					<input type="text" class="form-control" id="strProdCodigo" name="strProdCodigo" placeholder="Codigo"  >
				</div>
				<div class="form-group col-md-3 ">
				    <label for="id_categProd">Categ Prod</label>
					<input type="text" class="form-control" id="id_categProd" name="id_categProd" placeholder="Categ Prod"  >
				</div>
				<div class="form-group col-md-3">
				    <label for="id_subcategProd">Sub Categ Prod</label>
					<input type="text" class="form-control" id="id_subcategProd" name="id_subcategProd" placeholder="subcategProd" >
				</div>
				<div class="form-group col-md-3 ">
				    <label for="strOferta">Oferta</label>
					<input type="text" class="form-control" id="strOferta" name="strOferta" placeholder="Oferta">
				</div>
			</div>



			</br> 

			<div class="form-group">
				<div class="form-check">
				<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
				<label class="form-check-label" for="invalidCheck3">
				   New Record by the <?php echo 'user '.utf8_decode($rowUser['nombre']); ?>.
				</label>
				<input type="hidden" value="<?php echo $rowUser['nombre']; ?>" name="userModif" id="userModif" >
				

				<div class="invalid-feedback">
					You must agree before submitting.
				</div>
				</div>
			</div>

			<div class="form-group row ">	
			<button type="submit" class="btn btn-danger m-auto" title="New Record" >New Record</button>	
			</div>



		</div>




		</div>
			 
		 
			</br>
    </form>
		    	 
			</br>	  

				<button class="btn btn-info my-2 my-sm-0 mb-3 "title="Return" onclick = "window.location.href='welcomeShop.php'">  Return </button>
			</div>
	</div><!-- Container -->

	</br>	</br> 
 

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>	
	$('#myModal').on('shown.bs.modal', function () {
	$('#myInput').trigger('focus')
	})
</script>

<script type = 'text/javascript' src = 'https://platform-api.sharethis.com/js/sharethis.js#property=5e4bd4faeac6ff0012aa5888&product=inline-share-buttons' async = 'async'> </script>
	

</body>
<?php }  ?>
</html>		