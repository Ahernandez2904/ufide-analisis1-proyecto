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
		<title>Proveedores - FUNG Servicio Automotriz</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Site Icons -->
		<link rel="shortcut icon" href="images/LofoFungU.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Site CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">
		<script src="js/modernizr.js"></script> <!-- Modernizr -->
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
				  <img class="img-fluid" src="images/LogoFung.png" alt="" />
			  </a>
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					  <li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="indexCliente.html">Inicio</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="citasAdmin.html">Citas</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="inventarioAdmin.html">Inventario</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="serviciosAdmin.html">Servicios</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="feedbackAdmin.html">Feedback</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="clientesAdmin.html">Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="perfilAdmin.html">Perfil</a>
					  </li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="index.html">Cerrar Sesión</a>
					</li>
				</ul>
			  </div>
			</div>
		  </nav>
		
		<section id="home" class="main-banner small-main-banner parallaxie" style="background: url('uploads/mecanica.jpg')">
			<div class="heading small-heading">
				<h1></h1>
				<h3 class="cd-headline clip is-full-width">
					<span>Bienvenido: "Admin"</span>
				</h3>
			</div>
		</section>

		<!--Contenido-->
		<div id="modalProveedor" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<h4>Favor ingresar datos del artículo</h4>
							<div class="form-group">
								<label>Código del Proveedor</label>
								<input type="text" class="form-control" name="" value="001">
							</div>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Dirección</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Fecha ingreso</label>
								<input type='date' class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Cédula</label>
								<input type='text' class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Categoría</label>
								<select name="categoria">
									<option>Frenos</option>
									<option>Aceites</option>
									<option>Llantas</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	
		<div id="modalCategoriaProveedor" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<h4>Favor ingresar datos de la categoría de los artículos a crear</h4>
							<div class="form-group">
								<label>Código del categoría</label>
								<input type="text" class="form-control" name="" value="001">
							</div>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="section-title text-center">
			<br><h3>Mantenimiento de proveedores</h3>
			<button data-toggle="modal" data-target="#modalProveedor" class="sim-btn hvr-bounce-to-top">Crear proveedor</button>
            <button data-toggle="modal" data-target="#modalCategoriaProveedor" class="sim-btn hvr-bounce-to-top">Crear categoría de proveedor</button>
		</div>

		<label>
			Buscar por coóigo de proveedor
			<input type="search" class="form-control input-sm" placeholder="" aria-controls="example" />
		</label>
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código del Proveedor</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Fecha Ingreso</th>
					<th>Cédula</th>
					<th>Categoría</th>
					<th>Editar/eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>001</td>
					<td>arosyllantasmundiales</td>
					<td>San José</td>
					<td>02/07/2021</td>
					<td>31322523</td>
					<td>Llantas</td>
					<td>
						<button data-toggle="modal" data-target="#modalProveedor" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
					<td>002</td>
					<td>Pennzoil</td>
					<td>San José</td>
					<td>02/07/2021</td>
					<td>3454364</td>
					<td>Aceites</td>
					<td>
						<button data-toggle="modal" data-target="#modalProveedor" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
					<td>003</td>
					<td>Castrol</td>
					<td>San José</td>
					<td>02/07/2021</td>
					<td>7465411</td>
					<td>Aceites</td>
					<td>
						<button data-toggle="modal" data-target="#modalProveedor" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
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
		<script src="js/all.js"></script>
		<!-- Camera Slider -->
		<!--<script src="js/jquery.mobile.customized.min.js"></script>-->
		<script src="js/jquery.easing.1.3.js"></script> 
		<script src="js/parallaxie.js"></script>
		<script src="js/headline.js"></script>
		<!-- Contact form JavaScript -->
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>
		<!-- ALL PLUGINS -->
		<script src="js/custom.js"></script>
		<script src="js/jquery.vide.js"></script>

	</body>
</html>