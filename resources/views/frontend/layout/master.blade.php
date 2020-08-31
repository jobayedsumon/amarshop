<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Amar Shop - Shop With A Smile</title>
    <meta name="description" content="">


    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/logo/logo.png')}}">

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/font.awesome.css">
    <!--ionicons css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/ionicons.min.css">
    <!--simple line icons css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/simple-line-icons.css">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/style.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    @stack('css')

    <!--modernizr min js here-->
    <script src="{{ asset('frontend')}}/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body data-turbolinks="false">

<!--header area start-->
@yield('header')
<!--header area end-->

@yield('content')

<!--slider area start-->
@yield('slider')
<!--slider area end-->

<!--banner area start-->
@yield('banner')
<!--banner area end-->

<!--product area start-->
@yield('featured')
<!--product area end-->

<!--banner static area start-->
@yield('deals')

@yield('product-filter')
<!--banner static area end-->

<!--product area start-->
@yield('new-arrival')
<!--product area end-->

<!--testimonial area start-->
@yield('testimonial')
<!--testimonial area end-->

<!--blog area start-->

<!--blog area end-->

<!--shipping area start-->
@yield('shipping')
<!--shipping area end-->


<!-- modal area start-->
@yield('modal')
<!-- modal area end-->

@yield('script')

<!--footer area start-->
@yield('footer')
<!--footer area end-->


<script src="{{ asset('js/app.js') }}"></script>

<!-- JS
============================================ -->



<!--map js code here-->
<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
<script src="https://www.google.com/jsapi"></script>
<script src="{{ asset('frontend') }}/js/map.js"></script>


<!--jquery min js-->
<script src="{{ asset('frontend')}}/js/vendor/jquery-3.4.1.min.js"></script>
<!--popper min js-->
<script src="{{ asset('frontend')}}/js/popper.js"></script>
<!--bootstrap min js-->
<script src="{{ asset('frontend')}}/js/bootstrap.min.js"></script>
<!--owl carousel min js-->
<script src="{{ asset('frontend')}}/js/owl.carousel.min.js"></script>
<!--slick min js-->
<script src="{{ asset('frontend')}}/js/slick.min.js"></script>
<!--magnific popup min js-->
<script src="{{ asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
<!--counterup min js-->
<script src="{{ asset('frontend')}}/js/jquery.counterup.min.js"></script>
<!--jquery countdown min js-->
<script src="{{ asset('frontend')}}/js/jquery.countdown.js"></script>
<!--jquery ui min js-->
<script src="{{ asset('frontend')}}/js/jquery.ui.js"></script>
<!--jquery elevatezoom min js-->
<script src="{{ asset('frontend')}}/js/jquery.elevatezoom.js"></script>
<!--isotope packaged min js-->
<script src="{{ asset('frontend')}}/js/isotope.pkgd.min.js"></script>
<!--slinky menu js-->
<script src="{{ asset('frontend')}}/js/slinky.menu.js"></script>
<!-- Plugins JS -->
<script src="{{ asset('frontend')}}/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{ asset('frontend')}}/js/main.js"></script>


<script>
    (function (window, document) {
        var loader = function () {
            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
            script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
            tag.parentNode.insertBefore(script, tag);
        };

        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
    })(window, document);
</script>

<script src="https://cdn.tiny.cloud/1/z9ekoznbkdy5bnxd46wf7olir5sg5bk6mq07kjjp8ocrnggq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    tinymce.init({
        selector: 'textarea',
    });
</script>


<script src="{{ asset('frontend')}}/js/custom.js"></script>

</body>

</html>
