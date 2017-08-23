<!doctype html>
<html>
    <head>
        @yield('head')

        <!--meta-->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="keywords" content="Construction, Renovation" />
        <meta name="description" content="Responsive Construction Renovation Template" />
            <!--slider revolution-->
        <link rel="stylesheet" type="text/css" href="{{ asset('plugins/rs-plugin/css/settings.css')}}" media="screen" />
        <!--style-->
        {{--<link href='//fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700,900' rel='stylesheet' type='text/css'>--}}
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="/css/header/reset.css" />
        <link rel="stylesheet" href="/css/header/superfish.css" />
        <link rel="stylesheet" href="/css/header/prettyPhoto.css" />
        <link rel="stylesheet" href="/css/header/jquery.qtip.css" />
        <link rel="stylesheet" href="/css/header/style.css" />
        <link rel="stylesheet" href="/css/header/animations.css" />
        <link rel="stylesheet" href="/css/header/responsive.css" />
        <link rel="stylesheet" href="/css/header/odometer-theme-default.css" />

        <!--fonts-->
        <link rel="stylesheet" type="text/css" href="/css/header/fonts/streamline-small/styles.css">
        <link rel="stylesheet" type="text/css" href="/css/header/fonts/streamline-large/styles.css">
        <link rel="stylesheet" type="text/css" href="/css/header/fonts/template/styles.css">
        <link rel="stylesheet" type="text/css" href="/css/header/fonts/social/styles.css">
        <link rel="stylesheet" type="text/css" href="/plugins/lightbox/css/lightbox.css">
        <link rel="stylesheet" type="text/css" href="/css/colorbox.css">

        <link rel="shortcut icon" href="/icons/favicon.png">

        <link href="{{asset('/plugins/jquery.bxslider/jquery.bxslider.css')}}" rel="stylesheet" />
        <script type="text/javascript" src="{{ asset('js/slider/jquery-1.11.3.min.js')}}"></script>
    </head>
    <body>
    <div class="site-container">
    @include('header')

    @yield('slider')

    <div id="content">
        @yield('content')
    </div>

        <script>    var BASE_URL = "{{ url('/') }}" </script>
        @include('footer')
    </div>
    </body>

</html>