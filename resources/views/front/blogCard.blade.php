@extends('frontLayouts.main')
@section('title', 'BlogCard')
@section('content')



    <!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Blog</h2>
            </div>
            <div class="col-12">
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('blogCard')}}">Our Blog</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->



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
