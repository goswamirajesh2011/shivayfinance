@extends('layouts.front')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                @if(!empty($slides->toArray()))
                <section class="front-slider">
                    @foreach($slides as $slide)
                    <div>
                        <img src='{{ asset("public/storage/slider/$slide->slide") }}' class="img-responsive">
                        <div class="slide-content">
                            <h4>{{ $slide->loan->name }}</h4>
                            <p>{{ strip_tags($slide->loan->description) }}</p>
                            <p><a href="{{ route('front.applyloan', $slide->loan->id) }}" class="btn btn-success">Apply Now</a></p>
                        </div>
                    </div>
                    @endforeach
                </section>
                <section class="slider-nav">
                    @foreach($slides as $slide)
                    <div>
                        <i class="fa {{ $slide->loan->icon }}"></i>
                        <p>{{ $slide->loan->name }}</p>
                    </div>
                    @endforeach
                </section>
                @else
                <div class="alert alert-danger text-center">No slides found !! Add from admin dashboard</div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="text-center text-success">Our Services</h1>
        <div class="row">
            <div class="col-md-12 no-padding">
                @if( !empty($loans->toArray()) )
                    <ul class="nav nav-tabs" id="serviceTab" role="tablist">
                        @php $count = 0; @endphp
                        @foreach($loans as $loan)
                        <li class="nav-item">
                            <a class="nav-link @if($count++ == 0) active @endif" id="loan-{{$loan->id}}-tab" data-toggle="tab" href="#loan-{{$loan->id}}" role="tab" aria-controls="loan-{{$loan->id}}" aria-selected="true">{{$loan->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="serviceTabContent">
                        @php $count = 0; @endphp
                        @foreach($loans as $loan)
                        <div class="tab-pane @if($count++ == 0) fade show active @endif" id="loan-{{$loan->id}}" role="tabpanel" aria-labelledby="loan-{{$loan->id}}-tab">
                            <p>{{strip_tags($loan->description)}}</p>
                            <p class="text-center"><a href="{{ route('front.applyloan', $loan->id) }}" class="btn btn-success">Apply Now</a></p>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center">Loans not found!! Add from dashboard</div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center text-success">How It Works ?</h1>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="col-md-6">
                <h1 class="text-center text-success">Who We Are ?</h1>
                <strong>{{config('app.name')}}</strong>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry, Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <hr class="border-success">

        <h1 class="text-center text-success">Customer Review</h1>
        <div class="row">
            <div class="customers"></div>
        </div>
        <hr class="border-success">
    </div>

    <h1 class="text-center text-success">Our Partners</h1>
    @if( !empty($partners->toArray()) )
        <div class="partners">
        @foreach($partners as $partner)
        <div>
            <img class="" title="{{ $partner->caption }}" src='{{ asset("public/storage/partner/$partner->logo") }}' class="img-responsive">
        </div>
        @endforeach
        </div>
    @else
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger text-center">
                    Partners not found! Add from dashboard.
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@section('style')
<style>
.front-slider .slick-slide{
    position: relative;
}
.front-slider .slick-slide div.slide-content{
    position: absolute;
    top: 25%;
    left: 10%;
    z-index: 9;
    width: 40%;
    padding: 30px;
    background-color: #fff;
    border-radius: 5px;
}
.slider-nav .slick-list{
    text-align: center;
}
.slider-nav .slick-current{
    background-color: #38c172;
    color: #fff;
    border-top: 2px solid #38c172;
    padding: 10px;
}
.slider-nav .slick-slide{
    border-top: 2px solid #38c172;
}
</style>
@endsection

@section('js')
    <script type="text/javascript">
        $(".front-slider").slick({
            //dots: true,
            //infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            //autoplay: true,
            //autoplaySpeed: 2000,
            asNavFor: '.slider-nav'
        });
        $(".slider-nav").slick({
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.front-slider',
            centerMode: true,
            focusOnSelect: true,
            autoplay: true,
            //autoplaySpeed: 2000,
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