@extends('layouts.master')
@section('content0')
<li><a class="active" href="{{route('products.index')}}">home</a></li>
                                        <li><a href="{{route('products.Menu')}}">Menu</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('cart.index')}}">Cart <span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a></li>
@endsection  
@section('content1')
<!-- slider_area_start -->
    
<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Big Deal</span>
                                </div>
                                <h3>EatWell<br>
                                    Restaurant</h3>
                                <h4>Orders</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <div class="deal_text">
                                    <span>Big Deal</span>
                                </div>
                                <h3>EatWell<br>
                                    Restaurant</h3>
                                <h4>Orders</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    @endsection 
@section('cont')
    <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>Meal Menu</span>
                        <h3>Best Meals Ever </h3>
                    </div>
                </div>
            </div>
 @endsection
@section('content')
@foreach ($products as $product)
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <a href="{{ route('products.show', $product->slug)}}" >
                           <img style="width:9em; height:9em;" src="{{asset('storage/'.$product->image)}}" alt=""></a>                        </div>
                        <div class="info">
                            <h3>{{ $product->title }}</h3>
                            <p>{{ $product->subtitle }}</p>
                            <span>${{ $product->getPrice() }}</span>
                        </div>
                    </div>
                </div>
@endforeach
@endsection
@section('conte')
<div class="row">
                <div class="col-lg-12">
                    <div class="iteam_links">
                        <a class="boxed-btn5" href="{{route('products.Menu')}}">More Items</a>
                    </div>
                </div>
            </div>
@endsection
@section('content2')
  
    <!-- about_area_start -->
    <div class="about_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about_thumb2">
                            <div class="img_1">
                                <img src="{{ asset('frontend/img/about/1.png')}}" alt="">
                            </div>
                            <div class="img_2">
                                <img src="{{ asset('frontend/img/about/2.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 offset-lg-1 col-md-6">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <span>About Us</span>
                                <h3>Best Meals <br>
                                        in your City</h3>
                            </div>
                            <p>
                            Eat well is the best restaurant in this area, we offer high-end services, delicious and varied dishes Pizza, Hamburger
                            Tradutional food, Grills, Tacos, Drinks. 
                            You can now order the dishes you love in the quantity you want
                            Do not forget to visit our restaurant, order your meals, and write your opinions to us
                            With us you can eat your best meals.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about_area_end -->
    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <h3>Best<br>
            Chefs</h3>
            <span>with best meals</span>
            <div class="video_payer">
                <a href="https://www.youtube.com/watch?v=Cv32NXUt3jI" class="video_btn popup-video">
                    <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- testimonial_area_start  -->
        <div class="testimonial_area ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                                <div class="section_title mb-60 text-center">
                                        <span>Testimonials</span>
                                        <h3>Happy Customers</h3>
                                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="testmonial_active owl-carousel">
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                                I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/1.png')}}" alt="">
                                                    </div>
                                                    <h4>Ahmed</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                               I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/2.png')}}" alt="">
                                                    </div>
                                                    <h4>Ikram</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                              I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/2.png')}}" alt="">
                                                    </div>
                                                    <h4>Miyyada</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single_carousel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <div class="single_testmonial text-center">
                                            <p>“This restaurant's meals are delicious, the delivery service is very good,
                                              I love Eatwell restaurant, good luck to you.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/3.png')}}" alt="">
                                                    </div>
                                                    <h4>Abderrahmane</h4>
                                                    <div class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <!-- testimonial_area_end  -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{ asset('frontend/img/instragram/1.png')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{ asset('frontend/img/instragram/2.png')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{ asset('frontend/img/instragram/3.png')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="{{ asset('frontend/img/instragram/4.png')}}" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->
    @endsection
