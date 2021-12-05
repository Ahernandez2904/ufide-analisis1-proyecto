@@ -1,125 +0,0 @@


<?php $__env->startSection('titulo', 'Citas'); ?>

<?php $__env->startSection('contenido'); ?>
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
				<form id="add-event" method="POST" action="<?php echo e(url('/CitasAdmin')); ?>">
					<?php echo csrf_field(); ?>
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
								<?php $__empty_1 = true; $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									<option value="<?php echo e($vehiculo->id); ?>"><?php echo e($vehiculo->placa); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
									No hay carros disponibles.
								<?php endif; ?>
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
				<th>Editar/Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php $__empty_1 = true; $__currentLoopData = $citas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<tr>
					<td><?php echo e($cita->id); ?></td>
					<td><?php echo e(date('Y-m-d', strtotime($cita->fecha))); ?></td>
					<td><?php echo e(date('H:i:s', strtotime($cita->fecha))); ?></td>
					<td><?php echo e($cita->marca); ?></td>
					<td><?php echo e($cita->modelo); ?></td>
					<td><?php echo e($cita->anio); ?></td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarCita" class="button--save datatable-button fa-edit"></button>
						<form method="POST" action="<?php echo e(url('/Citas/'.$cita->id)); ?>">
							<?php echo csrf_field(); ?> 
							<?php echo e(@method_field('DELETE')); ?>

							<button class="button--delete datatable-button fa-trash"></button>
						</form>
					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				No hay datos que mostrar.
			<?php endif; ?>
		</tbody>
	</table>

	<div id="modalEditarCita" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="<?php echo e(url('/Citas/'.$cita->id)); ?>">
					<?php echo csrf_field(); ?>
					<?php echo e(@method_field('PATCH')); ?>

					<div class="modal-body">
						<div class="form-group">
							<label>Identificador de la cita</label>
							<input type="text" class="form-control" name="Id" id="Id" value="<?php echo e($cita->id); ?>">
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
								<?php $__empty_1 = true; $__currentLoopData = $vehiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
									<option value="<?php echo e($vehiculo->id); ?>"><?php echo e($vehiculo->placa); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
									No hay carros disponibles.
								<?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\fungservicioautomotriz\ProyectoLaravel\resources\views/citasCliente.blade.php ENDPATH**/ ?>