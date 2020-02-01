<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Shivay Finance')); ?></title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/jqvmap/jqvmap.min.css')); ?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/daterangepicker/daterangepicker.css')); ?>">
        <!-- summernote -->
        <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="brand-link">
      <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="Shivay Finance Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Shivay Finance</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Manoj</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?php echo e(config('app.url')); ?>" title="<?php echo e(config('app.name')); ?>" class="nav-link" target="_blank">
                  <i class="nav-icon fas fa-anchor"></i>
                  <p>Visit Site</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                    Slider
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo e(route('admin.slider.index')); ?>" class="nav-link active">
                      <i class="far fa fa-list nav-icon"></i>
                      <p>All</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(route('admin.slider.create')); ?>" class="nav-link active">
                      <i class="far fa fa-plus nav-icon"></i>
                      <p>Add New</p>
                    </a>
                  </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-credit-card"></i>
                  <p>
                    Loan
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo e(route('admin.loan.index')); ?>" class="nav-link active">
                      <i class="far fa fa-list nav-icon"></i>
                      <p>All</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo e(route('admin.loan.create')); ?>" class="nav-link active">
                      <i class="far fa fa-plus nav-icon"></i>
                      <p>Add New</p>
                    </a>
                  </li>
                </ul>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="app">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- ChartJS -->
        <script src="<?php echo e(asset('plugins/chart.js/Chart.min.js')); ?>"></script>
        <!-- Sparkline -->
        <script src="<?php echo e(asset('plugins/sparklines/sparkline.js')); ?>"></script>
        <!-- JQVMap -->
        <script src="<?php echo e(asset('plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo e(asset('plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
        <!-- daterangepicker -->
        <script src="<?php echo e(asset('plugins/moment/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('plugins/daterangepicker/daterangepicker.js')); ?>"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
        <!-- Summernote -->
        <script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo e(asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
        <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>
<?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/layouts/admin.blade.php ENDPATH**/ ?>