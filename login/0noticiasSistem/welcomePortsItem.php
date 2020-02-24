<?php
	     if(session_id()=="")
   {
      session_start();
   }
   if(!isset($_SESSION["id_usuario"])) header("location: ../index.php"); 

   require '../funcs/loginConexion.php';
   require '../funcs/loginFuncs.php';

      $idR = $_GET["recordid"];
	  $idUsuario = $_SESSION["id_usuario"];

	  $sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
	  $result = $mysqli->query($sql);
	  
	  $row = $result->fetch_assoc();

 /* BUSCADOR */		
			$sql = "SELECT * FROM databaseports WHERE id = '$idR'";
			$resultado3 = $mysqli->query($sql);
 /* BUSCADOR */	
 

	  
?>

<html>
	<head>
		<title>Welcome</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		
	</head>
	
	<body>
		<div class="container text-center">
		</br> 
  
		<button class="btn btn-info my-2 my-sm-0 mb-3 "title="Return" onclick = "window.location.href='welcomePorts.php'">  Return </button>
	 	 
	</br></br>
		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
			<a class="navbar-brand" href="#"> <?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?> </a>
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


			
			<div class="row table-responsive">
				<table class="table table-striped table-hover">
					<thead>
						<tr  class="bg-info text-white text-center">
						 
							<th width="5%">Ports</th>
							<th width="15%" colspan = "2"> Country</th>
							<th width="15%">Phone </th>
							<th width="15%">Fax</th>
							<th width="10%">Email</th>
							<th width="10%">web</th>
							 
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado3->fetch_array(MYSQLI_ASSOC)) { ?>
							
						    <tr>
						  
								<td  ><?php echo $row['name']; ?></td>
								<td><img width="60px" height="40px" src="../../img/dataBaseShip/flags/<?php echo $row['flag']; ?>"></td>
								<td  ><?php echo $row['country']; ?></td>					
								<td  ><?php echo $row['phone']; ?></td>
								<td  ><?php echo $row['phoneFax']; ?></td>
								<td  ><?php echo $row['email']; ?></td>
								<td  ><?php echo $row['website']; ?></td>					
							
						    </tr>
						   
								
					</tbody>
				</table>

				</br>
				         <div class="sharethis-inline-share-buttons"></div>
				</br>	
            </div><!-- div class="row table-responsive" -->
      

			<button type="button" class="btn btn-warning">call - <?php echo $row['name']; ?></button>
			<button type="button" class="btn btn-success">Mail - <?php echo $row['name']; ?></button>


			</br></br>	</br>	</br>


			<?php }  ?>
	</div><!-- Container -->
	<script type = 'text/javascript' src = 'https://platform-api.sharethis.com/js/sharethis.js#property=5e4bd4faeac6ff0012aa5888&product=inline-share-buttons' async = 'async'> </script>	
	</body>
</html>		