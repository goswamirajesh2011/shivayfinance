@extends('layouts.admin')

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Horizontal Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data" name="settings_form" id="settings_form">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="site_name" class="col-sm-2 col-form-label">Site Name</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="site_name" id="site_name" value="{{ Setting::get('site_name') }}" placeholder="Site Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-7">
                                <input type="file" class="form-control" name="logo" id="logo">
                                </div>
                                <div class="col-sm-3"><img src="{{ asset('public/storage/uploads/').'/'.Setting::get('logo') }}" class="img-responsive" width="50" /></div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Save</button>
                            <a href="{{ route('admin.settings') }}" class="btn btn-danger">Cancel</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection