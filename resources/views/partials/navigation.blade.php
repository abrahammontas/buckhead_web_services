<header id="header-full-top" class="hidden-xs header-full">
    <div class="container">
        <div class="header-full-title" style="float:none; text-align:center; margin-top:10px; margin-bottom:10px; padding-right:8%; padding-left:5%;">
            <img src="{{ asset('images/logo_horizontal_blue_325.png') }}" alt="BWS Logo">
        </div>
    </div> <!-- container -->
</header> <!-- header-full -->

<nav class="navbar navbar-default navbar-header-full navbar-inverse yamm navbar-static-top" role="navigation" id="header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a id="ar-brand" class="navbar-brand hidden-lg hidden-md hidden-sm" href="{{ url('/') }}">buckhead <span style="text-transform: capitalize">WebServices</span></a>
        </div> <!-- navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        {{--<div class="pull-right">--}}
            {{--<a href="javascript:void(0);" class="sb-icon-navbar sb-toggle-right"><i class="fa fa-bars"></i></a>--}}
        {{--</div>--}}
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="max-height:50px">
            <ul class="nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#process">Process</a>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container -->
</nav>