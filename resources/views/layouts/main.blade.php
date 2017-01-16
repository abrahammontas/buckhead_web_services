<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Buckhead Web Services</title>

    <link rel="shortcut icon" href="{{ asset('images/logo_favicon.png') }}" />

    <meta name="description" content="">

    <!-- CSS -->
    <link href="{{ asset('css/preload.css') }}" rel="stylesheet">

    <!-- Compiled in vendors.js -->
    {{--<link href="assets/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="assets/css/bootstrap-switch.min.css" rel="stylesheet">--}}
    {{--<link href="assets/css/font-awesome.min.css" rel="stylesheet">--}}
    {{--<link href="assets/css/animate.min.css" rel="stylesheet">--}}
    {{--<link href="assets/css/slidebars.min.css" rel="stylesheet">--}}
    {{--<link href="assets/css/lightbox.css" rel="stylesheet">--}}
    {{--<link href="assets/css/jquery.bxslider.css" rel="stylesheet" />--}}
    {{--<link href="assets/css/buttons.css" rel="stylesheet">--}}

    <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/syntaxhighlighter/shCore.css') }}" rel="stylesheet">

    <!-- RS5.0 Stylesheet -->
    <!--<link rel="stylesheet" type="text/css" href="assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navigation.css">-->

    <link href="{{ asset('css/style-blue.css') }}" rel="stylesheet" title="default">
    <link href="{{ asset('css/width-full.css') }}" rel="stylesheet" title="default">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- Preloader -->
    {{--<div id="preloader">--}}
        {{--<div id="status">&nbsp;</div>--}}
    {{--</div>--}}

    <body id="home">
        <div class="sb-site-container">
            <div class="boxed">

                @yield('content')

                <footer id="footer" style="padding-top:30px; padding-bottom:30px;">
                    <p>&copy; 2016 Buckhead Web Services. All rights reserved.</p>
                </footer>

                <!-- Scripts -->

                <!-- Compiled in vendors.js -->
                {{--<script src="assets/js/jquery.min.js"></script>--}}
                {{--<script src="assets/js/jquery.cookie.js"></script>--}}
                {{--<script src="assets/js/imagesloaded.pkgd.min.js"></script>--}}
                {{--<script src="assets/js/bootstrap.min.js"></script>--}}
                {{--<script src="assets/js/bootstrap-switch.min.js"></script>--}}
                {{--<script src="assets/js/wow.min.js"></script>--}}
                {{--<script src="assets/js/slidebars.min.js"></script>--}}
                {{--<script src="assets/js/jquery.bxslider.min.js"></script>--}}
                {{--<script src="assets/js/holder.js"></script>--}}
                {{--<script src="assets/js/buttons.js"></script>--}}
                {{--<script src="assets/js/jquery.mixitup.min.js"></script>--}}
                {{--<script src="assets/js/circles.min.js"></script>--}}
                {{--<script src="assets/js/masonry.pkgd.min.js"></script>--}}
                {{--<script src="assets/js/jquery.matchHeight-min.js"></script>--}}

                <script src="{{ asset('js/vendors.js') }}"></script>

                <script src="{{ asset('js/syntaxhighlighter/shCore.js') }}"></script>
                <script src="{{ asset('js/syntaxhighlighter/shBrushXml.js') }}"></script>
                <script src="{{ asset('js/syntaxhighlighter/shBrushJScript.js') }}"></script>

                <script src="{{ asset('js/DropdownHover.js') }}"></script>
                <script src="{{ asset('js/app.js') }}"></script>
                <script src="{{ asset('js/holder.js') }}"></script>
                <script src="{{ asset('js/home_full.js') }}"></script>

                @yield('scripts')

            </div>
        </div>
    </body>
</html>