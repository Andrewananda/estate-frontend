<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Housy - Real Estate HTML5 Template</title>
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
<header class="main-header mh-3 header-transparent main-header-2">
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
                    <li class="nav-item dropdown active">
                        <a class="nav-link" href="{{ route('home') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Properties
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">List Layout</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-list-rightside.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-list-leftsidebar.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-list-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Grid Layout</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-grid-rightside.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-grid-leftside.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-grid-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Map View</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-map-rightside-list.html">Map List 1</a></li>
                                    <li><a class="dropdown-item" href="properties-map-leftside-list.html">Map List 2</a></li>
                                    <li><a class="dropdown-item" href="properties-map-rightside-grid.html">Map Grid 1</a></li>
                                    <li><a class="dropdown-item" href="properties-map-leftside-grid.html">Map Grid 2</a></li>
                                    <li><a class="dropdown-item" href="properties-map-full.html">Map FullWidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Property Detail</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-details.html">Property Detail 1</a></li>
                                    <li><a class="dropdown-item" href="properties-details-2.html">Property Detail 2</a></li>
                                    <li><a class="dropdown-item" href="properties-details-3.html">Property Detail 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Agents
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="agent-list.html">Agent List 1</a></li>
                            <li><a class="dropdown-item" href="agent-list-2.html">Agent List 2</a></li>
                            <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 1</a></li>
                            <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 2</a></li>
                            <li><a class="dropdown-item" href="agent-detail.html">Agent Detail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="navbarDropdownMenuLink4">
                            <div class="megamenu-area">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="about.html">About 1</a>
                                            <a class="dropdown-item" href="about-2.html">About 2</a>
                                            <a class="dropdown-item" href="services.html">Services 1</a>
                                            <a class="dropdown-item" href="services-2.html">Services 2</a>
                                            <a class="dropdown-item" href="properties-list-rightside.html">Properties List</a>
                                            <a class="dropdown-item" href="properties-grid-rightside.html">Properties Grid</a>
                                            <a class="dropdown-item" href="properties-map-full.html">Properties Map</a>
                                            <a class="dropdown-item" href="properties-comparison.html">Properties Comparison</a>
                                            <a class="dropdown-item" href="search-brand.html">Properties Brands</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="pricing-tables.html">Pricing Tables 1</a>
                                            <a class="dropdown-item" href="pricing-tables-2.html">Pricing Tables 2</a>
                                            <a class="dropdown-item" href="pricing-tables-3.html">Pricing Tables 3</a>
                                            <a class="dropdown-item" href="gallery.html">Gallery 1</a>
                                            <a class="dropdown-item" href="gallery-2.html">Gallery 2</a>
                                            <a class="dropdown-item" href="typography.html">Typography 1</a>
                                            <a class="dropdown-item" href="typography-2.html">Typography 2</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="contact.html">Contact 1</a>
                                            <a class="dropdown-item" href="contact-2.html">Contact 2</a>
                                            <a class="dropdown-item" href="contact-3.html">Contact 3</a>
                                            <a class="dropdown-item" href="faq.html">Faq 1</a>
                                            <a class="dropdown-item" href="faq-2.html">Faq 2</a>
                                            <a class="dropdown-item" href="icon.html">Icon</a>
                                            <a class="dropdown-item" href="404.html">Error Page</a>
                                            <a class="dropdown-item" href="404-2.html">Error Page 2</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="my-profile.html">My profile</a>
                                            <a class="dropdown-item" href="my-properties.html">My Properties</a>
                                            <a class="dropdown-item" href="favorited-properties.html">Favorited Properties</a>
                                            <a class="dropdown-item" href="submit-property.html">Submit Property</a>
                                            <a class="dropdown-item" href="login.html">Login</a>
                                            <a class="dropdown-item" href="signup.html">Register</a>
                                            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                            <a class="dropdown-item" href="change-password.html">Change Password</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Classic</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-classic-fullwidth.html">FullWidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Columns</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-columns-2col.html">2 Columns</a></li>
                                    <li><a class="dropdown-item" href="blog-columns-3col.html">3 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog Details</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-single-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                        </ul>
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
<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="{{ asset('assets/img/banner/banner-3.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-left tl">
                            <h4>Find Your Dream House</h4>
                            <p class="test">This is real estate website template based on Bootstrap 4 framework.</p>
                            <a href="#" class="btn btn-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="{{ asset('assets/img/banner/banner-3.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-left tl">
                            <h4>Find Your Dream House</h4>
                            <p class="test">This is real estate website template based on Bootstrap 4 framework.</p>
                            <a href="#" class="btn btn-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100" src="{{ asset('assets/img/banner/banner-1.jpg')}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-left tl">
                            <h4>Find Your Dream House</h4>
                            <p class="test">This is real estate website template based on Bootstrap 4 framework.</p>
                            <a href="#" class="btn btn-white">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Section start -->
        <div class="search-section search-area-2 search-area-4 none-992">
            <div class="search-section-area">
                <div class="search-area-inner">
                    <div class="search-contents">
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area">
                                    <option>Area From</option>
                                    <option>3000</option>
                                    <option>2600</option>
                                    <option>2200</option>
                                    <option>1800</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types">
                                    <option>Property Types</option>
                                    <option>Apartments</option>
                                    <option>Houses</option>
                                    <option>Commercial</option>
                                    <option>Garages</option>
                                </select>
                            </div>
                            <div class="form-group mb-30">
                                <select class="selectpicker search-fields" name="location">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                </select>
                            </div>
                            <div class="range-slider">
                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Section end -->
    </div>
</div>
<!-- Search Section start -->
<div class="search-section search-area-2 bg-grea sa2">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="area">
                                        <option>Area From</option>
                                        <option>3000</option>
                                        <option>2600</option>
                                        <option>2200</option>
                                        <option>1800</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-status">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-types">
                                        <option>Property Types</option>
                                        <option>Apartments</option>
                                        <option>Houses</option>
                                        <option>Commercial</option>
                                        <option>Garages</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="max-area">
                                        <option>Bedrooms</option>
                                        <option>2400</option>
                                        <option>2800</option>
                                        <option>3200</option>
                                        <option>3600</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="min-area">
                                        <option>Bathrooms</option>
                                        <option>2400</option>
                                        <option>2800</option>
                                        <option>3200</option>
                                        <option>3600</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="range-slider">
                                    <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
                            <a href="#"><i class="fa fa-angle-right"></i>Home</a>
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
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Popular Posts</h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <div class="popular-posts">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('assets/img/sub-properties/sub-properties-3.jpg')}}" alt="sub-properties">
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="media-heading">
                                    <a href="#">Real Eatate Expo 2019</a>
                                </h3>
                                <p>Feb 27, 2019 | $1045,000</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('assets/img/sub-properties/sub-properties-2.jpg')}}" alt="sub-properties">
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="media-heading">
                                    <a href="#">Big Head House</a>
                                </h3>
                                <p>Apr 15, 2019 | $2041,000</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('assets/img/sub-properties/sub-properties-1.jpg')}}" alt="sub-properties">
                            </div>
                            <div class="media-body align-self-center">
                                <h3 class="media-heading">
                                    <a href="#">Villa in Coral Gables</a>
                                </h3>
                                <p>Apr 21, 2019 | $545,000</p>
                            </div>
                        </div>
                    </div>
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
                <p class="copy">© 2020 <a href="#">Theme Vessel.</a> Trademarks and brands are the property of their respective owners.</p>
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
