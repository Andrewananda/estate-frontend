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
                    <!-- Property box 2 start -->
                    @foreach($properties as $property)
                    <div class="property-box-2">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-pad">
                                <a href="{{ route('property',['id'=>$property->id]) }}" class="property-img">
                                    <img src="{{ asset('assets/img/properties/properties-list-1.jpg')}}" alt="properties" class="img-fluid">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="listing-time opening">For {{ $property->property_type->title }}</div>
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
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-pad">
                                <div class="detail">
                                    <h3 class="title">
                                        <a href="{{ route('property',['id'=>$property->id]) }}">{{ $property->property->title }}</a>
                                    </h3>
                                    <h5 class="location">
                                        <a href="{{ route('property',['id'=>$property->id]) }}">
                                            <i class="flaticon-location"></i>{{ $property->location->title }}
                                        </a>
                                    </h5>
                                    <ul class="facilities-list clearfix">
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <span>{{ $property->bedroom }} Beds</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <span>{{ $property->bathroom }} Baths</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-vehicle"></i>
                                            <span>1 Garage</span>
                                        </li>
                                        <li>
                                            <i class="flaticon-window"></i>
                                            <span>{{ $property->balcony }} Balcony</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <a><i class="fa fa-user"></i>{{ $property->property->title }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach

                    </div>
                    <!-- Page navigation start -->
                </div>
            </div>
        </div>
    </div>

    @endsection
