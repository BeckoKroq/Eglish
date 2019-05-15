<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Ingles')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('DataTables/datatables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('DataTables/FixedHeader-3.1.4/css/fixedHeader.bootstrap4.min.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav style="background:transparent;" class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container">
            <img alt="" src="<?php echo e(asset('img/logo.png')); ?>" style="height:50px; width:50px;">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a style="color:white;" class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(__('Inicio')); ?></a>
                            </li>

                        <?php else: ?>
                          <?php if (\Shinobi::can('users.index')): ?>
                          <li class="nav-item">
                            <a style="color:white;" class="nav-link" href="<?php echo e(route('users.index')); ?>">Usuarios</a>
                          </li>
                          <?php endif; ?>
                          <?php if (\Shinobi::can('grupos.index')): ?>
                          <li class="nav-item">
                            <a style="color:white;" class="nav-link" href="<?php echo e(route('grupos.index')); ?>">Grupos</a>
                          </li>
                          <?php endif; ?>
                          <?php if (\Shinobi::can('alumnos.index')): ?>
                          <li class="nav-item">
                            <a style="color:white;" class="nav-link" href="<?php echo e(route('alumnos.index')); ?>">Alumnos</a>
                          </li>
                          <?php endif; ?>
                          <?php if (\Shinobi::can('roles.index')): ?>
                          <li class="nav-item">
                            <a style="color:white;"  class="nav-link" href="<?php echo e(route('roles.index')); ?>">Roles</a>
                          </li>
                          <?php endif; ?>
                            <li class="nav-item dropdown">
                                <a style="color:white;"  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Salir')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <?php echo Html::script('jquery/dist/jquery.min.js'); ?>

    <?php echo Html::script('DataTables/datatables.min.js'); ?>

    <?php echo Html::script('DataTables/FixedHeader-3.1.4/js/fixedHeader.bootstrap4.min.js'); ?>

</body>
</html>
