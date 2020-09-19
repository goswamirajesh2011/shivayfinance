@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Pages</h2>
        </div>
        <div class="col-md-6">
                <a class="float-right" href="{{ route('admin.page.create') }}" title="Add Page">
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
                            <th scope="col">Excerpt</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( !$pages->isEmpty() )
                            @foreach($pages as $page)
                            <tr>
                                <th scope="row">{{ $page->id }}</th>
                                <td>{{ $page->name }}</td>
                                <td>{{ substr($page->excerpt, 0, 100) }}...</td>
                                <td>
                                    <a href="{{ route('admin.page.edit', $page->id) }}" title="Edit Page" class="text-success">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Delete Page" data-page_del_url="{{ route('admin.page.destroy', $page->id) }}" class="deletePage text-danger">
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
                                    <strong>No Pages found !!</strong>
                                </p>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Excerpt</th>
                            <th scope="col">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            {{-- $pages->links() --}}
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('.deletePage').on('click', function(){
            if( confirm("Delete Page ?") ){
                var page_del_url = $(this).data('page_del_url');
                //alert(page_del_url);
                $.ajax({
                    type: "DELETE",
                    url: page_del_url,
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