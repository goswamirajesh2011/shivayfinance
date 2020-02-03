<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Shivay Finance')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('slick/slick.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('slick/slick-theme.css')); ?>">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-success top-menu">
            <div class="container">
                <div class="collapse navbar-collapse" id="">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item text-white">
                            <i class="fa fa-envelope-o fa-lg"></i> info@shivayfinance.com
                        </li>
                        <li class="nav-item text-white">
                            <i class="fa fa-volume-control-phone fa-lg text-white"></i> +91-9634433162
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-facebook fa-lg text-white"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-instagram fa-lg text-white"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-twitter-square fa-lg text-white"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-youtube-play fa-lg text-white"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md sticky-top navbar-light bg-white shadow-sm main-menu">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Shivay Finance')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                          <!-- <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li> -->
                          <li class="nav-item">
                            <a class="nav-link" href="#">Business Loan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Home Loan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Education Loan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Car Loan</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Personal Loan</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Loan
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Business</a>
                              <a class="dropdown-item" href="#">Home</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Education</a>
                              <a class="dropdown-item" href="#">Car</a>
                              <a class="dropdown-item" href="#">Personal</a>
                            </div>
                          </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>

                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

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

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0">
                    <?php echo $__env->yieldContent('slider'); ?>
                </div>
            </div>
        </div>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('layouts.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <script src="<?php echo e(asset('js/jquery-2.2.0.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('slick/slick.js')); ?>" type="text/javascript" charset="utf-8"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/layouts/front.blade.php ENDPATH**/ ?>