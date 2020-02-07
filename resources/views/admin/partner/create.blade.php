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
							<h3 class="card-title">Add Partner</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
		              	<form action="{{ route('admin.partner.store') }}" name="partnerCreate" id="partnerCreate" method="POST" enctype="multipart/form-data">
		              		@csrf
			                <div class="card-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="caption">Caption</label>
									<input type="text" class="form-control" id="caption" name="caption" placeholder="Caption">
								</div>
								<div class="form-group">
									<label for="logo">Logo</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="logo" name="logo">
											<label class="custom-file-label" for="logo">Choose file</label>
										</div>
										<!-- <div class="input-group-append">
											<span class="input-group-text" id="">Upload</span>
										</div> -->
									</div>
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