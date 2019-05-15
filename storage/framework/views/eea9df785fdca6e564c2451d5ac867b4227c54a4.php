<?php $__env->startSection('content'); ?>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4><?php echo e($user->name); ?></h4>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th width="10px">ID</th>
                      <th>Nombre</th>
                      <th>Correo</th>
                      <th>Contraseña</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>sdf</td>
                        <td>df</td>
                        <td>sdf</td>
                        <td>dfs</td>
                      </tr>
                  </tbody>
                </table>
              </div>
          </div>
          <br>

            </div>

        </div>
    </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-8">
            <div class="row">

            <div class="card md-4">
              <div class="card-body text-center">
                <div class="card mt-4">
                <div class="card-header">
                  <h3><?php echo e($user->name); ?></h3>
                  <span class="badge badge-pill badge-danger ml-2">

                  </span>
                </div>
                <div class="card-body">
                  <p>Email</p>
                  <p><mark><?php echo e($user->name); ?></mark></p>
                </div>
                <div class="card-footer">
                  <button class="btn btn-danger" onClick={this.removeTodo.bind(this, i)}>
                    Delete
                  </button>
                </div>

              </div>
            </div>
          </div>

          </div>
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>