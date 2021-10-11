@@ -1,125 +0,0 @@
@extends('layout')

@section('titulo', 'Citas')

@section('contenido')
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
				@csrf
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
				<th>Marca Automóvil</th>
				<th>Modelo</th>
				<th>Año</th>
				<th>Editar/Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@forelse($citas as $cita)
					<td>{{date('Y-m-d', strtotime($cita->fecha))}}</td>
					<td>{{date('H:i:s', strtotime($cita->fecha))}}</td>
					<td>{{$cita->marca}}</td>
					<td>{{$cita->modelo}}</td>
					<td>{{$cita->anio}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarCita" class="button--save datatable-button fa-edit"></button>
						<form method="POST" action="{{ url('/Citas/'.$cita->id) }}">
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
@endsection