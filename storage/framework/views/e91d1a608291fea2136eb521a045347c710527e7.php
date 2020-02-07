<?php $__env->startSection('content'); ?>

<div class="container">
	404 not found
	<a href="<?php echo e(route('front.index')); ?>">Return to Home</a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/front/page/404.blade.php ENDPATH**/ ?>