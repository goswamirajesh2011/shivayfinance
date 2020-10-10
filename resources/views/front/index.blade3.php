@extends('layouts.front')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                @if(!empty($slides->toArray()))
                <section class="slider">
                    @foreach($slides as $slide)
                    <div>
                        <img src='{{ asset("public/storage/slider/$slide->slide") }}' class="img-responsive">
                    </div>
                    @endforeach
                </section>
                @else
                <div class="alert alert-danger text-center">No slides found !! Add from admin dashboard</div>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center text-success">Our Services</h1>
        <div class="row">
            @if( !empty($loans->toArray()) )
                @foreach($loans as $loan)
                <div class="col-md-3 margin-b services-box">
                    <div class="card border-success">
                        <div class="card-header bg-success text-center rounded">
                            <h4 class="text-white">{{ $loan->name }}</h4>
                        </div>
                        <div class="card-body text-justify">
                            <!--Accordion wrapper-->
                            <div class="accordion md-accordion accordion-1" id="loanAccordion{{ $loan->id }}" role="tablist">
                                <div class="card">
                                    <div class="card-header border-success" role="tab" id="loanDesc{{ $loan->id }}">
                                        <h5 class="text-uppercase mb-0">
                                            <a class="text-success font-weight-bold" data-toggle="collapse" href="#loanDescCollapse{{ $loan->id }}" aria-expanded="true" aria-controls="loanDescCollapse{{ $loan->id }}">
                                                Description
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="loanDescCollapse{{ $loan->id }}" class="collapse show" role="tabpanel" aria-labelledby="loanDesc{{ $loan->id }}" data-parent="#loanAccordion{{ $loan->id }}">
                                        <div class="card-body">
                                            <p class="">{{$loan->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header border-success" role="tab" id="loanDocs{{ $loan->id }}">
                                        <h5 class="text-uppercase mb-0">
                                            <a class="collapsed font-weight-bold text-success" data-toggle="collapse" href="#loanDocsCollapse{{ $loan->id }}" aria-expanded="false" aria-controls="loanDocsCollapse{{ $loan->id }}">
                                                Document Required
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="loanDocsCollapse{{ $loan->id }}" class="collapse" role="tabpanel" aria-labelledby="loanDocs{{ $loan->id }}" data-parent="#loanAccordion{{ $loan->id }}">
                                        <div class="card-body">
                                            <ul>
                                                <li>doc one</li>
                                                <li>doc two</li>
                                                <li>doc three</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header border-success" role="tab" id="loanFaq{{ $loan->id }}">
                                        <h5 class="text-uppercase mb-0">
                                            <a class="collapsed font-weight-bold text-success" data-toggle="collapse" href="#loanFaqCollapse{{ $loan->id }}" aria-expanded="false" aria-controls="loanFaqCollapse{{ $loan->id }}">FAQ</a>
                                        </h5>
                                    </div>
                                    <div id="loanFaqCollapse{{ $loan->id }}" class="collapse" role="tabpanel" aria-labelledby="loanFaq{{ $loan->id }}" data-parent="#loanAccordion{{ $loan->id }}">
                                        <div class="card-body">
                                            <p class="">Frequently Asked questions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Accordion wrapper-->
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('front.applyloan', $loan->id) }}" class="btn btn-success">Apply Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-md-12">
                    <div class="alert alert-danger text-center">Loans not found!! Add from dashboard</div>
                </div>
            @endif
        </div>
        <hr class="border-success">

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