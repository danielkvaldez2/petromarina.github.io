<?php
	require '../funcs/loginConexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE titulo LIKE '%$valor%'"; 
		}
	}
	$sql = "SELECT * FROM personas $where ORDER BY id DESC ";
	$resultado = $mysqli->query($sql);
	
?>
 
<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
     
		<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
    
		 
		
	</head>
	
	<body>
		
	<div class="container">
			<div class="row">
				<h2 style="text-align:center">Petromarina Last News</h2>
			</div>
		 	
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
		        </br></br>
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Noticia: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
		  		</form>
            </div>

                 </br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr  class="bg-success">
              <th width="5%">ID</th>
              <th width="5%">DIA</th>
              <th width="7%"> MES</th>
              <th width="13%">POSTED BY </th>
              
              <th width="15%">Titulo</th>
              <th width="11%">FOTO</th>
          
							<th width="40%">Texto</th>
						
					    <th width="2%">Editar</th>
							<th width="2%">Delet</th>
               
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
                <td><?php echo $row['id']; ?></td>
                <td  ><?php echo $row['dia']; ?></td>
                <td  ><?php echo $row['mes']; ?></td>
                 <td  ><?php echo $row['posted']; ?></td>
              
                <td  ><?php echo $row['titulo']; ?></td>
                <td>
                  <img width="60px" height="40px" src="files/<?php echo $row['id']; ?>/<?php echo $row['archivo']; ?>"> 
                </td>
                 
                <td><textarea id="texto" name="texto" rows="10" cols="50"><?php echo $row['texto']; ?></textarea></td>

                <td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                 
							  <td><a href="eliminar.php?id=<?php  echo $row['id']; ?>" onclick="return confirm('Are you sure to DELETE?');"><span class="glyphicon glyphicon-trash"></span></a></td> 
							  
              </tr>
						<?php }  ?>
					</tbody>
				</table>
            </div><!-- div class="row table-responsive" -->
      
	</div><!-- Container -->
		
 
 
		
	</body>
</html>	