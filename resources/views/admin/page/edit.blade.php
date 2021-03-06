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
							<h3 class="card-title">Edit Page</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
		              	<form action="{{ route('admin.page.update', $page->id) }}" name="pageEdit" id="pageEdit" method="POST" enctype="multipart/form-data">
		              		@csrf
		              		@method('PUT')
			                <div class="card-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$page->name}}" required="">
								</div>
								<div class="form-group">
									<label for="content">Content</label>
									<textarea class="form-control contentEditor" id="content" name="content" required="">{{$page->content}}</textarea>
								</div>
								<div class="form-group">
									<label for="excerpt">Excerpt</label>
									<input type="text" class="form-control" id="excerpt" name="excerpt" placeholder="Enter short desc" value="{{$page->excerpt}}">
								</div>
								<div class="form-group">
									<input type="hidden" class="form-control" id="slug" name="slug" value="{{$page->slug}}">
								</div>
							</div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                  <button type="submit" class="btn btn-primary">Update</button>
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

		$('.contentEditor').summernote();
		
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

	});
</script>
@endsection