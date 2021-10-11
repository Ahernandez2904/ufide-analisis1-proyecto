@extends('layoutAdmin')

@section('titulo','Clientes')

@section('contenido')

	<div class="section-title text-center">
		<br><h3>Listado de clientes</h3>
	</div>


		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código del Cliente</th>
					<th>Nombre del Cliente</th>
					<th>Apellidos</th>
					<th>Correo</th>
				</tr>
			</thead>
			<tbody>
				<tr>

					@forelse ($clientesAdmin as $clienteAdminItem)
						
							<td>{{$clienteAdminItem->id}}</td>
							<td>{{$clienteAdminItem->nombre}}</td>
							<td>{{$clienteAdminItem->apellidos}}</td>
							<td>{{$clienteAdminItem->correo}}</td>	
						
					@empty		
						No hay datos que mostrar.			
					@endforelse
				</tr>			
			</tbody>
		</table>

@endsection