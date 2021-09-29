<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
		<!-- Site Metas -->
		<title>Retroalimentación - FUNG Servicio Automotriz</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Site Icons -->
		<link rel="shortcut icon" href="../../public/images/LofoFungU.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../../public/images/apple-touch-icon.png">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- Site CSS -->
		<link rel="stylesheet" href="../css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="../css/responsive.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">
		<script src="../js/modernizr.js"></script> <!-- Modernizr -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page-top" class="politics_version">

		<!-- LOADER -->
		<div id="preloader">
			<div id="main-ld">
				<div id="loader"></div>  
			</div>
		</div><!-- end loader -->
		<!-- END LOADER -->
		
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
			<div class="container">
			  <a class="navbar-brand js-scroll-trigger" href="#page-top">
				  <img class="img-fluid" src="../../public/images/LogoFung.png" alt="" />
			  </a>
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					  <li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="indexAdmin.blade.php">Inicio</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="citasAdmin.blade.php">Citas</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="inventarioAdmin.blade.php">Inventario</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="serviciosAdmin.blade.php">Servicios</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="feedbackAdmin.blade.php">Feedback</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="clientesAdmin.blade.php">Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="perfilAdmin.blade.php">Perfil</a>
					  </li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="index.blade.php">Cerrar Sesión</a>
					</li>
				</ul>
			  </div>
			</div>
		  </nav>
		
		<section id="home" class="main-banner small-main-banner parallaxie" style="background: url('../../public/uploads/mecanica.jpg')">
			<div class="heading small-heading">
				<h1></h1>
				<h3 class="cd-headline clip is-full-width">
					<span>Bienvenido: "Admin"</span>
				</h3>
			</div>
		</section>

		<!--Contenido-->
		<div id="modalInfo" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							Más detalles...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="section-title text-center">
			<br><H3>Retroalimentaciones dadas por los usuarios</H3>
		</div>
    <table class="table table-striped">
		<thead>
		  <tr>
			<th scope="col">#</th>
			<th scope="col">Comentarios/Retroalimentaciones</th>
 		  </tr>
		</thead>
		<tbody>
		  <tr>
			<th scope="row">1</th>
			<td>Excelente servicio</td>
			<td><a data-toggle="modal" data-target="#modalInfo">Ver más detalles</a></td>
		  </tr>
		  <tr>
			<th scope="row">2</th>
			<td>Buen servicio</td>
			<td><a data-toggle="modal" data-target="#modalInfo">Ver más detalles</a></td>
		  </tr>
		  <tr>
			<th scope="row">3</th>
			<td>La velocidad de reparacion de mi vehiculo fue maravillosa!</td>
			<td><a data-toggle="modal" data-target="#modalInfo">Ver más detalles</a></td>
		  </tr>
		</tbody>
	</table>
		<!--Fin contenido-->

		<br>
		<div class="copyrights">
			<div class="container">
				<div class="footer-distributed">
					<div class="footer-center">
						<p class="footer-links">
							<!--<a href="#">Inicio</a>
							<a href="#services">Servicios</a>
							<a href="#about">Sobre Nosotros</a>
							<a href="#contact">Contacto</a>-->
						</p>
						<p class="footer-company-name">Todos los derechos reservados &copy; 2021 FUNG Servicio Automotriz</p>
					</div>
				</div>
			</div>
		</div>

		<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>	
		
		<!-- ALL JS FILES -->
		<script src="../js/all.js"></script>
		<!-- Camera Slider -->
		<!--<script src="js/jquery.mobile.customized.min.js"></script>-->
		<script src="../js/jquery.easing.1.3.js"></script> 
		<script src="../js/parallaxie.js"></script>
		<script src="../js/headline.js"></script>
		<!-- Contact form JavaScript -->
		<script src="../js/jqBootstrapValidation.js"></script>
		<script src="../js/contact_me.js"></script>
		<!-- ALL PLUGINS -->
		<script src="../js/custom.js"></script>
		<script src="../js/jquery.vide.js"></script>

	</body>
</html>