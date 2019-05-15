<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Editar Grupo')); ?></div>

                <div class="card-body">

                      <?php echo Form::model($grupo,['route'=>['grupos.update', $grupo->id], 'method'=>'PUT']); ?>

                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="nombre_grupo" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre del grupo: ')); ?></label>

                            <div class="col-md-3">
                                <input id="nombre_grupo" type="text" class="form-control<?php echo e($errors->has('nombre_grupo') ? ' is-invalid' : ''); ?>" name="nombre_grupo" value="<?php echo e($grupo->nombre_grupo ?? old('nombre_grupo')); ?>" required autofocus>

                                <?php if($errors->has('nombre_grupo')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nombre_grupo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="periodo" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Período: ')); ?></label>

                            <div class="col-md-3">
                                <select id="periodo" name="periodo" class="form-control">
                                  <option value="<?php echo e($grupo->periodo); ?>"><?php echo e($grupo->periodo); ?></option>
                                  <option value="Enero - Agosto">Enero - Agosto</option>
                                  <option value="Agosto - Diciembre">Agosto - Diciembre</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nivel" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nivel: ')); ?></label>

                            <div class="col-md-3">
                                <select id="nivel" name="nivel" class="form-control">
                                  <option value="<?php echo e($grupo->nivel); ?>"><?php echo e($grupo->nivel); ?></option>
                                  <option value="I">I</option>
                                  <option value="II">II</option>
                                  <option value="III">III</option>
                                  <option value="IV">IV</option>
                                  <option value="V">V</option>
                                  <option value="VI">VI</option>
                                  <option value="VII">VII</option>
                                  <option value="VII">VIII</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="capacidad" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Capacidad: ')); ?></label>

                            <div class="col-md-2">
                                <input id="capacidad" type="number" class="form-control<?php echo e($errors->has('capacidad') ? ' is-invalid' : ''); ?>" name="capacidad" value="<?php echo e($grupo->capacidad ?? old('capacidad')); ?>" required autofocus>

                                <?php if($errors->has('capacidad')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('capacidad')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
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