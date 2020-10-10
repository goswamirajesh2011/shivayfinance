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
							<h3 class="card-title">Add Slider</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
		              	<form action="{{ route('admin.slider.store') }}" name="slideCreate" id="slideCreate" method="POST" enctype="multipart/form-data">
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
									<label for="slide">Slide</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="slide" name="slide">
											<label class="custom-file-label" for="slide">Choose file</label>
										</div>
										<!-- <div class="input-group-append">
											<span class="input-group-text" id="">Upload</span>
										</div> -->
									</div>
								</div>
								<div class="form-group">
									<label for="loan_id">Loan</label>
									@if($loans->count() > 0)
									<select class="form-control" id="loan_id" name="loan_id">
										@foreach($loans as $loan)
										<option value="{{$loan->id}}">{{$loan->name}}</option>
										@endforeach
									</select>
									@else
									<div class="text-danger">
										Loan not exist!! <a href="{{route('admin.loan.create')}}">Create Loan First</a>
									</div>
									@endif
								</div>
			                </div>
			                <!-- /.card-body -->

			                <div class="card-footer">
			                  <button type="submit" class="btn btn-primary">Submit</button>
							  <a href="{{route('admin.slider.index')}}" class="btn btn-danger">Cancel</a>
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