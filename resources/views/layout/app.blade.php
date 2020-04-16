<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Real Estate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/slick.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico" type="image/x-icon')}}" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CRoboto:300,400,500,700&display=swap">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{ asset('assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <script src="{{ asset('assets/js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{ asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<header @if(Request::segment(1) == '') class="main-header mh-3 header-transparent main-header-2" @else class="main-header" @endif >
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logos" href="index.html">
                <img src="{{ asset('assets/img/logos/logo-2.png')}}" alt="logo" class="logo-none-2">
                <img src="{{ asset('assets/img/logos/logo.png')}}')}}" alt="logo" class="logo-none">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('home') }}" id="navbarDropdownMenuLink" aria-expanded="false">Home</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="{{ route('properties') }}" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Properties
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($propertie as $property)
                            <li><a class="dropdown-item" href="{{ $property->id }}">{{ $property->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('blog') }}" id="navbarDropdownMenuLink5" aria-expanded="false">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('contact') }}" id="navbarDropdownMenuLink5" aria-expanded="false">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="submit-property.html" class="nav-link link-btn">Submit Property</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--content-->
@yield('content')
<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="contact-info">
                        <li>
                            Address: 20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            Email: <a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                        </li>
                        <li>
                            Fax: +0477 85X6 552
                        </li>
                    </ul>
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Useful Links</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="links">
                        <li>
                            <a href="{{ route('home') }}"><i class="fa fa-angle-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>About Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Services</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Details</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>My Account</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Properties Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block button-theme">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy; <a target="_blank" href="https://devstart.co.ke">Designed And Developed By Devstart</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="{{ asset('assets/js/jquery-2.2.0.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-submenu.js')}}"></script>
<script src="{{ asset('assets/js/rangeslider.js')}}"></script>
<script src="{{ asset('assets/js/jquery.mb.YTPlayer.js')}}"></script>
<script src="{{ asset('assets/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('assets/js/jquery.scrollUp.js')}}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('assets/js/leaflet.js')}}"></script>
<script src="{{ asset('assets/js/leaflet-providers.js')}}"></script>
<script src="{{ asset('assets/js/leaflet.markercluster.js')}}"></script>
<script src="{{ asset('assets/js/dropzone.js')}}"></script>
<script src="{{ asset('assets/js/slick.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.filterizr.js')}}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.countdown.js')}}"></script>
<script src="{{ asset('assets/js/maps.js')}}"></script>
<script src="{{ asset('assets/js/app.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>

</body>
</html>
