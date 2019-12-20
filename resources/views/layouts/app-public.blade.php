<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sofia &mdash; Love Story</title>

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <!-- Simple Line Icons -->
        <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <!-- Magnific popup  -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @yield('content-public')

        @yield('scripts')

        <!-- jQuery -->
        <script src="{{ asset('js/jquery-public.min.js') }}"></script>
        <!-- jQuery Easing -->
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <!-- Modernizr JS -->
        <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <!-- YTPlayer -->
        <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
        <!-- Flexslider -->
        <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
        <!-- Owl Carousel -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- Parallax -->
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <!-- Magnific Popup -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/magnific-popup-options.js') }}"></script>
        <!-- Main JS (Do not remove) -->
        <script src="{{ asset('js/main-public.js') }}"></script>
    </body>
</html>