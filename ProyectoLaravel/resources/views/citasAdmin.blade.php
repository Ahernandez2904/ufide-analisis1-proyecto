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
		<title>Citas - FUNG Servicio Automotriz</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Site Icons -->
		<link rel="shortcut icon" href="../../public/images/LofoFungU.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../../public/images/apple-touch-icon.png">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- Site CSS -->
		<link rel="stylesheet" href="../css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="../css/responsive.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">
		<script src="../js/modernizr.js"></script> <!-- Modernizr -->
		<!-- Schedules CSS -->
		<link rel="stylesheet" href="../css/citas_style.css">
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
		<div class="p-5">
			<div class="section-title text-center">
				<h3>Agenda tu cita</h3>
			</div>
			<div class="card">
			  <div class="card-body p-0">
				<div id="calendar"></div>
			  </div>
			</div>
		</div>

		<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
			<div class="modal-dialog modal-dialog-centered">
			  <div class="modal-content">
				<form id="add-event">
				  <div class="modal-body">
					<h4>Favor ingresar datos del vehículo</h4>        
					<div class="form-group">
					  <label>Número de Placa del Vehículo</label>
					  <input type="text" class="form-control" name="">
					</div>
					<div class="form-group">
					  <label>Marca del Vehículo</label>
					  <input type='text' class="form-control" name="">
					</div>        
					<div class="form-group">
					  <label>Cilindraje del Motor</label>
					  <input type='text' class="form-control" name="">
					</div>
					<div class="form-group">
					  <label>Año del Vehículo</label>
					  <input type='text' class="form-control" name="">
					</div>
					<div class="form-group">
					  <label>Modelo del Vehículo</label>
					  <input type='text' class="form-control" name="">
					</div> 
				  </div>
				  <div class="modal-footer">
					<button type="submit" class="btn btn-primary" >Guardar</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
				  </div>
				</form>
			  </div>
			</div>
		</div>

		<div class="section-title text-center">
			<h3>Historial de citas</h3>
		</div>
		<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>Hora</th>
					<th>Usuario</th>
					<th>Marca Automóvil</th>
					<th>Modelo</th>
					<th>Año</th>
					<th>Editar/Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@forelse($citas as $cita)
						<td>{{$cita->fecha->format('Y-m-d')}}</td>
						<td>{{$cita->fecha->format('H:i:s')}}</td>
						<td>{{$cita->usuario}}</td>
						<td>{{$cita->marca}}</td>
						<td>{{$cita->modelo}}</td>
						<td>{{$cita->anio}}</td>
						<td>
							<button data-toggle="modal" data-target="#modalEditarCita" 
							class="button--save datatable-button fa-edit"></button>
							<form method="POST" action="{{ url('/CitasAdmin/'.$cita->id) }}">
								@csrf 
								{{ @method_field('DELETE') }}
								<button class="button--delete datatable-button fa-trash"></button>
							</form>
						</td>
					@empty
						No hay datos que mostrar.
					@endforelse
				</tr>
			</tbody>
		</table>

		<div id="modalEditarCita" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<div class="form-group">
								<label>Fecha</label>
								<input type="date" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Hora</label>
								<input type="time" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Marca</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Modelo</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Año</label>
								<input type="number" class="form-control" name="">
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
		<!--<script src="js/contact_me.js"></script>-->
		<!-- ALL PLUGINS -->
		<script src="../js/custom.js"></script>
		<script src="../js/jquery.vide.js"></script>
		<!-- Citas anterior -->
		<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>-->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js'></script>
		<script  src="../js/citas_script.js"></script>
		<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
		<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
		<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
		<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
	</body>
</html>