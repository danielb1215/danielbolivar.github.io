<?php


    
     foreach ($resultado as $row) {
       
     }
   

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="./assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="./assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="./assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="./assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" >
    <!-- Logo -->
    <a href="<?php base_url()?>" class="logo" style="background-color: orange">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>Ya</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Servicios ya!</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: orange">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu" style="background-color: orange">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="./uploads/<?php echo $row['foto']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php   echo $row['nombre'] ." ".  $row['apellido']; ; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="./uploads/<?php echo $row['foto']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php   echo $row['nombre'] ." ".  $row['apellido']; ; ?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url(); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <!-- Main content --> 



      <div class="row">
     
        <!-- /.col -->
        
        <!-- /.col -->
       
      

        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('./assets/dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php   echo $row['nombre'] ." ".  $row['apellido']; ; ?></h3>
              <h5 class="widget-user-desc">Web Designer</h5>
            </div>
             <div id="editarfoto" hidden="">
             <button   type="button" class="btn btn-info col-sm-offset-7 " data-toggle="modal" data-target="#myModal">Editar Foto</button>
            </div>               
            <div class="widget-user-image">

     
              <img class="img-circle" src="./uploads/<?php echo $row['foto'];?> " alt="User Avatar">
     

     
     
          </div> 

            <div class="box-footer">
              <div class="row col-sm-12">

              <br> 
    
            <div class="container">
 
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar foto</h4>
        </div>
        <div class="modal-body">
                     <?php ?>

     <?php echo form_open_multipart('upload/do_upload/'. $row['id']);?>
                 <div id="formfoto" class="form-group" >
                   
              <img class="left img-circle img-responsive" style="max-width: 20% " src="./uploads/<?php echo $row['foto']; ?>" alt="User Avatar">
              
              <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="userfile"><br>
                  <button type="submit" class="btn btn-success btn-lg" value="upload" >Enviar </button>
                
                 </div>
            </div>
          
            </form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

             <?php echo validation_errors(); 
        ?>
       <?php echo form_open_multipart('modificar/editar/' . $row['id']); ?>
                <div class="col-sm-8 border-right">
                  <h3 class="description-header text-center">Descripcion</h3>
                    <div class="description-block">
                    <span id="text" class="text-justify "><?php echo $row['descripcion']; ?> </span>
 
                    <div class="form-group" hidden="">
                   <textarea class="form-control" name="descripcion" rows="6" placeholder=""><?php echo $row['descripcion']; ?></textarea>  </div>
                 
                  </div>
                 
                     <h3 class="description-header text-center">Habilidades</h3>
                  <div class="description-block">
                    <span class="text-justify "><?php echo   $row['habilidades']; ?></span>

           <div class="form-group" hidden="">
                   <textarea class="form-control" name="habilidades" rows="6" placeholder=""><?php  echo $row['habilidades']; ?></textarea>  </div>
 
                  </div>

                  
                  <h3 class="description-header text-center">Experiencia Laboral</h3>
                  <div class="description-block">
                    <span class="text-justify "><?php  echo $row['experiencia']; ?></span>

                   <div class="form-group" hidden="">
                   <textarea class="form-control" name="experiencia" rows="6" placeholder=""><?php  echo $row['experiencia']; ?></textarea>  </div>
 
                  </div>

       
                 </div> 
          <!-- /.col -->
                <div class="col-sm-4">
                <div id="editar" class="btn btn-info col-sm-offset-4 ">Editar Perfil </div>
                  <div class="description-block">
                    <h5 class="description-header">Informacion</h5>
                    </div>
                    <br>
                    <span class="description-text"><strong>Correo:</strong> <?php  echo $row['correo'];?><br><br> </span>

          
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-3 control-label">Nombres:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="nombre" id="inputEmail3" value="<?php  echo $row['nombre'];?>">
</div>
</div>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-3 control-label">Apellidos:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="apellido" id="inputEmail3" value="<?php  echo $row['apellido'];?>">
</div>
</div>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-3 control-label">Correo:</label>
<div class="col-sm-9">
<input type="email" class="form-control" name="correo" id="inputEmail3" value="<?php  echo $row['correo'];?>">
</div>
</div>
                    
                    <span class="description-text"><strong>Telefono:</strong> <?php  echo $row['telefono'];?></span> <br><br>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-3 control-label">Telefono:</label>
<div class="col-sm-9">
<input type="number" class="form-control" name="telefono" id="inputEmail3" value="<?php   echo $row['telefono'];?>">
</div>
</div>
                    <span class="description-text"><strong>Telefono2:</strong> <?php  echo $row['telefono2'];?></span> <br><br>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-3 control-label">Telefono2:</label>
<div class="col-sm-9">
<input type="number" class="form-control" name="telefono2" id="inputEmail3" value=" <?php  echo $row['telefono2'];?>">
</div>
</div>
                    <span class="description-text"><strong>Cedula:</strong> <?php  echo $row['cedula'];?></span> <br><br>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-3 control-label">Cedula:</label>
<div class="col-sm-9">
<input type="number" class="form-control" name="cedula" id="inputEmail3" value="<?php  echo  $row['cedula'];?>">
</div>
</div>
                    <span class="description-text"><strong>Ciudad:</strong> <?php  echo $row['ciudad'];?></span> <br><br>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-3 control-label">Ciudad:</label>
<div class="col-sm-9">
<input type="text" class="form-control" name="ciudad" id="inputEmail3" value="<?php  echo $row['ciudad'];?>">
</div>
</div>
                    <span class="description-text"><strong>Fecha de nacimiento:</strong> <?php  echo $row['fecha_nacimiento'];?></span> <br><br>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-4 control-label">Fecha De Nacimiento:</label>
<div class="col-sm-8">
<input type="date" class="form-control" name="fecha_nacimiento" id="inputEmail3" value="<?php  echo $row['fecha_nacimiento'];?>">
</div>
</div>
 


  <div class="form-group">
                  <label for="exampleInputFile">Hoja de vida</label>
                  
                  <button type="button" class="btn btn-default " data-toggle="modal" data-target="#file" value="" ><?php  echo $row['file'];?></button>
                
                 </div>
              
                <?php  if ($row['estatus'] == 1 ) {
                       

                       ?>
                   <span class="description-text" style="color:Green;"><strong>Estatus:</strong>Habil</span> <br><br>   
                   <?php

                }else {
                     
                   ?>
                   <span class="description-text" style="color:red;"><strong>Estatus:</strong>Ocupado</span> <br><br>   
                   <?php

                }


   ?>

                 

              
           <span class="description-text"><strong>Cargo:</strong> <?php  echo $row['cargo'];?></span> <br><br>
<div class="form-group" hidden="">
<label for="inputEmail3" class="col-sm-4 control-label">Cargo:</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="fecha_nacimiento" id="inputEmail3" value="<?php  echo $row['cargo'];?>">
</div>
</div>
 
                     <div class="form-group" hidden="">
                  <label>Estatus</label>
                  <select class="form-control" name="estatus">
                    <option value="1">Habil</option>
                    <option value="0">Ocupado</option>
                   
                  </select>
                </div> 
    

  

                  <!-- /.description-block -->
                </div>
                 

                  <!-- /.description-block -->
    

                </div>
        
                    <div class="form-group" hidden="">        
      <div class="col-sm-offset-5 ">
        <button type="Submit" class="btn btn-success btn-lg">Editar</button>
      </div>
    </div> 

           </div>
                    
                     
          </div>
        
        </div>

        </form>



 <div class="modal fade" id="file" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Subir Hoja de Vida</h4>
        </div>
        <div class="modal-body">
                                       <?php
                  $error = "";
echo $error;                
echo form_open_multipart('File_Upload/do_upload/' .  $row['id']);
echo form_input(array('type' => 'file','name' => 'userfile',));

echo form_submit('submit','upload');
echo form_close();
?>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
                
                 </div>     
      
      </div>
    

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="./assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script type="text/javascript">
  
$(document).ready(function(){

    $("#editar").click(function(){

        $("#editar").hide();
        $(".text-justify").hide();
        $(".description-text").hide();

        $(".form-group").show();
        $("#editarfoto").show();


       
    });

     



});

</script>

<!-- Bootstrap 3.3.6 -->
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="./assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="./assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="./assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="./assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="./assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="./assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="./assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="./assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="./assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./assets/dist/js/demo.js"></script>
</body>
</html>
