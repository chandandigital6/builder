
@extends('frontLayouts.main')
@section('title', 'About')
@section('content')



    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('about')}}">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            @foreach($about as $aboutData)


                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="{{asset('storage/'.$aboutData->image)}}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>{{$aboutData->title}}</p>
                            <h2>{{$aboutData->heading}}</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                {!! $aboutData->description !!}
                            </p>

                            <a class="btn" href="{{route('about')}}">Learn More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="fact">
        <div class="container-fluid">
            <div class="row counters ">
                <div class="col-md-12 fact-left wow slideInLeft">
                    <div class="row ">
                        @foreach($counters as $counter)


                            <div class="col-3">
                                <div class="fact-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">{{$counter->number}}</h2>
                                    <p>{{$counter->title}}</p>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="section-header text-center">
                <p>Frequently Asked Question</p>
                <h2>You May Ask</h2>
            </div>
            <div class="row">
                @foreach($faqs as $index=> $faq)
                    <div class="col-md-6">
                        <div id="accordion-1">



                            <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                        {{$faq->question}}
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        {{$faq->answer}}
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- FAQs End -->
@endsection
