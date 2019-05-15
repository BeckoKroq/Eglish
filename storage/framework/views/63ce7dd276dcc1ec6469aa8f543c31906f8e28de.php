<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Editar')); ?></div>

                <div class="card-body">
                  
                  <?php echo Form::model($role,['route'=>['roles.update', $role->id], 'method'=>'PUT']); ?>

                    <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre: ')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($role->name ?? old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" permission="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right"><?php echo e(__('URL Amigable: ')); ?></label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control<?php echo e($errors->has('slug') ? ' is-invalid' : ''); ?>" name="slug" value="<?php echo e($role->slug ?? old('slug')); ?>" required autofocus>

                                <?php if($errors->has('slug')): ?>
                                    <span class="invalid-feedback" permission="alert">
                                        <strong><?php echo e($errors->first('slug')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Descripción: ')); ?></label>

                            <div class="col-md-6">
                                <input id="description" type="textarea" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description" value="<?php echo e($role->description ?? old('description')); ?>" required autofocus>

                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" permission="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <h3>Permiso especial</h3>
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
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Guardar')); ?>

                                </button>
                            </div>
                        </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>