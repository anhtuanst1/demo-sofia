<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta Tags -->

        <!-- Page Title -->
        <title> Tuan - Ha </title>

        <!-- Icon fonts -->
        <!-- <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" /> -->
        <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
        <link href="{{ asset('css/new/flaticon.css') }}" rel="stylesheet" />

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/new/bootstrap.min.css') }}" rel="stylesheet" />

        <!-- Plugins for this template -->
        <link href="{{ asset('css/new/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/new/owl.carousel.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/new/owl.theme.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/new/slick.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/new/slick-theme.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/new/owl.transitions.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/new/jquery.fancybox.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/new/magnific-popup.css') }}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/new/style.css') }}" rel="stylesheet" />

        <style type="text/css">
            .fancybox-margin {
                margin-right:10px;
            }

            .jquery-ripples {
                position: relative;
                z-index: 0;
            }
        </style>
    </head>
    <body id="home">
        @yield('content-public')

        @yield('scripts')

        <!-- All JavaScript files -->
        <script src="{{ asset('js/new/jquery.min.js') }}"></script>
        <script src="{{ asset('js/new/bootstrap.min.js') }}"></script>

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/4e0729bc23.js" crossorigin="anonymous"></script>

        <!-- Plugins for this template -->
        <script src="{{ asset('js/new/jquery-plugin-collection.js') }}"></script>

        <!-- Custom script for this template -->
        <script src="{{ asset('js/new/script.js') }}"></script>
    </body>
</html>