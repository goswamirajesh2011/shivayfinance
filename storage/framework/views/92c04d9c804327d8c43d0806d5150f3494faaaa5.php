<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Sliders</h2>
        </div>
        <div class="col-md-6">
                <a class="float-right" href="<?php echo e(route('admin.slider.create')); ?>" title="Add Slide">
                    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Caption</th>
                            <th scope="col">Slide</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($slides)): ?>
                            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($slide->id); ?></th>
                                <td><?php echo e($slide->name); ?></td>
                                <td><?php echo e($slide->caption); ?></td>
                                <td><img src="<?php echo e(asset('storage/slider').'/'.$slide->slide); ?>" width="50" /></td>
                                <td>
                                    <a href="<?php echo e(route('admin.slider.edit', $slide->id)); ?>" title="Edit Slide">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Delete Slide" data-slide_del_url="<?php echo e(route('admin.slider.destroy', $slide->id)); ?>" class="deleteSlide">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr >
                            <td colspan="5">No slides found !!</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        //<?php echo e(route('admin.slider.destroy', $slide->id)); ?>

        $('.deleteSlide').on('click', function(){
            if( confirm("Delete Slide ?") ){
                var slide_del_url = $(this).data('slide_del_url');
                //alert(slide_del_url);
                $.ajax({
                    type: "DELETE",
                    url: slide_del_url,
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>", 
                    },
                    success: function(data){
                        console.log(data);
                        location.reload();
                    },
                    error: function(xhr, status, error){
                        console.log("Error: "+ error);
                    }
                });
            }else{
                return false;
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/admin/slider/index.blade.php ENDPATH**/ ?>