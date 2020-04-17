@extends('layout.app')
@section('content')

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
    <!-- Properties Details page start -->
    <div class="properties-details-page content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="{{ asset('assets/img/properties/properties-3.jpg')}}" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="{{ asset('assets/img/properties/properties-2.jpg')}}" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="{{ asset('assets/img/properties/properties-1.jpg')}}" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="{{ asset('assets/img/properties/properties-4.jpg')}}" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="{{ asset('assets/img/properties/properties-5.jpg')}}" class="img-fluid" alt="slider-properties">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                    <img src="{{ asset('assets/img/properties/properties-3.jpg')}}" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                    <img src="{{ asset('assets/img/properties/properties-2.jpg')}}" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                    <img src="{{ asset('assets/img/properties/properties-1.jpg')}}" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                    <img src="{{ asset('assets/img/properties/properties-4.jpg')}}" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                    <img src="{{ asset('assets/img/properties/properties-5.jpg')}}" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                        </ul>
                        <!-- Heading properties start -->
                        <div class="heading-properties">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3>{{ $property->property->title }}</h3>
                                        <p><i class="fa fa-map-marker"></i> {{ $property->location->title }}</p>
                                    </div>
                                    <div class="pull-right">
                                        <h3><span class="text-right">Ksh: {{ number_format($property->rent,2) }}</span></h3>
                                        <h5>Per Month</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Advanced search start -->
                    <div class="widget-2 sidebar advanced-search-2">
                        <h3 class="sidebar-title">Advanced Search</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-sdtatus">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-type">
                                    <option>Property Type</option>
                                    <option>Apartments</option>
                                    <option>Houses</option>
                                    <option>Commercial</option>
                                    <option>Garages</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="commercial">
                                    <option>Commercial</option>
                                    <option>Residential</option>
                                    <option>Land</option>
                                    <option>Hotels</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>location</option>
                                    <option>New York</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Properties description start -->
                    <div class="properties-description mb-40">
                        <h3 class="heading-2">
                            Description
                        </h3>
                        <p>
                            {{ $property->property->description }}
                        </p>
                    </div>
                    <!-- Properties condition start -->
                    <div class="properties-condition mb-40">
                        <h3 class="heading-2">
                            Condition
                        </h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-furniture"></i>{{ $property->bedroom }} Bedroom
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>Bathroom
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-vehicle"></i>1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i>{{ $property->balcony }} Balcony
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right">
                        <!-- Advanced search start -->
                        <div class="sidebar widget advanced-search none-992">
                            <h3 class="sidebar-title">Advanced Search</h3>
                            <div class="s-border"></div>
                            <div class="m-border"></div>
                            <form method="GET">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-sdtatus">
                                        <option>Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="property-type">
                                        <option>Property Type</option>
                                        <option>Apartments</option>
                                        <option>Houses</option>
                                        <option>Commercial</option>
                                        <option>Garages</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="commercial">
                                        <option>Commercial</option>
                                        <option>Residential</option>
                                        <option>Land</option>
                                        <option>Hotels</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>location</option>
                                        <option>New York</option>
                                        <option>Bangladesh</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bedrooms">
                                                <option>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bathroom">
                                                <option>Bathroom</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="balcony">
                                                <option>Balcony</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="garage">
                                                <option>Garage</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="search-button">Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <h3 class="heading-2">Similar Properties</h3>
            <!-- Similar Properties start -->
            <div class="row similar-properties">
                <div class="container-fluid">
                    <div class="slick-slider-area">
                        <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                            @foreach($similar_properties as $similar_property)
                            <div class="slick-slide-item">
                                <div class="property-box">
                                    <div class="property-thumbnail">
                                        <a href="{{ route('property',['id'=>$similar_property->id]) }}" class="property-img">
                                            <div class="listing-badges">
                                                <span class="featured">Featured</span>
                                            </div>
                                            <div class="price-ratings-box">
                                                <p class="price">
                                                    {{ number_format($similar_property->rent,2) }}
                                                </p>
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="listing-time opening">For {{ $similar_property->property_type->title }}</div>
                                            <img class="d-block w-100" src="{{ asset('assets/img/properties/properties-1.jpg')}}" alt="properties">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h1 class="title">
                                            <a href="{{ route('property',['id'=>$similar_property->id]) }}">{{ $similar_property->property->title }}</a>
                                        </h1>
                                        <div class="location">
                                            <a href="{{ route('property',['id'=>$similar_property->id]) }}">
                                                <i class="fa fa-map-marker"></i>{{ $similar_property->location->title }}
                                            </a>
                                        </div>
                                        <ul class="facilities-list clearfix">
                                            <li>
                                                <i class="flaticon-furniture"></i> {{ $similar_property->bedroom }} Beds
                                            </li>
                                            <li>
                                                <i class="flaticon-holidays"></i> {{ $similar_property->bathroom }} Baths
                                            </li>
                                            <li>
                                                <i class="flaticon-vehicle"></i> 1 Garage
                                            </li>
                                            <li>
                                                <i class="flaticon-window"></i> {{ $similar_property->balcony }} Balcony
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="footer clearfix">
                                        <div class="pull-left days">
                                            <a><i class="fa fa-user"></i> {{ $similar_property->property->title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
