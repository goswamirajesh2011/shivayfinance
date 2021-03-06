@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Loans</h2>
        </div>
        <div class="col-md-6">
                <a class="float-right" href="{{ route('admin.loan.create') }}" title="Add Loan">
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
                            <th scope="col">Description</th>
                            <th scope="col">Doc Request</th>
                            <th scope="col">FAQ</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( !$loans->isEmpty() )
                            @foreach($loans as $loan)
                            <tr>
                                <th scope="row">{{ $loan->id }}</th>
                                <td>{{ $loan->name }}</td>
                                <td>{{ substr(strip_tags($loan->description), 0, 50) }}...</td>
                                <td>{{ substr(strip_tags($loan->doc_req), 0, 50) }}...</td>
                                <td>{{ substr(strip_tags($loan->faq), 0, 50) }}...</td>
                                <td><i class="fa {{ $loan->icon }}"></i></td>
                                <td>
                                    <a href="{{ route('admin.loan.edit', $loan->id) }}" title="Edit Loan">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Delete Loan" data-loan_del_url="{{ route('admin.loan.destroy', $loan->id) }}" class="deleteLoan">
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
                                    <strong>No Loans found !!</strong>
                                </p>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Doc Request</th>
                            <th scope="col">FAQ</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            {{-- $loans->links() --}}
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('.deleteLoan').on('click', function(){
            if( confirm("Delete Loan ?") ){
                var loan_del_url = $(this).data('loan_del_url');
                //alert(loan_del_url);
                $.ajax({
                    type: "DELETE",
                    url: loan_del_url,
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