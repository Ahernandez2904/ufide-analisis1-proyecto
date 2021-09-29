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
		<title>Listado de clientes - FUNG Servicio Automotriz</title>
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
<body>
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

	<!-- tabla -->
	<div class="section-title text-center">
		<br><h3>Listado de clientes</h3>
	</div>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Código del Cliente</th>
				<th>Nombre del Cliente</th>
				<th>Correo</th>
				<th>Teléfono</th>
				<th>Editar/Eliminar</th>
				<th>Vehículos</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>001</td>
				<td>Greivin</td>
				<td>gregrg@gmail.com</td>
				<td>2484154</td>
				<td>
					<button data-toggle="modal" data-target="#modalEditarCita" class="button--save datatable-button fa-edit"></button>
					<button class="button--delete datatable-button fa-trash"></button>
				</td>
				<td><button class="datatable-button fa-car" data-toggle="modal" data-target="#modalVehiculo"></button></td>
			</tr>
			<tr>
				<td>002</td>
				<td>Greivin2</td>
				<td>gregrg2@gmail.com</td>
				<td>2484134</td>
				<td>
					<button data-toggle="modal" data-target="#modalEditarCita" class="button--save datatable-button fa-edit"></button>
					<button class="button--delete datatable-button fa-trash"></button>
				</td>
				<td><button class="datatable-button fa-car" data-toggle="modal" data-target="#modalVehiculo"></button></td>
			</tr>
		</tbody>
	</table>

	<div id="modalEditarCita" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event">
					<div class="modal-body">
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" name="">
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" class="form-control" name="">
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="text" class="form-control" name="">
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="text" class="form-control" name="">
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" name="inlineRadioOptions3" id="inlineRadio5" value="option5" />
							<label class="form-check-label" for="inlineRadio5">Administrador</label>
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

	<div id="modalVehiculo" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event">
					<div class="modal-body">
						<div class="form-group">
							Información de los vehículos...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- cfin -->

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

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js'></script>
	<script src="../js/citas_script.js"></script>



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