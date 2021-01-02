
@extends('layouts.master')
@section('content0')
<li><a  href="{{route('products.index')}}">home</a></li>
<li><a class="active" href="{{route('products.Menu')}}">Menu</a></li>
<li><a href="{{route('about')}}">About</a></li>
<li><a href="{{route('contact')}}">Contact</a></li>
<li><a href="{{route('cart.index')}}">Cart <span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a></li>
@endsection  
@section('content1')
 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg overlay">
        <h3>Menu</h3>
    </div>
    <!-- bradcam_area_end -->
@endsection  
@section('cont')
    <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <span>The menu</span>
                        <h3>By category</h3>
                        <ul>
                        @foreach($categories as $category)
                        <li style="padding-left:3em"><a href="{{route('products.Menu',['category'=> $category->slug])}}">{{$category->name}}</a></li>


                        @endforeach
                       
                        </ul>
                    </div>
                </div>
            </div>
       
 @endsection
@section('content')
@forelse($products as $product)
<div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <a href="{{ route('products.show', $product->slug)}}" >
                            <img style="width:9em; height:9em;" src="{{asset('storage/'.$product->image)}}" alt=""></a>
                        </div>
                        <div class="info">
                            <h3>{{ $product->title }}</h3>
                            <p>{{ $product->slug }}</p>
                            <span>{{ $product->getPrice() }}</span>
                        </div>
                    </div>
                </div>
@empty
<div style="text-align:left">Non items found</div>
@endforelse

@endsection


@section('content2')
  
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
                                                    <h4>Abdrrahmane</h4>
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
                                                <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec
                                                    sed
                                                    neque.</p>
                                                <div class="testmonial_author">
                                                    <div class="thumb">
                                                        <img src="{{ asset('frontend/img/testmonial/3.png')}}" alt="">
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
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    <!-- testimonial_area_ned  -->

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