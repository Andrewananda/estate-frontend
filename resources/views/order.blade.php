@extends('layout.app')
@section('content')
    <div class="contact-section">
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-6 align-self-center pad-0">
                    <div class="form-section align-self-center">
                        @if(Session::has('message'))
                            <div class="alert alert-success" data-dismiss="alert" aria-label="Close">{{ Session::get('message') }}</div>
                        @endif
                        <h3>Enquiring For: {{ $order->property->title }}</h3>
                        <div class="clearfix"></div>
                        <form action="{{ route('order.complete') }}" method="post">
                            @csrf
                            <div class="form-group form-box">
                                <input type="name" name="name" class="input-text" placeholder="Name">
                            </div>
                            <div class="form-group form-box">
                                <input type="email" name="email" class="input-text" placeholder="Email Address">
                            </div>
                            <div class="form-group form-box clearfix">
                                <input type="text" name="phone" class="input-text" placeholder="Phone">
                            </div>
                            <div class="form-group clearfix mb-0">
                                <input type="hidden" name="property_id" value="{{ $order->property_id }}">
                                <button type="submit" class="btn-md btn-theme float-left">Complete Enquiry</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                    <div class="clearfix">
                        <div>
                            <a href="{{ route('property',['id'=>$order->id]) }}">
                                <img src="{{ asset('assets/img/properties/properties-3.jpg')}}" width="500px" height="500px" alt="black-logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
