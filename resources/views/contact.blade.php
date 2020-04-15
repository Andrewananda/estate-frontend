@extends('layout.app')
@section('content')

    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="page-name">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>/</span><a href="{{ route('properties') }}">Properties</a></li>
                    <li><span>/</span><a href="{{ route('blog') }}">Blog</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Contact 3 start -->
    <div class="contact-3 content-area-5">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1 class="mb-10">Contact us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <ul class="contact-list">
                            <li><i class="fa fa-map-marker"></i> 20/F Green Road, Dhaka</li>
                            <li><i class="fa fa-phone"></i> +55 417 634 7071</li>
                            <li><i class="mr-3 fa fa-envelope"></i> info@themevessel.com</li>
                        </ul>
                        <h3>Follow Us</h3>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn btn-md button-theme">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
