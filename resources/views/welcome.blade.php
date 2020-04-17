@extends('layout.app')
@section('content')
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

    <!-- Ads start -->
    <div class="recently-properties" style="padding-top:50px" >
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Ads</h1>
            </div>
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($ads as $ad)
                    <div class="slick-slide-item">
                        <div class="property-box-5">
                            <div class="property-photo">
                                <img class="img-fluid" src="{{ asset('assets/img/properties/properties-1.jpg')}}" alt="properties">
                                <div class="date-box">For {{ $ad->unit_group->property_type->title }}</div>
                            </div>
                            <div class="detail">
                                <div class="heading">
                                    <h3>
                                        <a href="properties-details.html">{{ $ad->unit_group->title }}</a>
                                    </h3>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>{{ $ad->unit_group->location->title }}
                                        </a>
                                    </div>
                                </div>
                                <div class="properties-listing">
                                    <span>{{ $ad->unit_group->bedroom }} beds</span>
                                    <span>{{ $ad->unit_group->bathroom }} baths</span>
                                    <span>{{ $ad->unit_group->balcony }} balcony</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Featured properties start -->
    <div class="featured-properties" style="padding-top:50px">
        <div class="container">
            <!-- Main title -->
            <div class="main-title mt2">
                <h1>Featured Properties</h1>
                <div class="list-inline-listing">
                    <ul class="filters filteriz-navigation clearfix">
                        <li class="active btn filtr-button filtr" data-filter="all">All</li>
                        <li data-filter="1" class="btn btn-inline filtr-button filtr">Apartment</li>
                        <li data-filter="2" class="btn btn-inline filtr-button filtr">House</li>
                        <li data-filter="3" class="btn btn-inline filtr-button filtr">Office</li>
                    </ul>
                </div>
            </div>
            <div class="row filter-portfolio">
                <div class="cars">
                    @foreach($properties as $property)
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="{{ route('property',['id'=>$property->id]) }}" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            {{ number_format($property->rent,2) }}
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="listing-time opening">For {{ $property->property_type->title }}</div>
                                    <img class="d-block w-100" href="{{ route('property',['id'=>$property->id]) }}" src="{{ asset('assets/img/properties/properties-1.jpg')}}" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="{{ route('property',['id'=>$property->id]) }}">{{ $property->property->title }}</a>
                                </h1>
                                <div class="location">
                                    <a href="{{ route('property',['id'=>$property->id]) }}">
                                        <i class="fa fa-map-marker"></i>{{ $property->location->title }}
                                        
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
{{--                                    <li>--}}
{{--                                        <i class="flaticon-square"></i> 4800 sq ft--}}
{{--                                    </li>--}}
                                    <li>
                                        <i class="flaticon-furniture"></i> {{ $property->bedroom }} bedroom
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i> {{ $property->bathroom }} Baths
                                    </li>
{{--                                    <li>--}}
{{--                                        <i class="flaticon-vehicle"></i> 1 Garage--}}
{{--                                    </li>--}}
                                    <li>
                                        <i class="flaticon-window"></i> {{ $property->balcony }} Balcony
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Services 2 start -->
    <div class="services-2 content-area-5 bg-grea-3">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>What are you looking for?</h1>
            </div>
            <div class="row wow">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-info-5">
                        <i class="flaticon-apartment"></i>
                        <h4>Apartments</h4>
                        <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-info-5">
                        <i class="flaticon-internet"></i>
                        <h4>Houses</h4>
                        <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-info-5">
                        <i class="flaticon-vehicle"></i>
                        <h4>Garages</h4>
                        <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-info-5">
                        <i class="flaticon-coins"></i>
                        <h4>Commercial</h4>
                        <p>Lorem ipsum dolor sit amet, consectur adipisicing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
            </div>
            <div class="text-center read-more-2">
                <a href="services-1.html" class="btn-white">Read More</a>
            </div>
        </div>
    </div>

    <!-- Testimonial 3 start -->
    <div class="testimonial-3">
        <div class="container">
            <header class="testimonia-header">
                <h1>Our Testimonial</h1>
            </header>
            <div class="slick-slider-area">
                <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                    <div class="slick-slide-item">
                        <div class="testimonial-inner">
                            <div class="content-box">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span>( 7 Reviews )</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                            </div>
                            <div class="media">
                                <a href="#">
                                    <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" alt="testimonial-avatar" class="img-fluid">
                                </a>
                                <div class="media-body align-self-center">
                                    <h5>
                                        Eliane Perei
                                    </h5>
                                    <h6>Web Developer</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="testimonial-inner">
                            <div class="content-box">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span>( 7 Reviews )</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                            </div>
                            <div class="media">
                                <a href="#">
                                    <img src="{{ asset('assets/img/avatar/avatar-3.jpg')}}" alt="testimonial-avatar" class="img-fluid">
                                </a>
                                <div class="media-body align-self-center">
                                    <h5>
                                        Maria Blank
                                    </h5>
                                    <h6>Office Manager</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="testimonial-inner">
                            <div class="content-box">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span>( 7 Reviews )</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                            </div>
                            <div class="media">
                                <a href="#">
                                    <img src="{{ asset('assets/img/avatar/avatar-4.jpg')}}" alt="testimonial-avatar" class="img-fluid">
                                </a>
                                <div class="media-body align-self-center">
                                    <h5>
                                        Karen Paran
                                    </h5>
                                    <h6>Support Manager</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide-item">
                        <div class="testimonial-inner">
                            <div class="content-box">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-full"></i>
                                    <span>( 7 Reviews )</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been standard dummy text ever</p>
                            </div>
                            <div class="media">
                                <a href="#">
                                    <img src="{{ asset('assets/img/avatar/avatar-1.jpg')}}" alt="testimonial-avatar" class="img-fluid">
                                </a>
                                <div class="media-body align-self-center">
                                    <h5>
                                        John Pitarshon
                                    </h5>
                                    <h6>Creative Director</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog start -->
    <div class="blog content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Blog</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/img/blog/blog-1.jpg')}}" alt="blog-1" class="img-fluid">
                            <div class="date-box">
                                <span>17</span>Feb
                            </div>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li class="profile-user">
                                    <img src="{{ asset('assets/img/avatar/avatar-1.jpg')}}" alt="user-blog">
                                </li>
                                <li><span>John Doe</span></li>
                                <li><i class="fa fa-calendar"></i></li>
                                <li><i class="fa fa-comments"></i></li>
                            </ul>
                        </div>
                        <div class="caption detail">
                            <h4><a href="blog-single-sidebar-right.html">Buying a Home</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/img/blog/blog-2.jpg')}}" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>17</span>Jan
                            </div>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li class="profile-user">
                                    <img src="{{ asset('assets/img/avatar/avatar-2.jpg')}}" alt="user-blog">
                                </li>
                                <li><span>Alex Teseira</span></li>
                                <li><i class="fa fa-calendar"></i></li>
                                <li><i class="fa fa-comments"></i></li>
                            </ul>
                        </div>
                        <div class="caption detail">
                            <h4><a href="blog-single-sidebar-right.html">Selling Your Real House</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 none-992">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/img/blog/blog-3.jpg')}}" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>23</span>May
                            </div>
                        </div>
                        <div class="post-meta">
                            <ul>
                                <li class="profile-user">
                                    <img src="{{ asset('assets/img/avatar/avatar-3.jpg')}}" alt="user-blog">
                                </li>
                                <li><span>Karen Paran</span></li>
                                <li><i class="fa fa-calendar"></i></li>
                                <li><i class="fa fa-comments"></i></li>
                            </ul>
                        </div>
                        <div class="caption detail">
                            <h4><a href="blog-single-sidebar-right.html">Find Your Dream Real Estate</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the dummy text ever since the 1500s, when</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners strat -->
{{--    <div class="partners">--}}
{{--        <div class="container">--}}
{{--            <h4>Brands and Partners</h4>--}}
{{--            <div class="slick-slider-area">--}}
{{--                <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-1.png')}}')}}" alt="brand" class="img-fluid"></div>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-2.png')}}" alt="brand" class="img-fluid"></div>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-3.png')}}" alt="brand" class="img-fluid"></div>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-4.png')}}" alt="brand" class="img-fluid"></div>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-5.png')}}" alt="brand" class="img-fluid"></div>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-6.png')}}" alt="brand" class="img-fluid"></div>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-2.png')}}" alt="brand" class="img-fluid"></div>--}}
{{--                    <div class="slick-slide-item"><img src="{{ asset('assets/img/brand/brand-4.png')}}" alt="brand" class="img-fluid"></div>--}}
{{--                </div>--}}
{{--                <div class="slick-prev slick-arrow-buton">--}}
{{--                    <i class="fa fa-angle-left"></i>--}}
{{--                </div>--}}
{{--                <div class="slick-next slick-arrow-buton">--}}
{{--                    <i class="fa fa-angle-right"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @endsection
