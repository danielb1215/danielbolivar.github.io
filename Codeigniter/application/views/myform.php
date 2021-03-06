<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta name="description" content="Creative One Page Parallax Template">
  <meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
  <meta name="author" content=""> 
  <title>HIMU - OnePage HTML Parallax template</title> 
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet"> 
  <link href="css/animate.css" rel="stylesheet"> 
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet"> 
  <!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
  <script src="js/respond.min.js"></script> <![endif]--> 
  <link rel="shortcut icon" href="images/ico/favicon.png"> 
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> 
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> 
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> 
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php echo validation_errors(); ?>

<?php echo form_open('form',array('class' => 'col-sm-4 col-md-5 form-horizontal')); ?>

     

    <div class="input-group">

      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre">
    </div>
     <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="apellido" type="text" class="form-control" name="apellido" placeholder="Apellido">
    </div>
      <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Correo">
    </div>
      <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="clave" placeholder="Contrase??a">
    </div>
      <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="cedula" type="number" class="form-control" name="cedula" placeholder="Cedula">
    </div>
     <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
      <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" placeholder="fecha_nacimiento">
    </div>
      <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="telefono" type="number" class="form-control" name="telefono" placeholder="Telefono1">
    </div>
     <br>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="telefono" type="number" class="form-control" name="telefono2" placeholder="Telefono2">
    </div>
        <br>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input id="ciudad" type="text" class="form-control" name="ciudad" placeholder="Ciudad">
    </div>
     <br>
   
    <div class="form-group">        
      <div class="col-sm-offset-5 ">
        <button type="submit" class="btn btn-success btn-lg">Submit</button>
      </div>
    </div>
  </form>
</body>
</html>

