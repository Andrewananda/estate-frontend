@extends('layout.app')
@section('content')
    <!-- Properties section body start -->
    <div class="properties-section-body content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <!-- Option bar start -->
                    <div class="option-bar">
                        <div class="float-left">
                            <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-large"></i>
                            </span>
                                <span class="title-name">Properties Grid</span>
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
                                <a href="properties-list-fullwidth.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- grid properties start -->
                    <div class="row property-section">
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="/property" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
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
                                        <div class="listing-time opening">For Sale</div>
                                        <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Modern Family Home</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
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
                                        <div class="listing-time opening">For Rent</div>
                                        <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Relaxing Apartment</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
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
                                        <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Park Avenue</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
                                        <div class="listing-time opening">For Rent</div>
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
                                        <img class="d-block w-100" src="img/properties/properties-4.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Masons Villas</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
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
                                        <img class="d-block w-100" src="img/properties/properties-5.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Big Head House</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
                                        <div class="listing-time opening">For Rent</div>
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
                                        <img class="d-block w-100" src="img/properties/properties-6.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Park Avenue</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
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
                                        <div class="listing-time opening">For Sale</div>
                                        <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Modern Family Home</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                        </div>
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
                                        <div class="listing-time opening">For Rent</div>
                                        <img class="d-block w-100" src="img/properties/properties-2.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Relaxing Apartment</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                        <div class="col-lg-4 col-md-6 col-sm-12" >
                            <div class="property-box">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
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
                                        <img class="d-block w-100" src="img/properties/properties-3.jpg" alt="properties">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Park Avenue</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                        </a>
                                    </div>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-square"></i> 4800 sq ft
                                        </li>
                                        <li>
                                            <i class="flaticon-furniture"></i> 3 Beds
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i> 2 Baths
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i> 1 Garage
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i> 3 Balcony
                                        </li>
                                        <li>
                                            <i class="flaticon-monitor"></i> TV
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
                                <li class="page-item"><a class="page-link" href="properties-grid-leftside.html">2</a></li>
                                <li class="page-item"><a class="page-link" href="properties-grid-fullwidth.html">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="properties-grid-fullwidth.html"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
