@extends('layouts.front')

@section('slider')
    @if(!empty($slides->toArray()))
    <section class="slider">
        @foreach($slides as $slide)
        <div>
            <img src='{{ asset("storage/slider/$slide->slide") }}' class="img-responsive">
        </div>
        @endforeach
    </section>
    @else
    <div class="alert alert-danger text-center">No slides found !! Add from admin dashboard</div>
    @endif
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Education Loan') }}</div>

                <div class="card-body">
                    <p>
                        Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Car Loan') }}</div>

                <div class="card-body">
                    <p>
                        Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Home Loan') }}</div>

                <div class="card-body">
                    <p>
                        Navbars can utilize .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl} classes to change when their content collapses behind a button. In combination with other utilities, you can easily choose when to show or hide particular elements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        $(".slider").slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
          });
    </script>
@endsection