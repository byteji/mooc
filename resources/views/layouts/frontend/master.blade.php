<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <meta name="description" content="CEMOOC">
    <meta name="image" content="https://s-courses.com/sclass1/assets/images/bg.jpg">
    
    <title>CEMOOCx</title>
    <!-- Bootstrap CSS -->
    <!--  ที่อยู่ public/assets/frontend -->

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">


    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/linericon/style.css')}}">


    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">

    <!-- owl-carousel  CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/owl-carousel/owl.theme.default.min.cs')}}">


    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/lightbox/simpleLightbox.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/nice-select/css/nice-select.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/animate-css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assets/frontend/vendors/flaticon/flaticon.css')}}">

    <!--  css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}"> <!-- main -->

    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.side-menu.css')}}"> <!-- side-menu -->
    <link rel="stylesheet" href="{{asset('assets/frontend/font-awesome/css/all.min.css')}}">

     <!-- pass -->



</head>

<body>

    <!--================Header or nav  Menu Area =================-->
    @include('layouts.frontend.partial.nav')
    <!--================Header   or nav Menu Area =================-->





    <!--================Home Banner Area =================-->


    @yield('content')

    <!--================End Home Banner Area =================-->

    <!--================Welcome Area =================-->

    <!--================End Welcome Area =================-->

    <!--================Feature Area =================-->

    <!--================End Feature Area =================-->

    <!--================Projects Area =================-->

    <!--================End Projects Area =================-->

    <!--================Testimonials Area =================-->

    <!--================End Testimonials Area =================-->

    <!--================Latest Blog Area =================-->

    <!--================End Latest Blog Area =================-->

    <!--================Footer Area =================-->
    @include('layouts.frontend.partial.footer')
    <!--================End Footer Area =================-->





    <!-- Optional JavaScript -->
    <!-- Bootstrap CSS -->
    <!--  ที่อยู่ public/assets/frontend -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{asset('assets/frontend/js/jquery-3.2.1.min.js')}}"></script>

    <script src="{{asset('assets/frontend/js/popper.js')}}"></script>

    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!--  stellar-->
    <script src="{{asset('assets/frontend/js/stellar.js')}}"></script>

    <script src="{{asset('assets/frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>

    <script src="{{asset('assets/frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>

    <!--  isotope-->
    <script src="{{asset('assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
    <!--  isotope-->
    <script src="{{asset('assets/frontend/vendors/isotope/isotope-min.js')}}"></script>

    <!--  owl-carousel  -->
    <script src="{{asset('assets/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('assets/frontend/js/jquery.ajaxchimp.min.js')}}"></script>

    <script src="{{asset('assets/frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>

    <script src="{{asset('assets/frontend/vendors/counter-up/jquery.counterup.min.js')}}"></script>


    <script src="{{asset('assets/frontend/js/mail-script.js')}}"></script>







    <!-- main Js-->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    


  <!--   <script src="{{ asset('assets/frontend/js/theme.js') }}"></script> -->

</body>

</html>
