@extends('layouts.front')

@section('content')
    <div class="container page applyloan">
        <div class="row">
            <div class="col-md-12">
            	@foreach($page as $page)
                <h1 class="text-success">{{ $page['name'] }}</h1>
                <p>{{ $page['content'] }}</p>
                @endforeach
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