@extends('layouts.master')
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content0')
                                        <li><a  href="{{route('products.index')}}">home</a></li>
                                        <li><a  href="{{route('products.Menu')}}">Menu</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                     
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a class="active" href="{{route('cart.index')}}">Cart <span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a></li>
@endsection  
@section('content1')
 <!-- bradcam_area_start -->
 <div class="bradcam_area breadcam_bg overlay">
        <h3>Cart</h3>
    </div>
    <!-- bradcam_area_end -->
@endsection  
@section('content')
@if(Cart::count() > 0)
<div class="px-4 px-lg-0">
  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                </tr>
              </thead>
              <tbody>
             @foreach(Cart::content() as $product)
             <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      <img src="{{asset('storage/'.$product->image)}}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$product->model->title}}</a></h5><span class="text-muted font-weight-normal font-italic d-block"></span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>{{getPrice($product->subtotal())}}</strong></td>
                  <td class="border-0 align-middle">
                  <select name="qty" id="qty" data-id="{{ $product->rowId}}" class="custom-select">
                     @for ( $i = 1; $i <= 6; $i++)
                        <option value="{{ $i }}" {{ $i == $product->qty ? 'selected' : '' }}>{{ $i }}</option>
                     @endfor
                  </select>
                  </td>
                  <td class="border-0 align-middle">
                  <form action="{{route('cart.destroy', $product->rowId)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type='submit' class="text-dark"><i class="fa fa-trash"></i></a>
                  </form>
                  </td>
                </tr>
             @endforeach
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Address</div>
          <div class="p-4">
            <p class="font-italic mb-4">Address</p>
            <div class="input-group mb-4 border rounded-pill p-2">
              <input type="text" placeholder="Apply Address" aria-describedby="button-addon3" class="form-control border-0">
              <div class="input-group-append border-0">
                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-map-marker mr-2"></i>Apply address</button>
              </div>
            </div>
          </div>
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for restaurant</div>
          <div class="p-4">
            <p class="font-italic mb-4">If you have some information for the restaurant you can leave them in the box below</p>
            <textarea name="" cols="30" rows="2" class="form-control"></textarea>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>{{ getPrice(Cart::subtotal())}}</strong></li>
              <!-- <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong></strong></li> -->
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>{{ getPrice(Cart::tax()) }}</strong></li>
              
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">{{ getPrice(Cart::Total()) }}</h5>
              </li>
            </ul><a href="{{route('checkout.index')}}" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@else
<div class="col-md-12">
<p> Your Cart is empty</p>
</div>
@endif
@endsection
@section('extra-js')
<script>
   var selects = document.querySelectorAll("#qty");
   Array.from(selects).forEach((element) => {
     element.addEventListener('change', function(){
       var rowId = this.getAttribute('data-id');
       var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        fetch(
          `/basket/${rowId}`,
          {
            headers: {
                   "Content-Type": "application/json",
                   "Accept":"application/json, text-plain, */* ",
                   "X-Requested-with":"XMLHttpRequest",
                   "X-CSRF-TOKEN":token
            },
            method: 'PATCH',        
            body: JSON.stringify({
                   qty: this.value
                 })
          }

        ).then((data) => {
               console.log(data);
               location.reload();
               }).catch((error) => {
              console.log(error)
               })  
     });
   });
</script>
@endsection