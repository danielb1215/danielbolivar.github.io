
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
  <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
  

    <!-- Main content --> 



      <div class="row">
     
        <!-- /.col -->
        
        <!-- /.col -->
       
      

        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../../assets/dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php   echo $row['nombre'] ." ".  $row['apellido']; ; ?></h3>
              <h5 class="widget-user-desc">Web Designer</h5>
            </div>
                          
            <div class="widget-user-image">

     
              <img class="img-circle" src="../../uploads/<?php echo $row['foto'];?> " alt="User Avatar">
     

     
     
          </div> 


  </div>
  
</div>

         
                <div class="col-sm-8 border-right">
                  <h3 class="description-header text-center">Descripcion</h3>
                    <div class="description-block">
                    <span id="text" class="text-justify "><?php echo $row['descripcion']; ?> </span>
 

                 
                  </div>
                 
                     <h3 class="description-header text-center">Habilidades</h3>
                  <div class="description-block">
                    <span class="text-justify "><?php echo   $row['habilidades']; ?></span>

       

                  
                  <h3 class="description-header text-center">Experiencia Laboral</h3>
                  <div class="description-block">
                    <span class="text-justify "><?php  echo $row['experiencia']; ?></span>

                  
 
                  </div>

       
                 </div> 
                  </div> 
          <!-- /.col -->
                <div class="col-sm-4">
                
                  <div class="description-block">
                    <h5 class="description-header">Informacion</h5>
                    </div>
                    <br>
                    <span class="description-text"><strong>Correo:</strong> <?php  echo $row['correo'];?><br><br> </span>

          

                    
                    <span class="description-text"><strong>Telefono:</strong> <?php  echo $row['telefono'];?></span> <br><br>

                    <span class="description-text"><strong>Telefono2:</strong> <?php  echo $row['telefono2'];?></span> <br><br>

                    <span class="description-text"><strong>Cedula:</strong> <?php  echo $row['cedula'];?></span> <br><br>

                    <span class="description-text"><strong>Ciudad:</strong> <?php  echo $row['ciudad'];?></span> <br><br>

                    <span class="description-text"><strong>Fecha de nacimiento:</strong> <?php  echo $row['fecha_nacimiento'];?></span> <br><br>

 


  <div class="form-group">
                  <label for="exampleInputFile">Hoja de vida:</label><?php  echo $row['file'];?>
          </div>
              <span class="description-text"><strong>Cargo:</strong> <?php  echo $row['cargo'];?></span> <br><br>
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

                 

              

                     <div class="form-group" hidden="">
                  <label>Cargo</label>
                  <select class="form-control" name="cargo">
                    <option value="Enfermera">Enfermera</option>
                    <option value="Niñera">Niñera</option>
                    
                  </select>
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


        <a href="<?php base_url()?>">Inicio</a>

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
<script src="../../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
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
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>
</body>
</html>
