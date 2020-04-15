@extends('layout.app')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="page-name">
                <h1>Properties List Fullwidth</h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>/</span><a href="{{ route('blog') }}">Blog</a></li>
                    <li><span>/</span><a href="#">Contact Us</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Properties section body start -->
    <div class="properties-section-body content-area">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10">
                    <!-- Option bar start -->
                    <div class="option-bar">
                        <div class="float-left">
                            <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                            </span>
                                <span class="title-name">Properties List</span>
                            </h4>
                        </div>
                        <div class="float-right cod-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                    <option>New To Old</option>
                                    <option>Old To New</option>
                                    <option>Properties (High To Low)</option>
                                    <option>Properties (Low To High)</option>
                                </select>
                                <a href="properties-list-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-fullwidth.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Property box 2 start -->
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-1.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Relaxing Apartment</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-2.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Park avenue</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-3.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Modern Family Home</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-1.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Relaxing Apartment</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-2.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Park avenue</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-3.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Modern Family Home</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-1.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Relaxing Apartment</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-2.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Park avenue</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="properties-details.html" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-3.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <p class="price">
                                            $178,000
                                        </p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="properties-details.html">Modern Family Home</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>3 Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>1 Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <span>4800 sq ft</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i>
                                            <span>1 TV</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>3 Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    </div>
                                    <div class="pull-right">
                                        <a><i class="flaticon-time"></i> 5 Days ago</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page navigation start -->
                    <div class="pagination-box hidden-mb-45 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
