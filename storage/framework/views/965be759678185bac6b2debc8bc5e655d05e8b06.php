<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
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
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center text-success">Our Services</h1>
        <div class="row">
            <?php if( !empty($loans->toArray()) ): ?>
                <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 margin-b">
                    <div class="card border-success">
                        <div class="card-header bg-success text-center rounded">
                            <h4 class="text-white"><?php echo e($loan->name); ?></h4>
                        </div>
                        <div class="card-body text-justify">
                            <!--Accordion wrapper-->
                            <div class="accordion md-accordion accordion-1" id="loanAccordion<?php echo e($loan->id); ?>" role="tablist">
                                <div class="card">
                                    <div class="card-header border-success" role="tab" id="loanDesc<?php echo e($loan->id); ?>">
                                        <h5 class="text-uppercase mb-0 py-1">
                                            <a class="text-success font-weight-bold" data-toggle="collapse" href="#loanDescCollapse<?php echo e($loan->id); ?>" aria-expanded="true" aria-controls="loanDescCollapse<?php echo e($loan->id); ?>">
                                                Description
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="loanDescCollapse<?php echo e($loan->id); ?>" class="collapse show" role="tabpanel" aria-labelledby="loanDesc<?php echo e($loan->id); ?>" data-parent="#loanAccordion<?php echo e($loan->id); ?>">
                                        <div class="card-body">
                                            <p class=""><?php echo e($loan->description); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header border-success" role="tab" id="loanDocs<?php echo e($loan->id); ?>">
                                        <h5 class="text-uppercase mb-0 py-1">
                                            <a class="collapsed font-weight-bold text-success" data-toggle="collapse" href="#loanDocsCollapse<?php echo e($loan->id); ?>" aria-expanded="false" aria-controls="loanDocsCollapse<?php echo e($loan->id); ?>">
                                                Document Required
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="loanDocsCollapse<?php echo e($loan->id); ?>" class="collapse" role="tabpanel" aria-labelledby="loanDocs<?php echo e($loan->id); ?>" data-parent="#loanAccordion<?php echo e($loan->id); ?>">
                                        <div class="card-body">
                                            <ul>
                                                <li>doc one</li>
                                                <li>doc two</li>
                                                <li>doc three</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header border-success" role="tab" id="loanFaq<?php echo e($loan->id); ?>">
                                        <h5 class="text-uppercase mb-0 py-1">
                                            <a class="collapsed font-weight-bold text-success" data-toggle="collapse" href="#loanFaqCollapse<?php echo e($loan->id); ?>" aria-expanded="false" aria-controls="loanFaqCollapse<?php echo e($loan->id); ?>">FAQ</a>
                                        </h5>
                                    </div>
                                    <div id="loanFaqCollapse<?php echo e($loan->id); ?>" class="collapse" role="tabpanel" aria-labelledby="loanFaq<?php echo e($loan->id); ?>" data-parent="#loanAccordion<?php echo e($loan->id); ?>">
                                        <div class="card-body">
                                            <p class="">Frequently Asked questions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Accordion wrapper-->
                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-success">Apply Now</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="col-md-12">
                    <div class="alert alert-danger text-center">Loans not found!! Add from dashboard</div>
                </div>
            <?php endif; ?>
        </div>
        <hr class="border-success">

        <h1 class="text-center text-success">Who We Are ?</h1>
        <div class="row">
            <div class="col-md-12">
                <strong><?php echo e(config('app.name')); ?></strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <hr class="border-success">

        <h1 class="text-center text-success">How It Works ?</h1>
        <div class="row">
            <div class="col-md-12">
                <p></p>
            </div>
        </div>
        <hr class="border-success">

        <h1 class="text-center text-success">Our Customers</h1>
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
            <img class="" title="<?php echo e($partner->caption); ?>" src='<?php echo e(asset("storage/partner/$partner->logo")); ?>'>
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