

<?php $__env->startSection('titulo','Usuario'); ?>

<?php $__env->startSection('contenido'); ?>
		<!--Contenido-->
		<div id="modalVehiculo" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form method="POST" action="<?php echo e(route('perfilAdmin.store')); ?>" id="add-event">
						<?php echo csrf_field(); ?>
					<div class="modal-body">
							<div class="form-group">
								<label>Año</label>
								<input required autocomplete="off" name="anio" class="form-control"
                           type="number" >
							</div>
							<div class="form-group">
								<label>Cilindrada</label>
								<input type="text" required autocomplete="off" name="cilindraje_motor" class="form-control">
							</div>
							<div class="form-group">
								<label>Marca</label>
								<input type="text" required autocomplete="off" name="marca" class="form-control">
							</div>
							<div class="form-group">
								<label>Modelo</label>
								<input type="text" required autocomplete="off" name="modelo" class="form-control">
							</div>
							<div class="form-group">
								<label>Placa</label>
								<input type="text" required autocomplete="off" name="placa" class="form-control">
							</div>
							<div class="form-group">
								<label>Usuario</label>
								<input type="int" required autocomplete="off" name="usuario" class="form-control">
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

			

		<div class="section-title text-center">
			<br><h3>Perfil</h3>
			<button data-toggle="modal" data-target="#modalVehiculo" class="sim-btn hvr-bounce-to-top">Crear vehículo</button>
		<a href="perfilClienteVehiculo">	<button   class="sim-btn hvr-bounce-to-top">Ver vehículos</button> </a>
		</div>

		<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código del Cliente</th>
					<th>Nombre del Cliente</th>
					<th>Apellidos</th>
					<th>Correo</th>
					<th>Editar/Eliminar</th>
					
				</tr>
			</thead>
			<tbody>
				<?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clientes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<tr>
						<td><?php echo e($clientes->id); ?></td>
						<td><?php echo e($clientes->nombre); ?></td>
						<td><?php echo e($clientes->apellidos); ?></td>
						<td><?php echo e($clientes->correo); ?></td>
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
					<form id="add-event" method="POST" action="<?php echo e(url('/perfilCliente/'.$clientes->id)); ?>">
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
							<div class="form-group">
								<label>Contraseña</label>
								<input type="text" class="form-control" name="Clave">
							</div>
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




		<!--Fin contenido-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fungservicioautomotriz\ProyectoLaravel\resources\views/perfilCliente.blade.php ENDPATH**/ ?>