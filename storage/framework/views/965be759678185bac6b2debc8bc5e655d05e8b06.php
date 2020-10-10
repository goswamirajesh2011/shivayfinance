<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <?php if(!empty($slides->toArray())): ?>
                <section class="front-slider">
                    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <img src='<?php echo e(asset("public/storage/slider/$slide->slide")); ?>' class="img-responsive">
                        <div class="slide-content">
                            <h4><?php echo e($slide->loan->name); ?></h4>
                            <p><?php echo e(strip_tags($slide->loan->description)); ?></p>
                            <p><a href="<?php echo e(route('front.applyloan', $slide->loan->id)); ?>" class="btn btn-success">Apply Now</a></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>
                <section class="slider-nav">
                    <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <i class="fa <?php echo e($slide->loan->icon); ?>"></i>
                        <p><?php echo e($slide->loan->name); ?></p>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>
                <?php else: ?>
                <div class="alert alert-danger text-center">No slides found !! Add from admin dashboard</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="text-center text-success">Our Services</h1>
        <div class="row">
            <div class="col-md-12 no-padding">
                <?php if( !empty($loans->toArray()) ): ?>
                    <ul class="nav nav-tabs" id="serviceTab" role="tablist">
                        <?php $count = 0; ?>
                        <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if($count++ == 0): ?> active <?php endif; ?>" id="loan-<?php echo e($loan->id); ?>-tab" data-toggle="tab" href="#loan-<?php echo e($loan->id); ?>" role="tab" aria-controls="loan-<?php echo e($loan->id); ?>" aria-selected="true"><?php echo e($loan->name); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="tab-content" id="serviceTabContent">
                        <?php $count = 0; ?>
                        <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane <?php if($count++ == 0): ?> fade show active <?php endif; ?>" id="loan-<?php echo e($loan->id); ?>" role="tabpanel" aria-labelledby="loan-<?php echo e($loan->id); ?>-tab">
                            <p><?php echo e(strip_tags($loan->description)); ?></p>
                            <p class="text-center"><a href="<?php echo e(route('front.applyloan', $loan->id)); ?>" class="btn btn-success">Apply Now</a></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center">Loans not found!! Add from dashboard</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center text-success">How It Works ?</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-md-6">
                <h1 class="text-center text-success">Who We Are ?</h1>
                <strong><?php echo e(config('app.name')); ?></strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <hr class="border-success">

        <h1 class="text-center text-success">Customer Review</h1>
        <div class="row">
            <div class="customers"></div>
        </div>
        <hr class="border-success">
    </div>

    <h1 class="text-center text-success">Our Partners</h1>
    <?php if( !empty($partners->toArray()) ): ?>
        <div class="partners">
        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <img class="" title="<?php echo e($partner->caption); ?>" src='<?php echo e(asset("public/storage/partner/$partner->logo")); ?>' class="img-responsive">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php else: ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    Partners not found! Add from dashboard.
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<style>
.front-slider .slick-slide{
    position: relative;
}
.front-slider .slick-slide div.slide-content{
    position: absolute;
    top: 25%;
    left: 10%;
    z-index: 9;
    width: 40%;
    padding: 30px;
    background-color: #fff;
    border-radius: 5px;
}
.slider-nav .slick-list{
    text-align: center;
}
.slider-nav .slick-current{
    background-color: #38c172;
    color: #fff;
    border-top: 2px solid #38c172;
    padding: 10px;
}
.slider-nav .slick-slide{
    border-top: 2px solid #38c172;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(".front-slider").slick({
            //dots: true,
            //infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            //autoplay: true,
            //autoplaySpeed: 2000,
            asNavFor: '.slider-nav'
        });
        $(".slider-nav").slick({
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.front-slider',
            centerMode: true,
            focusOnSelect: true,
            autoplay: true,
            //autoplaySpeed: 2000,
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