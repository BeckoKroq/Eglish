<?php $__env->startSection('content'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4>Grupo</h4>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th width="10px">ID</th>
                      <th>Nombre</th>
                      <th>Docente</th>
                      <th>Días</th>
                      <th>Horario</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td><?php echo e($grupo->id); ?></td>
                        <td><?php echo e($grupo->nombre_grupo); ?></td>
                        <td><?php echo e($grupo->docente); ?></td>
                        <td><?php echo e($grupo->dias); ?></td>
                        <td><?php echo e($grupo->horario); ?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
          </div>
          <br>
              <div class="card">
                  <div class="card-header">
                  <h4>Alumnos</h4>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th>E-mail</th>
                        <th>Calificaciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($user->id); ?></td>
                          <td><?php echo e($user->name); ?></td>
                          <td><?php echo e($user->email); ?></td>
                          <td width="10px">
                            <?php if (\Shinobi::can('users.show')): ?>
                              <a href="<?php echo e(route('users.show', $user->id )); ?>"
                              class="btn btn-sm btn-success">
                                Ver
                              </a>
                            <?php endif; ?>
                          </td>
                        </tr>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>

                </div>
            </div>

        </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>