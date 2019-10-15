<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    @section('title')
        home
    @stop
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('frontend/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('frontendlib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/frontend/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Rapid
      Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>
<!--==========================
Header
============================-->
<header id="header">

    <div id="topbar">
        <div class="container">
            <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="#intro" class="scrollto"><span>Auction</span></a></h1>
            <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>
{{--nav bar--}}
        @include('user.partials._nav')
        <!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
{{--@section('intro')--}}
    {{--<section id="intro" class="clearfix">--}}
        {{--<div class="container d-flex h-100">--}}
            {{--<div class="row justify-content-center align-self-center">--}}
                {{--<div class="col-md-6 intro-info order-md-first order-last">--}}
                    {{--<h2>Rapid Solutions<br>for Your <span>Business!</span></h2>--}}
                    {{--<div>--}}
                        {{--<a href="#about" class="btn-get-started scrollto">Get Started</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6 intro-img order-md-last order-first">--}}
                    {{--<img src="img/intro-img.svg" alt="" class="img-fluid">--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}

{{--@stop--}}

@include('user.partials._intro')
<!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    @include('user.partials._about')
   <!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    @include('user.partials._service')
    <!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    @include('user.partials._us')

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- #call-to-action -->
@include('user.partials._action')
    <!--==========================
      Features Section
    ============================-->


    <!--==========================
      Portfolio Section
    ============================-->
    <!-- #portfolio -->
@include('user.partials._portfolio')
    <!--==========================
      Clients Section
    ============================-->

    <!--==========================
      Team Section
    ============================-->
    @include('user.partials._team')
    <!-- #team -->

    <!--==========================
      Clients Section
    ============================-->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    {{--@include('user.partials._faq')--}}
    <!-- #faq -->

</main>

<!--==========================
  Footer
============================-->
@include('user.partials._footer')
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{asset('frontend/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('frontend/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('frontend/lib/mobile-nav/mobile-nav.js')}}"></script>
<script src="{{asset('frontend/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('frontendlib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
<!-- Contact Form JavaScript File -->

<!-- Template Main Javascript File -->
<script src="{{asset('frontend/js/main.js')}}"></script>

</body>
</html>
