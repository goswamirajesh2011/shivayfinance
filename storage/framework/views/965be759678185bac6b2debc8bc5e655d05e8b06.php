<?php $__env->startSection('slider'); ?>
    <?php if(!empty($slides->toArray())): ?>
    <section class="slider">
        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <img src='<?php echo e(asset("storage/slider/$slide->slide")); ?>' class="img-responsive">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <?php else: ?>
    <div class="alert alert-danger text-center">No slides found !! Add from admin dashboard</div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><?php echo e(__('Education Loan')); ?></div>

                <div class="card-body">
                    <p>
                        Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><?php echo e(__('Car Loan')); ?></div>

                <div class="card-body">
                    <p>
                        Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><?php echo e(__('Home Loan')); ?></div>

                <div class="card-body">
                    <p>
                        Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(".slider").slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
          });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/front/index.blade.php ENDPATH**/ ?>