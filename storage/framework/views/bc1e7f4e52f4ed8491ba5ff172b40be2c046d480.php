<?php $__env->startSection('content'); ?>
    <!-- Main content -->
    <section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-md-12">
					<?php if($errors->any()): ?>
		                <div class="alert alert-danger">
		                    <ul>
		                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                            <li><?php echo e($error); ?></li>
		                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                    </ul>
		                </div>
		            <?php endif; ?>
		            <div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Add Page</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
		              	<form action="<?php echo e(route('admin.page.store')); ?>" name="pageCreate" id="pageCreate" method="POST" enctype="multipart/form-data">
		              		<?php echo csrf_field(); ?>
			                <div class="card-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="content">Content</label>
									<textarea class="form-control" name="content" id="content"></textarea>
								</div>
								<div class="form-group">
									<input type="hidden" class="form-control" id="slug" name="slug" value="">
								</div>
							</div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                  <button type="submit" class="btn btn-primary">Submit</button>
			                </div>
		              	</form>
		            </div>
	            </div>
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#name').on('focusout', function(){
			let count = 0;
			let pageName = $(this).val();
			if( pageName != ''){
				let pageSlug = pageName.split(' ').join('-').toLowerCase();
				checkSlug(pageSlug, count);
			}
		});

		
		function checkSlug(slug, count){
			$.ajax({
				type:'POST',
				url:"<?php echo e(route('admin.page.slugExist')); ?>/"+slug,
				data:{
					_token: '<?php echo e(csrf_token()); ?>',
					'slug':slug,
				},
				dataType: 'json',
				success: function(data){
					if(data.exist){
						count=count+1;
						slug = slug+"-"+count;
						checkSlug(slug, count);
					}else{
						$("#slug").val(slug);
					}
				},
				error: function(xhr, err, z){}
			});
		}
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\shivayfinance\resources\views/admin/page/create.blade.php ENDPATH**/ ?>