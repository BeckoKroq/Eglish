<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=<?php echo e(asset('css/stilos.css')); ?>>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="hidden">
      <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
      </div>
      <header>
        <nav id="nav" class="nav1">
          <div class="contenedor-nav">
            <div class="logo">
              <img src=<?php echo e(asset ('img/logo.png')); ?> alt="">
            </div>
            <div class="enlaces" id="enlaces">
              <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Entrar</a>
                    <?php endif; ?>
            <?php endif; ?>

            </div>
            <div class="icono" id="open">
              <span>&#9776;</span>
            </div>
          </div>
        </nav>
        <div class="textos">
          <h1>English Control</h1>
          <hr style="height: 5px; width: 70%; background-color:white;" ></hr>
          <h2>ITSZaS</h2>
        </div>
      </header>


      <script src="js/jquery.js"></script>
      <script src="js/main.js"></script>
      <script src="js/filtro.js"></script>
      <!--<script src="font-awesome/js/fontawesome.js"></script>-->
    </body>
</html>
