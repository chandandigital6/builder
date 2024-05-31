
@extends('frontLayouts.main')
@section('title', 'Team ')
@section('content')



    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Teams</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('team')}}">Teams </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

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



@endsection
