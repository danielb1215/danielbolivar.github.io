<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


 <div class="container">
  
 <form class="col-sm-6 form-horizontal" method="post" action="<?php  echo base_url()?>Usuarios/editar/<?php echo  $resultado->id ?> "> 

      <h2 class="col-sm-offset-4">EDITAR</h2> 

    <div class="input-group">
      
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nombre" type="text" class="form-control" name="nombre" value="<?php  echo $resultado->nombre ?>">
    </div>
     <br>
    <div class="input-group">

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <label for="apellido" ></label>
      <input id="apellido" type="text" class="form-control" name="apellido" value="<?php  echo $resultado->apellido ?>">
    </div>
      <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <label for="email" ></label>
      <input id="email" type="text" class="form-control" name="email" value="<?php  echo $resultado->correo ?>">
    </div>
      <br>
       <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <label for="email" ></label>
      <input id="cedula" type="text" class="form-control" name="cedula" value="<?php  echo $resultado->cedula ?>">
    </div>
      <br>
           
  
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <label for="telefono" ></label>
      <input id="telefono" type="number" class="form-control" name="telefono" value="<?php  echo $resultado->telefono ?>">
    </div>
    <br>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="telefono" type="number" class="form-control" name="telefono2" value="<?php  echo $resultado->telefono2 ?>">
    </div>
        <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="<?php  echo $resultado->fecha_nacimiento ?>">
    </div>
      <br>
   
    
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input id="ciudad" type="text" class="form-control" name="ciudad" value="<?php  echo $resultado->ciudad ?>">
    </div>
     <br>
   
    <div class="form-group">        
      <div class="col-sm-offset-5 ">
        <button type="Submit" class="btn btn-success btn-lg">Editar</button>
      </div>
    </div>
  </form>
</div>  


</body>
</html>