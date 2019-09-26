<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
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
    @yield('css')

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
@include('user.partials._intro')
<!-- #intro -->

<main id="main">

    @yield('content')

    <!--==========================
      About Us Section
    ============================-->


    <!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->


    <!--==========================
      Call To Action Section
    ============================-->

    <!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->


    <!--==========================
      Portfolio Section
    ============================-->


    <!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->

    <!--==========================
      Team Section
    ============================-->

    <!-- #team -->
    <!--==========================
      Frequently Asked Questions Section
    ============================-->

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
@yield('js')

</body>
</html>
