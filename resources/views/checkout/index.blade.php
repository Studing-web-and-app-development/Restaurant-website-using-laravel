@extends('layouts.master')
@section('extra-meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('content0')
  <li><a  href="{{route('products.index')}}">home</a></li>
  <li><a  href="{{route('products.Menu')}}">Menu</a></li>
  <li><a href="about')}}">About</a></li>
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
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1> Page of payment</h1>
    </div>
    <div class="col-md-6">
      <form action="{{route('checkout.store')}}" method="POST" id="payment-form" class="my-4">
      @csrf
        <div id="card-element">
          <!-- Elements will create input elements here -->
        </div>
        <!-- We'll put the error messages in this element -->
        <div id="card-errors" role="alert"></div>
        <button id="submit" class="boxed-btn3 mt-4">proceed to payment ({{ getPrice(Cart::total())}})</button>
      </form>
    </div>
  </div>
</div>
@endsection
@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection
@section('extra-js')
<script>
  var stripe = Stripe('pk_test_51HUM42Kom6eNTbTHpxJSxQMPzdYGUmXYJULYwBtYXoJ4A1Yyif5yKrg8yJ2s9bzuJAALB7B5oIymB1OQVH2482l600A1BmOm9h');
  var elements = stripe.elements();
  var style = {
      base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
          color: "#aab7c4"
        }
      },
      invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
      }
    };
  var card = elements.create("card", { style: style });
  card.mount("#card-element");

  card.addEventListener('change', ({error}) => {
    const displayError = document.getElementById('card-errors');
    if (error) {
      displayError.classList.add('alert', 'alert-warning');
      displayError.textContent = error.message;
    } else {
      displayError.classList.remove('alert', 'alert-warning');
      displayError.textContent = '';
    }
  });
  var SubmitButton = document.getElementById('submit');
  SubmitButton.addEventListener('click', function(ev) {
    ev.preventDefault();
    SubmitButton.disabled = true;
    stripe.confirmCardPayment( "{{ $clientSecret }}", {
      payment_method: {
        card: card
      }
    }).then(function(result) {
        if (result.error) {
          SubmitButton.disabled = false;

         // Show error to your customer (e.g., insufficient funds)
         console.log(result.error.message);
         } else {
            // The payment has been processed!
            if (result.paymentIntent.status === 'succeeded') {
              var paymentIntent = result.paymentIntent;
             var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
             var form = document.getElementById('payment-form');
             var url = form.action;
             var redirect ='/thank you';

             fetch(
               url,
               {
                 headers: {
                   "Content-Type": "application/json",
                   "Accept":"application/json, text-plain, */* ",
                   "X-Requested-with":"XMLHttpRequest",
                   "X-CSRF-TOKEN":token
                 },
                 method:'post',
                 body: JSON.stringify({
                   paymentIntent: paymentIntent
                 })
               }).then((data)=>{
               console.log(data)
               window.location.href = redirect;
               }).catch((error) => {
              console.log(error)
               })
          }
        }
     });
  });
</script>
@endsection
