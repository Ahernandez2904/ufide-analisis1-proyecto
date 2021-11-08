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
		<title>FUNG Servicio Automotriz</title>
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
		
		<section id="home" class="main-banner small-main-banner parallaxie" style="background: url('../../public/uploads/mecanica.jpg')">
			<div class="heading small-heading">
				<h1></h1>
				<h3 class="cd-headline clip is-full-width">
					<span>Bienvenido: "Admin"</span>
				</h3>
			</div>
		</section>

		<!--Contenido-->
		<div id="modalCrearServicio" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
				<form method="POST" action="{{ route('serviciosAdmin.store')}}" id="add-event">
						@csrf
						<div class="modal-body">
							<div class="form-group">
								<label for="NombreServ">Nombre del servicio</label>
								<input type="text" class="form-control" id="nombre" placeholder="Mecanica general" name="nombre">
							</div>
						
							<div class="form-group">
								<label for="precioEsti">Precio estimado</label>
								<input type="text" class="form-control" id="costo" placeholder="200,000 a 500,000" name="costo">
							</div>
							<div class="form-group">
								<label for="TiempoEsti">Tiempo estimado</label>
								<input type="text" class="form-control" id="tiempo_estimado" placeholder="2 horas" name="tiempo_estimado">
							</div>
						</div>
						<div class="modal-footer">
								<button class="btn btn-success">Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="modalCrearPromo" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<div class="form-group">
								<label for="NombreServ">Nombre del servicio</label>
								<input type="text" class="form-control" id="NombreServ" placeholder="Mecanica general" name="NombreServ">
							  </div>
							 
							  <div class="form-group">
								<label for="precioEsti">Precio estimado</label>
								<input type="text" class="form-control" id="precioEsti" placeholder="200,000 a 500,000" name="precioEsti">
							  </div>
							  <div class="form-group">
								<label for="TiempoEsti">Tiempo estimado</label>
								<input type="text" class="form-control" id="TiempoEsti" placeholder="2 horas" name="TiempoEsti">
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
			<br><h3>Mantenimiento de servicios</h3>
			<button data-toggle="modal" data-target="#modalCrearServicio" class="sim-btn hvr-bounce-to-top">Crear servicio</button>
		</div>

		<table id="" class="table table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Precio Estimado</th>
					<th>Tiempo Estimado</th>
			  		<th>Editar/eliminar</th>
				
					
				</tr>
			</thead>
			<tbody>
				<tr>
				@forelse($servicios as $servicio)
					
					<td>{{$servicio->nombre}}</td>
					<td>{{$servicio->costo}}</td>
					<td>{{$servicio->tiempo_estimado}}</td>
					
					
					<td>
					

				
					<button data-toggle="modal" data-target="#modalEditarVehiculo" class="button--save datatable-button fa-edit"></button>
				
					@if (session('error'))
						<div class="alert alert-danger">{{ session('error') }}</div>
									@endif
					<form method="POST" action="{{ url('/serviciosAdmin/'.$servicio->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button onclick="return confirm('¿Esta seguro que desea eliminar este servicio?')" class="button--delete datatable-button fa-trash"></button>
							
						
							


						</form>
					</td>
				</tr>
			@empty
				No hay datos que mostrar.
			@endforelse
			
		</tbody>
	</table>

		<div class="section-title text-center">
			<br><h3>Mantenimiento de promociones de servicios</h3>
			<button data-toggle="modal" data-target="#modalEditarPromo" class="sim-btn hvr-bounce-to-top">Crear promoción de servicio</button>
		</div>
		<table id="example1" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Precio Estimado</th>
					<th>Tiempo Estimado</th>					
			  		<th>Editar/eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Ajuste de frenos</td>
					<td>Este servicio es el ajuste de todos los frenos las 4 llantas y el ajuste del freno de mano</td>
					<td>₡20,000 a ₡40,000</td>
					<td>1 hora</td>
					
					<td>
						<button data-toggle="modal" data-target="#modalEditarPromo" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
					<td>Cambio de líquidos</td>
					<td>Este servicio es cambio de todos liquidos del vehículo exeptuando la gasolina y el aceite (Líquido de frenos, power steering, coolant y liquido de parabrisas)</td>
					<td>₡30,000 a ₡50,000</td>
					<td>2 horas</td>
					
					<td>
						<button data-toggle="modal" data-target="#modalEditarPromo" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
					<td>Overhaul</td>
					<td>Este es un proceso largo del motor el cual se encarga de probar y reparar todos los componentes internos dentro del long block y el short block de un vehiculo</td>
					<td>₡250,000 a ₡600,000</td>
					<td>2 días</td>
				
					<td>
						<button data-toggle="modal" data-target="#modalEditarPromo" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
			  		<td>Cambio de llantas</td>
					<td>Este consiste en remplazar las llantas actuales por llantas nuevas con sus debidas valvulas y calibracion de la presion segun el vehiculo.</td>
					<td>₡200,000 a ₡1,000,000</td>
					<td>2 horas</td>
				
					<td>
						<button data-toggle="modal" data-target="#modalEditarPromo" class="button--save datatable-button fa-edit"></button>
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

		<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>-->
		<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js'></script>
		<script  src="js/citas_script.js"></script>
		<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
		<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
		<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
		<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>-->
	</body>
</html>