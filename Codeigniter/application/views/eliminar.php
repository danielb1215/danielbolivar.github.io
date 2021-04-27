

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body> 

 
  <div class="container">
  <div class="jumbotron">

     <h1>Eliminar</h1>
     <h4>Esta seguro que quiere eliminar el registro #: <?php echo $resultado->id ?></h4>
     <h5>Con Nombre:<?php echo $resultado->nombre ?> y Apellido:<?php echo $resultado->apellido ?> </h5>

     <div class="form-group">

     <a class="btn btn-success" href="<?php echo base_url();?>usuarios/borrar/<?php echo   $resultado->id ?>">Si, Eliminar </a>	
     <a class="btn btn-danger">No, Volver </a>	
     


     </div>
  	

  </div>
  	


  </div>

</body>
</html>