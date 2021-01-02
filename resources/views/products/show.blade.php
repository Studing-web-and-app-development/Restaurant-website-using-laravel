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
        <h3>Show</h3>
    </div>
    <!-- bradcam_area_end -->
@endsection  
@section('content')
<div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                        <img style="width:9em; height:9em;"
                         src="{{asset('storage/'.$product->image)}}" alt=""></a></div>
                        <div class="info">
                            <h3>{{ $product->title }}</h3>
                            <p>{!! $product->description !!}</p>
                            <span>{{ $product->getPrice() }}</span>
                            <form action="{{route('cart.show')}}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <button type="submit" class="boxed-btn3">Order Now</button>
                            </form>
                        </div>
                    </div>
                </div>
@endsection
@section('content2')
  
    @endsection