<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Shivay Finance')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('public/js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/css/custom.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/css/font-awesome.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('public/slick/slick.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('public/slick/slick-theme.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <?php echo $__env->make('layouts.common.front.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php echo $__env->make('layouts.common.front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <script src="<?php echo e(asset('public/js/jquery-2.2.0.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/slick/slick.js')); ?>" type="text/javascript" charset="utf-8"></script>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/layouts/front.blade.php ENDPATH**/ ?>