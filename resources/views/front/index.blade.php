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
    <h1 class="text-center text-success">Our Services</h1>
    <div class="row">
        @if( !empty($loans->toArray()) )
            @foreach($loans as $loan)
            <div class="col-md-4 margin-b">
                <div class="card">
                    <div class="card-header border-success text-center rounded">
                        <h4 class="text-success">{{ $loan->name }}</h4>
                    </div>
                    <div class="card-body text-justify">
                        <p>{{ $loan->description }}</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="" class="btn btn-success">Apply Now</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12">
                <span class="alert alert-danger text-center">Loans not found!! Add from dashboard</span>
            </div>
        @endif
    </div>
    <hr class="border-success">

    <h1 class="text-center text-success">Our Customers</h1>
    <div class="row">
        <div class="customers"></div>
    </div>
    <hr class="border-success">
</div>

<h1 class="text-center text-success">Our Partners</h1>
<div class="partners">
    <div>
        <img class="" title="Bank Of Baroda" src="{{ url('images/partners/bob.jpg') }}">
    </div>
    <div>
        <img class="" src="{{ url('images/partners/hdfc.jpg') }}">
    </div>
    <div>
        <img class="" src="{{ url('images/partners/bob.jpg') }}">
    </div>
    <div>
        <img class="" src="{{ url('images/partners/hdfc.jpg') }}">
    </div>
    <div>
        <img class="" src="{{ url('images/partners/bob.jpg') }}">
    </div>
    <div>
        <img class="" src="{{ url('images/partners/hdfc.jpg') }}">
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
        
        $('.partners').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 5,
            //autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
@endsection