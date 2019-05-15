<?php $__env->startSection('content'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Información Personal:</h4>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th width="10px">ID</th>
                      <th>Nombre</th>
                      <th>Numero de control</th>
                      <th>Sexo</th>
                      <th>Carrera </th>
                      <th>Estado</th>
                      <th>Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($datos->numcontrol); ?></td>
                        <td><?php echo e($datos->sexo); ?></td>
                        <td><?php echo e($datos->carrera.' '.$datos->semestre); ?></td>
                        <td></td>
                        <td><?php echo e($user->email); ?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
          </div>

          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>