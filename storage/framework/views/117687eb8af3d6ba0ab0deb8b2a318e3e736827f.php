<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Crear')); ?></div>

                <div class="card-body">
                  <form method="POST" action="<?php echo e(route('roles.store')); ?>" aria-label="<?php echo e(__('roles')); ?>">
                    <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre del Rol: ')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($permission->name ?? old('name')); ?>" required autofocus>

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
                                <input id="slug" type="text" class="form-control<?php echo e($errors->has('slug') ? ' is-invalid' : ''); ?>" name="slug" value="<?php echo e($permission->slug ?? old('slug')); ?>" required autofocus>

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
                                <input id="description" type="textarea" class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : ''); ?>" name="description" value="<?php echo e($permission->description ?? old('description')); ?>" required autofocus>

                                <?php if($errors->has('description')): ?>
                                    <span class="invalid-feedback" permission="alert">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <center><h3>Lista de Permisos<br><hr style="height: 2px; width: 80%; background-color:#F1EAEA;" ></hr></h3>

                        <div class="form-group">
                          <label ><?php echo e(Form::radio('special', 'all-access')); ?> Acceso total</label>
                          <label ><?php echo e(Form::radio('special', 'no-access')); ?> Ningun acceso</label>
                        </div></center>
                      
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <label>
                                <?php echo e(Form::checkbox('permissions[]', $permission->id, null)); ?>

                                <?php echo e($permission->name); ?>

                                <em>(<?php echo e($permission->description ?: 'Sin descripcion'); ?>)</em>
                              </label>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Guardar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>