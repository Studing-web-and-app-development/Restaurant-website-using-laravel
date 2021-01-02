@extends('layouts.master')
@section('content0')
                                        <li><a  href="{{route('products.index')}}">home</a></li>
                                        <li><a  href="{{route('products.Menu')}}">Menu</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a  href="{{route('cart.index')}}">Cart<span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a></li>
@endsection  
@section('content1')
 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg overlay">
        <h3>Thank you</h3>
    </div>
    <!-- bradcam_area_end -->
@endsection  
@section('content')
<h1>your order has been taken into account </h1>
@endsection