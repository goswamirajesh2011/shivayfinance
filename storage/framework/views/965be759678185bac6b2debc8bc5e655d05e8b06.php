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
    <h1 class="text-center text-success">Our Services</h1>
    <div class="row">
        <?php if( !empty($loans->toArray()) ): ?>
            <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 margin-b">
                <div class="card">
                    <div class="card-header border-success text-center rounded">
                        <h4 class="text-success"><?php echo e($loan->name); ?></h4>
                    </div>
                    <div class="card-body text-justify">
                        <p><?php echo e($loan->description); ?></p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="" class="btn btn-success">Apply Now</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="col-md-12">
                <span class="alert alert-danger text-center">Loans not found!! Add from dashboard</span>
            </div>
        <?php endif; ?>
    </div>
    <hr class="border-success">

    <h1 class="text-center text-success">Our Customers</h1>
    <div class="row">
        <div class="customers"></div>
    </div>
    <hr class="border-success">
</div>

<h1 class="text-center text-success">Our Partners</h1>
<div class="partners">
    <div>
        <img class="" title="Bank Of Baroda" src="<?php echo e(url('images/partners/bob.jpg')); ?>">
    </div>
    <div>
        <img class="" src="<?php echo e(url('images/partners/hdfc.jpg')); ?>">
    </div>
    <div>
        <img class="" src="<?php echo e(url('images/partners/bob.jpg')); ?>">
    </div>
    <div>
        <img class="" src="<?php echo e(url('images/partners/hdfc.jpg')); ?>">
    </div>
    <div>
        <img class="" src="<?php echo e(url('images/partners/bob.jpg')); ?>">
    </div>
    <div>
        <img class="" src="<?php echo e(url('images/partners/hdfc.jpg')); ?>">
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
        
        $('.partners').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 5,
            //autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/front/index.blade.php ENDPATH**/ ?>