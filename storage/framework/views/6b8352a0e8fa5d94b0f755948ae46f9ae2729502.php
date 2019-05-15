<?php $__env->startSection('content'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">
                    <h4>Roles
                  <?php if (\Shinobi::can('roles.create')): ?>
                    <a href="<?php echo e(route('roles.create')); ?>"
                    class="bth btn-sm btn-primary pull-right">
                      Crear
                    </a>

                  <?php endif; ?>
                  </h4>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th width="10px">ID</th>
                        <th>Rol</th>
                        <th>Descripción</th>
                        <th colspan="3">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($role->id); ?></td>
                          <td><?php echo e($role->name); ?></td>
                          <td><?php echo e($role->description); ?></td>

                          <td width="10px">
                            <?php if (\Shinobi::can('roles.edit')): ?>
                              <a href="<?php echo e(route('roles.edit', $role->id )); ?>"
                              class="btn btn-sm btn-primary">
                                Ver/Editar
                              </a>
                            <?php endif; ?>
                          </td>
                          <td width="10px">
                            <?php if (\Shinobi::can('roles.destroy')): ?>
                              <?php echo Form::open(['route' => ['roles.destroy', $role->id],
                                'method'=>'DELETE']); ?>

                                <?php echo Form::submit('Eliminar',['class'=>'btn btn-sm btn-danger']); ?>

                              <?php echo Form::close(); ?>

                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                  <?php echo e($roles->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>