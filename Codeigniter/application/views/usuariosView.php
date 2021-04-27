<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 

<div class="form-group">
	
  <h1>Lista Usuarios</h1>
<a href="<?php echo base_url(); ?>usuarios/crear" class="btn btn-default">Crear Nuevo </a>





</div>


  <table class="table table-striped responsive">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>clave</th>
        <th>telefono</th>
        <th>telefono2</th>
        <th>Cedula</th>
        <th>fecha_nacimiento</th>
        <th>Fecha_registro</th>
        <th>ciudad</th>
      </tr>
    </thead>

    <tbody>
     
 
 <?php 
 foreach ($Usuarios as $row) {
 	
 
 echo '<tr>';
 echo '<td>' . $row['id']. '</td>';
 echo '<td>' . $row['nombre']. '</td>';
 echo ' <td>' . $row['apellido'] . '</td>';
 echo ' <td>' . $row['correo'] . '</td>';
 echo ' <td>' . $row['clave'] . '</td>';
 echo ' <td>' . $row['telefono'] . '</td>';
 echo ' <td>' . $row['telefono2'] . '</td>';
 echo ' <td>' . $row['cedula'] . '</td>';
 echo ' <td>' . $row['fecha_nacimiento'] . '</td>';
 echo ' <td>' . $row['fecha_registro'] . '</td>';
 echo ' <td>' . $row['ciudad'] . '</td>';
  
 echo '<td >' ?>  <a href="<?php echo base_url();?>usuarios/modificar/<?php echo  $row['id'] ?>" class="btn btn-default">Modificar</a>
                  <a href="<?php echo base_url();?>usuarios/eliminar/<?php echo  $row['id'] ?>" class="btn btn-default">Eliminar</a>

 <?php
 echo '</td>' ; 
 echo '</tr>';
 }

 ?>
 
    </tbody>
 
   
  </table>
</body>
</html> 