
@extends('frontLayouts.main')
@section('title', 'Home ')


    @section('content')

        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($banner as $index => $banners)
                    <li data-target="#carousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($banner as $index => $banners)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/'.$banners->image) }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">{{ $banners->title }}</p>
                            <h1 class="animated fadeInLeft">{{ $banners->sub_title }}</h1>
                            <a class="btn animated fadeInUp" href="">Get A Quote</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->


        <!-- Feature Start-->
        <div class="feature wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row align-items-center">
                    @foreach($plans as $plan)


                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-worker"></i>
{{--                                <img src="{{asset('storage/'.$plan->image)}}" alt="" width="100px">--}}
                            </div>
                            <div class="feature-text">
                                <h3>{{$plan->title}}</h3>
                                <p>{{$plan->msg}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        <!-- Feature End-->


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


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Services</p>
                    <h2>We Provide Services</h2>
                </div>
                <div class="row">
                    @foreach($services as $index=> $service)


                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$index * 0.5}}s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('storage/'.$service->image)}}" alt="Image">
                                <div class="service-overlay">
                                    <p>
                                  {{$service->title}}
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>{{$service->heading}}</h3>
                                <a class="btn" href="{{asset('storage/'.$service->image)}}" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Video Start -->
        <div class="video wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Team</p>
                    <h2>Meet Our Engineer</h2>
                </div>
                <div class="row">
                    @foreach($teams as $index=> $team)


                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{$index * 0.5}}s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('storage/'.$team->image)}}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{$team->name}}</h2>
{{--                                <p>CEO & Founder</p>--}}
                            </div>
                            <div class="team-social">
                                <a class="social-tw" href="{{$team->wat_url}}"><i class="fab fa-whatsapp"></i></a>
                                <a class="social-fb" href="{{$team->fb_url}}"><i class="fab fa-facebook-f"></i></a>
{{--                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>--}}
                                <a class="social-in" href="{{$team->in_url}}"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Team End -->


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


        <!-- Testimonial Start -->
        <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider-nav">
                            @foreach($testimonials as $testimonial)
                                <div class="slider-nav">
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Testimonial">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider">
                            @foreach($testimonials as $testimonial)
                                <div class="slider-item">
                                    <h3>{{ $testimonial->name }}</h3>
{{--                                    <h4>{{ $testimonial->profession }}</h4>--}}
                                    <p>{{ $testimonial->msg }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        >


        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Latest Blog</p>
                    <h2>Latest From Our Blog</h2>
                </div>
                <div class="row">
                    @foreach($blogs as $index=> $blog)


                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$index * 0.5}}s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{asset('storage/'.$blog->image)}}" alt="Image">
                            </div>
                            <div class="blog-title">
                                <h3>{{$blog->title}}</h3>
                                <a class="btn" href="{{route('blog-details',$blog->id)}}">+</a>
                            </div>
                            <div class="blog-meta">
{{--                                <p>By<a href="">Admin</a></p>--}}
{{--                                <p>In<a href="">Construction</a></p>--}}
                            </div>
                            <div class="blog-text">
                                <p>
                                 {{$blog->short_description}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Blog End -->



    @endsection
