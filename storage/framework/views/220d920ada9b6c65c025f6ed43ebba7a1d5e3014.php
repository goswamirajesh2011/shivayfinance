<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2>Partners</h2>
        </div>
        <div class="col-md-3">
            <!-- show success message here -->
        </div>
        <div class="col-md-3">
            <a class="float-right" href="<?php echo e(route('admin.partner.create')); ?>" title="Add Partner">
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
                            <th scope="col">Logo</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( !empty($partners->toArray()) ): ?>
                            <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($partner->id); ?></th>
                                <td><?php echo e($partner->name); ?></td>
                                <td><?php echo e($partner->caption); ?></td>
                                <td><img src="<?php echo e(asset('storage/partner').'/'.$partner->logo); ?>" width="50" /></td>
                                <td>
                                    <a href="<?php echo e(route('admin.partner.edit', $partner->id)); ?>" title="Edit Logo">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Delete Partner" data-partner_del_url="<?php echo e(route('admin.partner.destroy', $partner->id)); ?>" class="deletePartner">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr class="text-center">
                            <td colspan="5">
                                <p class="text-danger">
                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                    <strong>No partners found !!</strong>
                                </p>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Caption</th>
                            <th scope="col">Slide</th>
                            <th scope="col">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <div class="float-right">
            <?php echo e($partners->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.deletePartner').on('click', function(){
            if( confirm("Delete Partner ?") ){
                var partner_del_url = $(this).data('partner_del_url');
                //alert(partner_del_url);
                $.ajax({
                    type: "DELETE",
                    url: partner_del_url,
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/admin/partner/index.blade.php ENDPATH**/ ?>