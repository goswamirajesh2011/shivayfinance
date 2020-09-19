@extends('layouts.admin')

@section('content')
    <!-- Main content -->
    <section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-md-12">
					@if ($errors->any())
		                <div class="alert alert-danger">
		                    <ul>
		                        @foreach ($errors->all() as $error)
		                            <li>{{ $error }}</li>
		                        @endforeach
		                    </ul>
		                </div>
		            @endif
		            <div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Add Page</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
		              	<form action="{{ route('admin.page.store') }}" name="pageCreate" id="pageCreate" method="POST" enctype="multipart/form-data">
		              		@csrf
			                <div class="card-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="content">Content</label>
									<textarea class="form-control textEditor" name="content" id="content"></textarea>
								</div>
								<div class="form-group">
									<label for="excerpt">Excerpt</label>
									<input type="text" class="form-control" id="excerpt" name="excerpt" placeholder="Enter short description">
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
@endsection

@section('js')
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
				url:"{{ route('admin.page.slugExist') }}/"+slug,
				data:{
					_token: '{{ csrf_token() }}',
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

		$('.textEditor').summernote();

	});
</script>
@endsection