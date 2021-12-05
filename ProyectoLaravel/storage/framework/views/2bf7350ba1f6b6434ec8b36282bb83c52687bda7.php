

<?php $__env->startSection('titulo','Clientes'); ?>

<?php $__env->startSection('contenido'); ?>
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
				<th>Correo</th>
			</tr>
		</thead>
		<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $clientesAdmin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clienteAdminItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<tr>
					<td><?php echo e($clienteAdminItem->id); ?></td>
					<td><?php echo e($clienteAdminItem->nombre); ?></td>
					<td><?php echo e($clienteAdminItem->apellidos); ?></td>
					<td><?php echo e($clienteAdminItem->correo); ?></td>	
					<td>
						<button data-toggle="modal" data-target="#modalEditarCliente" 
						class="button--save datatable-button fa-edit"></button>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					No hay datos que mostrar.			
			<?php endif; ?>
		</tbody>
	</table>

	<div id="modalEditarCliente" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="<?php echo e(url('/clientesAdmin/'.$clienteAdminItem->id)); ?>">
					<?php echo csrf_field(); ?>
					<?php echo e(@method_field('PATCH')); ?>

					<div class="modal-body">
						<div class="form-group">
							<label>Identificador</label>
							<input type="text" class="form-control" name="Id">
						</div>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" name="Nombre">
						</div>
						<div class="form-group">
							<label>Apellidos</label>
							<input type="text" class="form-control" name="Apellidos">
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="text" class="form-control" name="Correo">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Guardar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


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
<?php echo $__env->make('layoutAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fungservicioautomotriz\ProyectoLaravel\resources\views/clientesAdmin.blade.php ENDPATH**/ ?>