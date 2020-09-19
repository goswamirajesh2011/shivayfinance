@extends('layouts.front')

@section('content')
    <div class="container page applyloan">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success">Contact Us For Loan</h1>
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
                <form role="form" name="contact" id="contact" action="{{ route('front.sentcontact') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Your Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>State</label>
                                <select class="custom-select form-control" name="state" id="state">
                                    <option value="uttrakhand">Uttrakhand</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <select class="custom-select form-control" name="city" id="city">
                                    <option value="dehradun">Dehradun</option>
                                    <option value="rishikesh">Rishikesh</option>
                                    <option value="vikashnagar">VikashNagar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" id="message" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" name="send" value="Send" class="btn btn-success">
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