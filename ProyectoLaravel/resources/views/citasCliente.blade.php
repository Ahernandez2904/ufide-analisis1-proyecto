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
				<form id="add-event" method="POST" action="{{ url('/CitasAdmin') }}">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label>Fecha</label>
							<input type="date" class="form-control" name="Fecha" id="Fecha">
						</div>
						<div class="form-group">
							<label>Hora</label>
							<input type="time" class="form-control" name="Hora" id="Hora">
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<input type="text" class="form-control" name="Usuario" id="Usuario" value="2" disabled>
						</div>
						<div class="form-group">
							<label>Vehiculo</label>
							<select class="form-control"  id="Vehiculo" name="Vehiculo">
								@forelse($vehiculos as $vehiculo)
									<option value="{{$vehiculo->id}}">{{$vehiculo->placa}}</option>
								@empty
									No hay carros disponibles.
								@endforelse
							</select>
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
				<th>Id</th>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Marca Automóvil</th>
				<th>Modelo</th>
				<th>Año</th>
				<th>Más información</th>
				<th>Editar/Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@forelse($citas as $cita)
				<tr>
					<td>{{$cita->id}}</td>
					<td>{{date('Y-m-d', strtotime($cita->fecha))}}</td>
					<td>{{date('H:i:s', strtotime($cita->fecha))}}</td>
					<td>{{$cita->marca}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalinfo" 
						class="button--save datatable-button fa-info"></button>
					</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarCita" class="button--save datatable-button fa-edit"></button>
						<form method="POST" action="{{ url('/Citas/'.$cita->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button class="button--delete datatable-button fa-trash"></button>
						</form>
					</td>
				</tr>
			@empty
				No hay datos que mostrar.
			@endforelse
		</tbody>
	</table>

	<div id="modalEditarCita" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/Citas/'.$cita->id) }}">
					@csrf
					{{ @method_field('PATCH') }}
					<div class="modal-body">
						<div class="form-group">
							<label>Identificador de la cita</label>
							<input type="text" class="form-control" name="Id" id="Id" value="{{$cita->id}}">
						</div>
						<div class="form-group">
							<label>Fecha</label>
							<input type="date" class="form-control" name="Fecha" id="Fecha">
						</div>
						<div class="form-group">
							<label>Hora</label>
							<input type="time" class="form-control" name="Hora" id="Hora">
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<input type="text" class="form-control" name="Usuario" id="Usuario" value="2">
						</div>
						<div class="form-group">
							<label>Vehiculo</label>
							<select class="form-control" id="Vehiculo" name="Vehiculo">
								@forelse($vehiculos as $vehiculo)
									<option value="{{$vehiculo->id}}">{{$vehiculo->placa}}</option>
								@empty
									No hay carros disponibles.
								@endforelse
							</select>
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

	<div id="modalInfo" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-group">
						<label>Correo de contacto: {{$cita->correo}}</label>
					</div>
					<div class="form-group">
						<label>Cilindraje de motor: {{$cita->cilindraje}}</label>
					</div>
					<div class="form-group">
						<label>Placa: {{$cita->placa}}</label>
					</div>
					<div class="form-group">
						<label>Modelo: {{$cita->modelo}}</label>
					</div>
					<div class="form-group">
						<label>Año del vehículo: {{$cita->anio}}</label>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection