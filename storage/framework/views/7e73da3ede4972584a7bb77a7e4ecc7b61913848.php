<?php $__env->startSection('content'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                  <h4>Grupos</h4>
                  <?php if (\Shinobi::can('grupos.create')): ?>
                    <a href="#popup"
                    class="bth btn-sm btn-primary pull-right">
                      Crear
                    </a>
                  <?php endif; ?>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th>Período</th>
                        <th>Nivel</th>
                        <th>Docente</th>
                        <th>Días</th>
                        <th>Horario</th>
                        <th>Capacidad</th>
                        <th colspan="3">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $grupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($grupo->id); ?></td>
                          <td><?php echo e($grupo->nombre_grupo); ?></td>
                          <td><?php echo e($grupo->periodo); ?></td>
                          <td><?php echo e($grupo->nivel); ?></td>

                          <td>
                            <?php
                              $idUs=DB::table('user_doc__grups')->where('grup_id',$grupo->id)->pluck('user_id');
                              if(count($idUs)>0){
                                $idUser=DB::table('users')->where('id',$idUs[0])->pluck('name');
                                if(count($idUser)>0){
                            ?>
                                  <?php echo e($idUser[0]); ?>

                            <?php
                                }
                              }
                            ?>
                          </td>
                          <td>
                            <?php
                              $dias=DB::table('dias')->where('grupos_id',$grupo->id)->get();
                              $horario='';
                              $di='';
                              if(count($dias)>0){
                                if($dias[0]->lunes){
                                  $horario=$dias[0]->lunes;
                                  $di=$di.' '.'Lunes';
                                }
                                if($dias[0]->martes){
                                  $horario=$dias[0]->martes;
                                  $di=$di.' '.'Martes';
                                }
                                if($dias[0]->miercoles){
                                  $horario=$dias[0]->miercoles;
                                  $di=$di.' '.'Miercoles';
                                }
                                if($dias[0]->jueves){
                                  $horario=$dias[0]->jueves;
                                  $di=$di.' '.'Jueves';
                                }
                                if($dias[0]->viernes){
                                  $horario=$dias[0]->viernes;
                                  $di=$di.' '.'Viernes';
                                }
                                if($dias[0]->sabado){
                                  $horario=$dias[0]->sabado;
                                  $di=$di.' '.'Sabado';
                                }
                            ?>
                                <?php echo e($di); ?>

                            <?php
                              }
                            ?>
                          </td>
                          <td><?php echo e($horario); ?></td>
                          <td><?php echo e($grupo->capacidad); ?></td>
                          <td width="10px">
                            <?php if (\Shinobi::can('grupos.edit')): ?>
                              <a style="background-color:orange; border:orange;" href="<?php echo e(route('grupos.dias', $grupo->id )); ?>"
                              class="btn btn-sm btn-primary">
                                Día/Horario/Docente
                              </a>
                            <?php endif; ?>
                          </td>
                          <td width="10px">
                            <?php if (\Shinobi::can('grupos.show')): ?>
                              <a href="<?php echo e(route('grupos.show', $grupo->id )); ?>"
                              class="btn btn-sm btn-success">
                                Ver
                              </a>
                            <?php endif; ?>
                          </td>
                          <td width="10px">
                            <?php if (\Shinobi::can('grupos.edit')): ?>
                              <a style="background-color:purple; border:purple;" href="<?php echo e(route('grupos.edit', $grupo->id )); ?>"
                              class="btn btn-sm btn-primary">
                                Editar
                              </a>
                            <?php endif; ?>
                          </td>

                          <td width="10px">
                            <?php if (\Shinobi::can('grupos.show')): ?>
                              <a href="<?php echo e(route('grupos.pdf', $grupo->id )); ?>"
                              class="btn btn-sm btn-primary">
                                PDF
                              </a>
                            <?php endif; ?>
                          </td>
                          <td width="10px">
                            <?php if (\Shinobi::can('grupos.destroy')): ?>
                              <?php echo Form::open(['route' => ['grupos.destroy', $grupo->id],
                                'method'=>'DELETE']); ?>

                                <?php echo Form::submit('Eliminar',['class'=>'btn btn-sm btn-danger']); ?>

                              <?php echo Form::close(); ?>

                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                  <?php echo e($grupos->render()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-wrapper" id="popup">
    <div style="background: transparent;" class="popup-contenedor">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header"><?php echo e(__('Crear Grupo')); ?><a style="background:transparent; color: black; position: absolute; right:25px;" href="<?php echo e(route('grupos.index',$grupos)); ?>">X</a></div>

                  <div class="card-body">
                      <form method="POST" action="<?php echo e(route('grupos.store')); ?>" aria-label="<?php echo e(__('grupos')); ?>">
                          <?php echo csrf_field(); ?>

                          <div class="form-group row">
                              <label for="nombre_grupo" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre del Grupo: ')); ?></label>

                              <div class="col-md-3">
                                  <input id="nombre_grupo" type="text" class="form-control<?php echo e($errors->has('nombre_grupo') ? ' is-invalid' : ''); ?>" name="nombre_grupo" value="<?php echo e(old('nombre_grupo')); ?>" required autofocus>

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
                                    <option value="null">---Seleccionar---</option>
                                    <option value="Enero - Agosto">Enero-Agosto</option>
                                    <option value="Agosto - Diciembre">Agosto-Diciembre</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="nivel" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nivel: ')); ?></label>

                              <div class="col-md-3">
                                  <select id="nivel" name="nivel" class="form-control">
                                    <option value="null">---Seleccionar---</option>
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
                              <label for="capacidad" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Capacidad del Grupo: ')); ?></label>

                              <div class="col-md-2">
                                  <input id="capacidad" type="number" class="form-control<?php echo e($errors->has('capacidad') ? ' is-invalid' : ''); ?>" name="capacidad" value="<?php echo e(old('capacidad')); ?>" required autofocus>

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
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>