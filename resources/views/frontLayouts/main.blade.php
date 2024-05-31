<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Builderz - Construction Company')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('asset/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/slick/slick-theme.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <!-- Top Bar Start -->
  @include('frontLayouts.topbar')
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
   @include('frontLayouts.header')
    <!-- Nav Bar End -->


@yield('content')


    <!-- Footer Start -->
   @include('frontLayouts.footer')
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('asset/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('asset/lib/slick/slick.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>
