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
  
 <form class="col-sm-6 form-horizontal" method="post" action="<?php  echo base_url()?>/Usuarios/guardar "> 

      <h2 class="col-sm-offset-4">Registro</h2> 

    <div class="input-group">

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <label for="nombre" ></label>
      <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre">
    </div>
     <br>
    <div class="input-group">

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <label for="apellido" ></label>
      <input id="apellido" type="text" class="form-control" name="apellido" placeholder="Apellido">
    </div>
      <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <label for="email" ></label>
      <input id="email" type="text" class="form-control" name="email" placeholder="Correo">
    </div>
      <br>
  
 
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <label for="telefono" ></label>
      <input id="telefono" type="number" class="form-control" name="telefono" placeholder="Telefono">
    </div>
     <br>
    
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <label for="edad" ></label>
      <input id="edad" type="number" class="form-control" name="edad" placeholder="Edad">
    </div>
     <br>
   
    <div class="form-group">        
      <div class="col-sm-offset-5 ">
        <button type="Submit" class="btn btn-success btn-lg">Submit</button>
      </div>
    </div>
  </form>
</div>  


</body>
</html>