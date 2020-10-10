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
							<h3 class="card-title">Add Loan</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
		              	<form action="{{ route('admin.loan.store') }}" name="loanCreate" id="loanCreate" method="POST" enctype="multipart/form-data">
		              		@csrf
			                <div class="card-body">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
								</div>
								<div class="form-group">
									<label for="description">Description</label>
									<textarea class="form-control description" name="description" id="description"></textarea>
								</div>
								<div class="form-group">
									<label for="doc_req">Document Required</label>
									<textarea class="form-control doc_req" name="doc_req" id="doc_req"></textarea>
								</div>
								<div class="form-group">
									<label for="faq">FAQ (Frequently Asked Question)</label>
									<textarea class="form-control faq" name="faq" id="faq"></textarea>
								</div>
								<div class="form-group">
									<label for="icon">Icon</label>
									<select class="form-control" id="icon" name="icon">
										@foreach(config('fa-icon') as $indx => $icon)
										<option value="{{$indx}}">{{$icon}} </option>
										@endforeach
									</select>
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
		$('.description').summernote();
		$('.doc_req').summernote();
		$('.faq').summernote();
	});
</script>
@endsection