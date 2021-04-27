<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>Servicios YA!</title> 
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
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="index.html"><h1><img src="logo.png" width="50" height="50" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse" style="margin-right:-110px"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#navigation">Inicio</a></li> 
						<li class="scroll"><a href="#about-us">¿Acerca de nosotros?</a></li> 
						<li class="scroll"><a href="#services">¿Como funcionamos?</a></li> 
					    <li class="scroll"><a href="#team-carousel">Nuestro personal</a></li>
						<li class="scroll"><a href="#our-team">Testimonios</a></li> 
					
						<li class="scroll"><a href="#contact">Contactenos</a></li> 
						<li class="scroll"><a href="<?php echo base_url()?>login ">Iniciar sesion   <i class="glyphicon glyphicon-log-in"></i></a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/slide3.jpg)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown">¿Necesitas un servicio especializado? En Servicios YA! puedes encontrarlo.</h2> 
							<p class="animated bounceInUp"><h3>Nacimos para servirte.</h3></p> 
							<a class="btn btn-default slider-btn animated fadeIn" data-toggle="modal" data-target="#myModal">Registrate</a> 
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(images/slider/slide2.jpg)"> 
					<div class="carousel-caption"> <div> 
						<h2 class="heading animated bounceInDown">Encuentra el profesional que necesitas para tus necesidades.</h2> 
						<p class="animated bounceInUp">Conocenos. </p> <a class="btn btn-default slider-btn animated fadeIn" data-toggle="modal" data-target="#myModal">Registrate</a> 
					</div> 
				</div> 
			</div> 
			<div class="item" style="background-image: url(images/slider/slide1.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight">¿Sin empleo?... Registrate en Servicios YA!</h2> 
						<p class="animated bounceInLeft"><h3>Miles de personas requieren de tus servicios.</h3></p> 
						<a class="btn btn-default slider-btn animated bounceInUp" data-toggle="modal" data-target="#myModal">Registrate</a> 
					</div> 
				</div> 
			</div>
			<div class="item" style="background-image: url(images/slider/slide4.jpg)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight">¿Sin empleo?... Registrate en Servicios YA!</h2> 
						<p class="animated bounceInLeft"><h3>Miles de personas requieren de tus servicios.</h3></p> 
						<a class="btn btn-default slider-btn animated bounceInUp" data-toggle="modal" data-target="#myModal">Registrate</a> 
					</div> 
				</div> 
			</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--/#home-->

   <!--/#Modal Formulario de Registro--> 

    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content col-sm-8 col-md-12">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Registro</h3>
        </div>
        <div class="modal-body ">
            <div class="container">
  

  
 <form class="col-sm-4 col-md-5 form-horizontal"  method="post" action="<?php  echo base_url()?>Usuarios/guardar "> 

     

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
      <input id="password" type="password" class="form-control" name="clave" placeholder="Contraseña">
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
</div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Acerca de nosotros</h2>
				<p></p>
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-12">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-chain-broken"></i> ¿Quienes Somos?</a></li>
						<li><a href="#mission" data-toggle="tab"><i class="fa fa-th-large"></i> Mision</a></li>
						<li><a href="#community" data-toggle="tab"><i class="fa fa-users"></i> Vision</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/about.jpg" height="300px" width="500px" alt="about us"> 
								<div class="media-body">
									<p>Somos un empresa joven emprendedora del sector de la TICS, contamos con la experiencia para desarrollar soluciones a distintas empresas, nuestro grupo de trabajo cuenta con conocimientos solidos, día a día nos actualizamos para ofrecerte el mejor servicio, hacemos que tu compañia, clientes y colaboradores se sientan satisfechos con el servicio ofrecido. </p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/mission.jpg" height="300px" width="500px" alt="Mission"> 
								<div class="media-body">
									<p>Contribuir al desarrollo de los distintos sectores del pais especialmente en el sector de las TICS, trabajando con pasion, dedicación y profesionalismo </p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="community">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/community.jpg" height="300px" width="500px" alt="Community"> 
								<div class="media-body">
									<p>Estamos orientados a mejorar la calidad de vida y facilitar las acciones y/o procesos que la humanidad realiza </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section><!--/#about-us-->

	<section id="services" class="parallax-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">¿COMO FUNCIONAMOS?</h2>
					<p><h3><b>A continuación te explicaremos como funciona Servicios YA!.</b></h3></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<div class="col-sm-6">
								<div class="single-service">
									<i class="fa fa-shopping-cart"></i>
									<h2><b>Usuarios</b></h2>
									<p><h3>Los usuarios son las personas que desean pedir un servicio</h3></p>
									<p><h3><b>Paso 1</b></h3></p>
									<p><h4>Da clic en Registrate.</h4></p>
									<p><h3><b>Paso 2</b></h3></p>
									<p><h4>Escoge la opcion Usuario.</h4></p>
									<p><h3><b>Paso 3</b></h3></p>
									<p><h4>Llena los campos del formulario de registro, luego da clic en el botón siguiente.</h4></p>
									<p><h3><b>Paso 4</b></h3></p>
									<p><h4>Escoge el perfil que deseas y da clic en el botón Contactar.</h4></p>
									<p><h3><b>Paso 5</b></h3></p>
									<p><h4>Sigue los pasos para facturar tu servicio.</h4></p>
									<br><br><br>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="single-service">
									<i class="fa fa-user"></i>
									<h2>Postulantes</h2>
									<p><h3>Son las personas que quieren postularse y ofrecer un servicio de acuerdo a sus habilidades profesionales</h3></p>
									<p><h3><b>Paso 1</b></h3></p>
									<p><h4>Da clic en Registrate.</h4></p>
									<p><h3><b>Paso 2</b></h3></p>
									<p><h4>Escoge la opcion Postulante.</h4></p>
									<p><h3><b>Paso 3</b></h3></p>
									<p><h4>Llena los campos del formulario de registro, luego da clic en el botón siguiente.</h4></p>
									<p><h3><b>Paso 4</b></h3></p>
									<p><h4>Llena tu hoja de vida o adjuntala y habla brevemente sobre tus habilidades</h4></p>
									<p><h3><b>Paso 5</b></h3></p>
									<p><h4>Las notificaciones en la plataforma y/o en tu correo te informaran de los servicios que los usuarios requieran de ti. </h4></p>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#service-->

		<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Nuestro personal</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<div id="team-carousel" class="carousel slide" data-interval="false">
					<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					<div class="carousel-inner team-members">
						<div class="row item active"> 

						<?php

 foreach ($Usuarios as $row) {
 	
 
?>
							<div class="col-sm-6 col-md-3">
								<div class="single-member">
									<img src="uploads/<?php echo $row['foto'];?>" alt="team member" />
									<h4><?php echo $row['nombre']. $row['apellido'] ;?></h4>
									<h5><?php echo $row['cargo'];?></h5>
									<p>Para ponerse en contacto y ver todos los datos oprima el siguiente boton...</p>
									<a class="btn btn-lg" style="background-color: #fc7700; color:black;" href="<?php echo base_url() . 'Usuarios/perfiles/' . $row['id']?>">Ver perfil</a>
								</div>
							</div>

							<?php

 }
							?>
							
					
					
						</div>
		
					</div>
				</div>
			</div>
		</section><!--/#Our-Team-->
  
  	<section id="our-team">
									<div class="container">
										<div class="row text-center">
											<div class="col-sm-8 col-sm-offset-2">
												<h2 class="title-one">Testimonios</h2>
												<p></p>
											</div>
										</div>
										<div id="team-carousel" class="carousel slide" data-interval="false">
											
											<div class="carousel-inner team-members">
												<div class="row item active">
													<div class="col-sm-6 col-md-3">
														<div class="single-member">
															<img src="images/our-team/member1.jpg" alt="team member" />
															<h4>Camila Ortiz</h4>
															<h5>Usuaria</h5>
															<p>Gracias a Servicios YA! ahora encuentro la persona que tanto habia buscado por días</p>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="single-member">
															<img src="images/our-team/member2.jpg" alt="team member" />
															<h4>Camilo Sanchez</h4>
															<h5>Postulante</h5>
															<p>En Servicios YA! ahora puedo generar mas ingresos</p>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="single-member">
															<img src="images/our-team/member3.jpg" alt="team member" />
															<h4>Juan Duarte</h4>
															<h5>Usuario</h5>
															<p>Estoy satisfecho con el servicio que presta la plataforma</p>
														</div>
													</div>
													<div class="col-sm-6 col-md-3">
														<div class="single-member">
															<img src="images/our-team/member4.jpg" alt="team member" />
															<h4>Pablo Jimenez</h4>
															<h5>Usuario</h5>
															<p>Encuentro la persona multipropositos para lo que deseo</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
		
		<!--/#Our-Team-->
					<section id="clients" class="parallax-section">
						<div class="container">
							<div class="clients-wrapper">
								<div class="row text-center">
									<div class="col-sm-8 col-sm-offset-2">
										<h2 class="title-one">Nuestros clientes</h2>
										<p>Estos son algunos de nuestros usuarios frecuentes</p>
									</div>
								</div>
								<div id="clients-carousel" class="carousel slide" data-ride="carousel"> <!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#clients-carousel" data-slide-to="0" class="active"></li>
										<li data-target="#clients-carousel" data-slide-to="1"></li>
										<li data-target="#clients-carousel" data-slide-to="2"></li>
									</ol> <!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="images/clients/client1.jpg" alt="">
													<div class="media-body">
														<blockquote><p><h2>Crixus Gym</h2> </p><p>Gracias al apoyo Servicios YA! optimizamos nuestros servicios</p><small> Crixus Gym tiene como propósito mejorar el estado físico y la salud de cada uno de sus afiliados.</small><br><a href="https://www.facebook.com/crixusgym/?fref=ts">https://www.facebook.com/crixusgym</a></blockquote>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="images/clients/client3.jpg" alt="">
													<div class="media-body">
														<blockquote><p><h2>Diseño y decoración de arreglos florales</h2></p><p>En esta plataforma hemos encuentrado las personas ideales para nuestra microempresa </p><small>Nos enfocamos en areglos florales naturales y artificiales para todo tipo de ocación</small><br><a href="https://www.facebook.com/DISE%C3%91O-Y-DECORACIONES-FLORALES-Y-ARTIFICIALES-223080044406856/">https://www.facebook.com/DISE%C3%91O-Y-DECORACIONES-FLORALES-Y-ARTIFICIALES-</a></blockquote>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="single-client">
												<div class="media">
													<img class="pull-left" src="images/clients/client2.jpg" alt="">
													<div class="media-body">
														<blockquote><p><h2>Aleida Asociados S.A.S</h2><p>Hemos contactado a plomeros a través de Servicios YA!. Cumplidos, efectivos y responsables></p><small>Asesoramos a pequeñas y grandes empresas en recursos humanos</small><br><a href="http://www.poliss.edu.co/">www.aleidaaso.com</a></blockquote>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section><!--/#clients-->

						
					
						
						

						<section id="contact">
							<div class="container">
								<div class="row text-center clearfix">
									<div class="col-sm-8 col-sm-offset-2">
										<div class="contact-heading">
											<h2 class="title-one">Contactenos</h2>
											<p><h3>Servicios YA! pone a disposición de sus usuarios los siguientes canales de servicio.</h3></p>
										</div>
									</div>
								</div>
							</div>
							<div class="container">
								<div class="contact-details">
									<div class="pattern"></div>
									<div class="row text-center clearfix">
										<div class="col-sm-6">
											<div class="contact-address"><address><p><span>Servicios</span>YA!</p><strong>Km7<br>Variante Chia-Cota<br>Colombia</strong><br><small>Nuestras redes sociales</small></address>
												<div class="social-icons">
													<a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a>
													<a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a>
													<a href="https://plus.google.com/collections/featured?hl=es"><i class="fa fa-google-plus"></i></a>
													
												</div>
											</div>
										</div>
										<div class="col-sm-6"> 
											<div id="contact-form-section">
												<div class="status alert alert-success" style="display: none"></div>
												<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
													<div class="form-group">
														<input type="text" name="name" class="form-control name-field" required="required" placeholder="Ingrese su nombre"></div>
														<div class="form-group">
															<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Ingrese su correo">
														</div> 
														<div class="form-group">
															<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Cuentenos que desea saber"></textarea>
														</div> 
														<div class="form-group">
															<button type="submit" class="btn btn-primary">Enviar</button>
														</div>
													</form> 
												</div>
											</div>
										</div>
									</div>
								</div> 
							</section> <!--/#contact--> 

	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2014 - <a href="http://mostafiz.me/">Mostafiz</a> | All Rights Reserved</p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 

	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script> 
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="js/main.js"></script> 
</body>
</html>