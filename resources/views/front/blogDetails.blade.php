@extends('frontLayouts.main')
@section('title', 'BlogCard')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Blog Page</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Our Blog</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- Single Post Start-->
    <div class="single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content wow fadeInUp">
                        <img src="{{asset('storage/'.$blog->image)}}" />
                        <h2>{{$blog->title}}</h2>
                       <p>{!! $blog->description !!}</p>
                    </div>


                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget wow fadeInUp">
                            <div class="search-widget">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Keyword">
                                    <button class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget wow fadeInUp">
                            <h2 class="widget-title">Recent Post</h2>
                            <div class="recent-post">
                                @foreach($recentPosts as $blog)
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="{{ route('blog-details',$blog) }}">{{ $blog->title }}</a>
                                            <div class="post-meta">
{{--                                                <p>By<a href="#">{{ $blog->author->name }}</a></p>--}}
{{--                                                <p>In<a href="#">{{ $blog->category->name }}</a></p>--}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="sidebar-widget wow fadeInUp">
                            <h2 class="widget-title">Categories</h2>
                            <div class="category-widget">
                                <ul>
                                    @foreach($categories as $category)



                                    <li><a href="{{route('blog-details',$blog->id)}}">{{$category->categories}}</a></li>

                                    @endforeach

                                </ul>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Post End-->







@endsection
