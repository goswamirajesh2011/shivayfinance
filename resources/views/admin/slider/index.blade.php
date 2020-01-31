@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Sliders</h2>
        </div>
        <div class="col-md-6">
                <a class="float-right" href="{{ route('admin.slider.create') }}" title="Add Slide">
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
                            <th scope="col">Slide</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( !empty($slides->toArray()) )
                            @foreach($slides as $slide)
                            <tr>
                                <th scope="row">{{ $slide->id }}</th>
                                <td>{{ $slide->name }}</td>
                                <td>{{ $slide->caption }}</td>
                                <td><img src="{{ asset('storage/slider').'/'.$slide->slide }}" width="50" /></td>
                                <td>
                                    <a href="{{ route('admin.slider.edit', $slide->id) }}" title="Edit Slide">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Delete Slide" data-slide_del_url="{{ route('admin.slider.destroy', $slide->id) }}" class="deleteSlide">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr class="text-center">
                            <td colspan="5">
                                <p class="text-danger">
                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                    <strong>No slides found !!</strong>
                                </p>
                            </td>
                        </tr>
                        @endif
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
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('.deleteSlide').on('click', function(){
            if( confirm("Delete Slide ?") ){
                var slide_del_url = $(this).data('slide_del_url');
                //alert(slide_del_url);
                $.ajax({
                    type: "DELETE",
                    url: slide_del_url,
                    data: {
                        _token: "{{ csrf_token() }}", 
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
@endsection