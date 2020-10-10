@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Applied For</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Purpose</th>
                            <th scope="col">Amount</th>
                            <th scope="col">From</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if( !$loanRequests->isEmpty() )
                            @foreach($loanRequests as $request)
                            <tr>
                                <th scope="row">{{ $request->id }}</th>
                                <td>{{ $request->loan->name }}</td>
                                <td>{{ $request->phone }}</td>
                                <td>{{ $request->email }}</td>
                                <td>{{ $request->purpose }}</td>
                                <td>{{ $request->amount }}</td>
                                <td>{{ $request->city.', '.$request->state }}</td>
                                <td>
                                    <a href="javascritp:void(0)" title="View Loan Request"data-toggle="modal" data-target="#loanReqModal-{{ $request->id }}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <div class="modal fade" id="loanReqModal-{{ $request->id }}" data-backdrop="static">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">loanReqModal-{{ $request->id }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th>Applied For</th>
                                                            <td>{{ $request->loan->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone</th>
                                                            <td>{{ $request->phone }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>{{ $request->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Purpose</th>
                                                            <td>{{ $request->purpose }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Amount</th>
                                                            <td>{{ $request->amount }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>From</th>
                                                            <td>{{ $request->city.', '.$request->state }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->
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
                            <th scope="col">Applied For</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Purpose</th>
                            <th scope="col">Amount</th>
                            <th scope="col">From</th>
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
        
    });
</script>
@endsection