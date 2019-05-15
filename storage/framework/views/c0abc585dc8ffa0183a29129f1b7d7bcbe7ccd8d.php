<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
              <div class="card-header">
              <h4><?php echo e($role->name); ?></h4>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <td>Descripción: <?php echo e($role->description); ?></td>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <td><h3>Permiso especial</h3>
                      <div class="form-group">

                        <label ><?php echo e(Form::radio('special', 'all-access')); ?> Acceso total</label>
                        <label ><?php echo e(Form::radio('special', 'no-access')); ?> Ningun acceso</label>
                      </div>

                      <br>
                      <h3>Lista de permisos</h3>
                      <div class="form-group">
                        <ul class="list-unstyled">
                          <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                              <label>
                                <?php echo e(Form::checkbox('permissions[]', $permission->id, null)); ?>

                                <?php echo e($permission->name); ?>

                                <em>(<?php echo e($permission->description ?: 'Sin descripcion'); ?>)</em>
                              </label>
                            </li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                      </div></td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>