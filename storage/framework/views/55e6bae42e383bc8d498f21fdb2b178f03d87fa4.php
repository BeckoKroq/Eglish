
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Agregar a Grupo')); ?></div>
                <div class="card-body">
                    <script language="JavaScript">
                        $(document).ready(function(){
                            $('#TU').on('change',function(){
                                if (this.checked) { 
                                    var capa=document.getElementById("eli");
                                    capa.style.display="";
                                        $("#horarios").hide();
                                        $("#docent").hide();
                                        $("#alum").show();
                                    } else {
                                        $("#horarios").hide();
                                        $("#docent").hide();
                                        $("#alum").hide();
                                    }  
                            })
                            $('#TUd').on('change',function(){
                                var capa=document.getElementById("eli");
                                capa.style.display="";
                                if (this.checked) {
                                        $("#horarios").hide();
                                        $("#alum").hide();
                                        $("#docent").show();
                                    } else {
                                        $("#horarios").hide();
                                        $("#docent").hide();
                                        $("#alum").hide();
                                    } 
                            })
                            $('#TUh').on('change',function(){
                                var capa=document.getElementById("eli");
                                capa.style.display="";
                                if (this.checked) {
                                        $("#docent").hide();
                                        $("#alum").hide();
                                        $("#horarios").show();
                                    } else {
                                        $("#horarios").hide();
                                        $("#docent").hide();
                                        $("#alum").hide();
                                    } 
                            })
                            });
                    </script>
                    <div class="form-group row">
                        <label for="IntExt" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Agregar')); ?></label>
                        <div class="col-md-6">
                            <input type="radio" id="TU" name="tu"> Alumno
                            <input type="radio" id="TUd" name="tu"> Docente
                            <input type="radio" id="TUh" name="tu"> Horario
                        </div>
                    </div>
                    <div id='eli' style="display:none;">
                        <div id='horarios' hide>
                            <?php echo Form::model($grupo,['route'=>['grupos.agreDias', $grupo->id], 'method'=>'PUT']); ?>

                                <?php echo csrf_field(); ?>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                      <div class="panel-body">
                                        <table class="table table-striped table-hover">
                                          <thead>
                                            <tr>
                                              <th>Días:    </th>
                                              <th> </th>
                                              <th width="10px">  <input type="checkbox" class="form-check-input" value="Lunes" id="exampleCheck1" name="dias[]">Lunes<br></th>
                                              <th><input type="checkbox" class="form-check-input" value="Martes" id="exampleCheck1" name="dias[]">Martes<br></th>
                                              <th><input type="checkbox" class="form-check-input" value="Miercoles" id="exampleCheck1" name="dias[]">Miércoles<br></th>
                                              <th><input type="checkbox" class="form-check-input" value="Jueves" id="exampleCheck1" name="dias[]">Jueves<br></th>
                                              <th><input type="checkbox" class="form-check-input" value="Viernes" id="exampleCheck1" name="dias[]">Viernes<br></th>
                                              <th><input type="checkbox" class="form-check-input" value="Sabado" id="exampleCheck1" name="dias[]">Sabado<br></th>
                                            </tr>
                                          </thead>
        
                                        </table>
                                      </div>
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="horario" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Inicio: ')); ?></label>
        
                                    <div class="col-md-3">
                                        <select id="horario" name="horainicio" class="form-control">
                                          <option value="null">---seleccionar---</option>
                                          <option value="07:00 AM">07:00 AM</option>
                                          <option value="08:00 AM">08:00 AM</option>
                                          <option value="09:00 AM">09:00 AM</option>
                                          <option value="10:00 AM">10:00 AM</option>
                                          <option value="11:00 AM">11:00 AM</option>
                                          <option value="12:00 PM">12:00 PM</option>
                                          <option value="01:00 PM">01:00 PM</option>
                                          <option value="02:00 PM">02:00 PM</option>
                                          <option value="03:00 PM">03:00 PM</option>
                                          <option value="04:00 PM">04:00 PM</option>
                                          <option value="05:00 PM">05:00 PM</option>
                                          <option value="06:00 PM">06:00 PM</option>
                                          <option value="07:00 PM">07:00 PM</option>
                                          <option value="08:00 PM">08:00 PM</option>
                                        </select>
                                    </div>
        
                                    <label for="horario" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Termina: ')); ?></label>
        
                                    <div class="col-md-3">
                                        <select id="horario" name="horafin" class="form-control">
                                          <option value="null">---seleccionar---</option>
                                          <option value="07:00 AM">07:00 AM</option>
                                          <option value="08:00 AM">08:00 AM</option>
                                          <option value="09:00 AM">09:00 AM</option>
                                          <option value="10:00 AM">10:00 AM</option>
                                          <option value="11:00 AM">11:00 AM</option>
                                          <option value="12:00 PM">12:00 PM</option>
                                          <option value="01:00 PM">01:00 PM</option>
                                          <option value="02:00 PM">02:00 PM</option>
                                          <option value="03:00 PM">03:00 PM</option>
                                          <option value="04:00 PM">04:00 PM</option>
                                          <option value="05:00 PM">05:00 PM</option>
                                          <option value="06:00 PM">06:00 PM</option>
                                          <option value="07:00 PM">07:00 PM</option>
                                          <option value="08:00 PM">08:00 PM</option>
        
                                        </select>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Añadir')); ?>

                                        </button>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                        </div>
                        <div id='alum' hide>
                            <?php echo Form::model($grupo,['route'=>['grupos.agreAlum', $grupo->id], 'method'=>'PUT']); ?>

                                <div class="form-group row">
                                    <label for="numcontrol" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Numero de Control:')); ?></label>
        
                                    <div class="col-md-6">
                                        <input id="numcontrol" type="text" class="form-control<?php echo e($errors->has('numcontrol') ? ' is-invalid' : ''); ?>" name="numcontrol" value="<?php echo e(old('numcontrol')); ?>" required autofocus>
        
                                        <?php if($errors->has('numcontrol')): ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($errors->first('numcontrol')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Agregar')); ?>

                                        </button>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                        </div>
                        <div id='docent' hide>
                            <?php echo Form::model($grupo,['route'=>['grupos.agreDoc', $grupo->id], 'method'=>'PUT']); ?>

                                <?php echo Form::label('Docente','Docente'); ?>

                                <?php echo Form::select('docente', $docentes,null,['placeholder'=>'--Seleccie Docente--','id'=>'docentes']); ?>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Agregar')); ?>

                                        </button>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>