@extends('layout.app')
@section('content')

    <!-- Banner start -->
    <div class="sub-banner">
        <div class="container">
            <div class="page-name">
                <h1>Blog</h1>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span>/</span><a href="{{ route('properties') }}">Properties</a></li>
                    <li><span>/</span><a href="#">Contact Us</a></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Blog body start -->
    <div class="blog-body content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/img/blog/blog-1.jpg')}}" alt="blog-img" class="img-fluid">
                            <div class="date-box">
                                <span>04</span>Jun
                            </div>
                        </div>
                        <div class="detail">
                            <h2>
                                <a href="blog-single-sidebar-right.html">Buying a Best House</a>
                            </h2>
                            <div class="post-meta clearfix">
                                <span><a href="#" tabindex="0"><i class="fa fa-user"></i>Amdin</a></span>
                                <span><a href="#" tabindex="0"><i class="fa fa-comment"></i>27</a></span>
                                <span><a href="#" tabindex="0"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with</p>
                            <a href="blog-single-sidebar-right.html" class="read-more">Read more</a>
                        </div>
                    </div>
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/img/blog/blog-2.jpg')}}" alt="blog-img" class="img-fluid">
                            <div class="date-box">
                                <span>07</span>Apr
                            </div>
                        </div>
                        <div class="detail">
                            <h2>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h2>
                            <div class="post-meta clearfix">
                                <span><a href="#" tabindex="0"><i class="fa fa-user"></i>Amdin</a></span>
                                <span><a href="#" tabindex="0"><i class="fa fa-comment"></i>27</a></span>
                                <span><a href="#" tabindex="0"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with</p>
                            <a href="blog-single-sidebar-right.html" class="read-more">Read more</a>
                        </div>
                    </div>
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="{{ asset('assets/img/blog/blog-3.jpg')}}" alt="blog-img" class="img-fluid">
                            <div class="date-box">
                                <span>21</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h2>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h2>
                            <div class="post-meta clearfix">
                                <span><a href="#" tabindex="0"><i class="fa fa-user"></i>Amdin</a></span>
                                <span><a href="#" tabindex="0"><i class="fa fa-comment"></i>27</a></span>
                                <span><a href="#" tabindex="0"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with</p>
                            <a href="blog-single-sidebar-right.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
