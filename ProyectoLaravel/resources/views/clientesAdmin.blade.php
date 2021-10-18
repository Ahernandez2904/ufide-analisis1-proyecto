@extends('layoutAdmin')

@section('titulo','Clientes')

@section('contenido')
	<div class="section-title text-center">
		<br><h3>Listado de clientes</h3>
	</div>
	
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre">

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
			@forelse ($clientesAdmin as $clienteAdminItem)
				<tr>
					<td>{{$clienteAdminItem->id}}</td>
					<td>{{$clienteAdminItem->nombre}}</td>
					<td>{{$clienteAdminItem->apellidos}}</td>
					<td>{{$clienteAdminItem->correo}}</td>	
				</tr>
			@empty
					No hay datos que mostrar.			
			@endforelse
		</tbody>
	</table>
@endsection


<script>
	function myFunction() {
	  // Declare variables
	  var input, filter, table, tr, td, i, txtValue;
	  input = document.getElementById("myInput");
	  filter = input.value.toUpperCase();
	  table = document.getElementById("example");
	  tr = table.getElementsByTagName("tr");
	
	  // Loop through all table rows, and hide those who don't match the search query
	  for (i = 0; i < tr.length; i++) {
		td = tr[i].getElementsByTagName("td")[1];
		if (td) {
		  txtValue = td.textContent || td.innerText;
		  if (txtValue.toUpperCase().indexOf(filter) > -1) {
			tr[i].style.display = "";
		  } else {
			tr[i].style.display = "none";
		  }
		}
	  }
	}
	</script>