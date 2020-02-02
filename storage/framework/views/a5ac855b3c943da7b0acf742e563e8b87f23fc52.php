<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Loans</h2>
        </div>
        <div class="col-md-6">
                <a class="float-right" href="<?php echo e(route('admin.loan.create')); ?>" title="Add Loan">
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
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if( !empty($loans->toArray()) ): ?>
                            <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loan->id); ?></th>
                                <td><?php echo e($loan->name); ?></td>
                                <td><?php echo e(substr($loan->description, 0, 100)); ?>...</td>
                                <td>
                                    <a href="<?php echo e(route('admin.loan.edit', $loan->id)); ?>" title="Edit Loan">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Delete Loan" data-loan_del_url="<?php echo e(route('admin.loan.destroy', $loan->id)); ?>" class="deleteLoan">
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
                                    <strong>No Loans found !!</strong>
                                </p>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.deleteLoan').on('click', function(){
            if( confirm("Delete Loan ?") ){
                var loan_del_url = $(this).data('loan_del_url');
                //alert(loan_del_url);
                $.ajax({
                    type: "DELETE",
                    url: loan_del_url,
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/admin/loan/index.blade.php ENDPATH**/ ?>