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
							<h3 class="card-title">Edit Partner</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
		              	<form action="{{ route('admin.partner.update', $partner->id) }}" name="partnerEdit" id="partnerEdit" method="POST" enctype="multipart/form-data">
		              		@csrf
		              		@method('PUT')
			                <div class="card-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$partner->name}}" required="">
								</div>
								<div class="form-group">
									<label for="caption">Caption</label>
									<input type="text" class="form-control" id="caption" name="caption" placeholder="Caption" value="{{$partner->caption}}" required="">
								</div>
								<div class="form-group">
									<label for="logo">Logo</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="logo" name="logo">
											<label class="custom-file-label" for="logo">Choose file</label>
										</div>
										<div class="input-group-append">
											<img src="{{ asset('storage/partner').'/'.$partner->logo }}" class="img-thumbnail">
										</div>
									</div>
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