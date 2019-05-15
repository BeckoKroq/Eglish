<?php $__env->startSection('content'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                  <h4 style="position:absolute; top:15px;" >Alumnos</h4>
                  <nav class="navbar navbar-light bg-light float-right">
                 <form class="form-inline" action="<?php echo e(route('alumnos.index')); ?>" method='get'>
                  
                 <input value="<?php echo e(isset($busqueda)?$busqueda:''); ?>" name="search" class="form-control mr-sm-2" type="search" placeholder="Nombre" aria-label="Search">
                           <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>

                       </form>
                   </nav>

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

                        <th colspan="3">&nbsp;</th>
                      </tr>
                    </thead>



                    <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($user->user_id); ?></td>
                          <td><?php echo e($user->name); ?></td>
                          <td><?php echo e($user->numcontrol); ?></td>
                          <td><?php echo e($user->sexo); ?></td>
                          <td><?php echo e($user->carrera.' '.$user->semestre); ?></td>

                          <td><?php echo e($user->activo); ?></td>

                          <td width="10px">
                            <?php if (\Shinobi::can('users.show')): ?>
                              <a style="background-color:purple; border:purple;" href="<?php echo e(route('users.show', $user->user_id )); ?>"
                              class="btn btn-sm btn-success">
                                Ver
                              </a>
                            <?php endif; ?>
                          </td>

                          <td width="10px">
                            <?php if (\Shinobi::can('users.show')): ?>
                              <a href="<?php echo e(route('calificaciones.create', $user->user_id  )); ?>"
                              class="btn btn-sm btn-success">
                                Calificaciones
                              </a>
                            <?php endif; ?>
                          </td>


                          <td width="10px">
                            <?php if (\Shinobi::can('users.edit')): ?>
                              <a href="<?php echo e(route('alumnos.edit', $user->user_id )); ?>"
                              class="btn btn-sm btn-primary">
                                Editar
                              </a>
                            <?php endif; ?>
                          </td>

                          <td width="10px">
                            <?php if (\Shinobi::can('users.destroy')): ?>
                              <?php echo Form::open(['route' => ['users.destroy', $user->user_id],
                                'method'=>'DELETE']); ?>

                                <?php echo Form::submit('Eliminar',['class'=>'btn btn-sm btn-danger']); ?>

                              <?php echo Form::close(); ?>

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