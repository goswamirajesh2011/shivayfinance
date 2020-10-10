@extends('layouts.front')

@section('content')
    <div class="container page applyloan">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success">Apply For Loan</h1>
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
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                <form role="form" name="applyloan" id="applyloan" action="{{ route('front.storeloan') }}" method="POST">
                    @csrf
                    @method('post')
                    <input type="hidden" name="loan_id" id="loan_id" value="{{ $loanId }}">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Loan Amount</label>
                                <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Loan Amount">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Purpose Of Loan</label>
                                <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Enter Loan Purpose">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Business Name</label>
                                <input type="text" class="form-control" name="business_name" id="business_name" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Age Of Business</label>
                                <select class="custom-select form-control" name="business_age" id="business_age">
                                    <option value="1">option 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>State</label>
                                <select class="custom-select form-control" name="state" id="state">
                                    <option>Select</option>
                                    <option value="uttrakhand">Uttrakhand</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>City</label>
                                <select class="custom-select form-control" name="city" id="city">
                                    <option value="dehradun">Dehradun</option>
                                    <option value="rishikesh">Rishikesh</option>
                                    <option value="vikashnagar">VikashNagar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" name="apply" value="Apply" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript">
    </script>
@endsection