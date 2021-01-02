<?php

namespace App\Http\Controllers;
use DateTime;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\Stripe;
use Stripe\paymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Cart::count() <= 0){
            return redirect()->route('product.index');
        }
        
        Stripe::setApiKey('sk_test_51HUM42Kom6eNTbTHBrVFfeHvBsD8GJGmI6cmGqdrGkDMK9iWSV3sZy72gwVhRiTDp57pIyoV9OHqrSxa5UzQbUjv00V7I8X1dd');
        $intent = PaymentIntent::create([
            'amount' => round(Cart::total()),
            'currency' => 'usd'
          ]);
          $clientSecret = Arr::get($intent, 'client_secret');
          return view('checkout.index', [
                 'clientSecret'=> $clientSecret
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request -> json()->all();

        $order = new Order();
        $order->payment_intent_id = $data['paymentIntent']['id'];//id of payment
        $order->amount = $data['paymentIntent']['amount'];//for amount
        //The date of payment
        $order->payment_created_at = (new DateTime())
              ->setTimestamp($data['paymentIntent']['created'])
              ->format('Y-m-d H:i:s');

        $products = [];
        $i = 0;
        //fair une boucle, pour chaque produit dans la carte
        foreach (Cart::content() as $product) {
            $products['product_' . $i][] = $product->model->title;//title of product
            $products['product_' . $i][] = $product->model->price;//price of product
            $products['product_' . $i][] = $product->qty;// quantity of product
            $i++;
        }

        $order->products = serialize($products);
        $order->user_id =15;
        $order->save();
        //when the payment succeeded show flash message "success"
        if ($data['paymentIntent']['status']=== 'succeeded') {
            Cart::destroy();
            Session::flash('success','you order has been taken into account');
            return response()->json(['success'=> 'Payment Intent Succeedes']);
        //when payment not succeded, show flash message"error"    
        }else{
            return response()->json(['error'=> 'Payment Intent Not Succeedes']);
        }
    }
        //when the opreration of payment end go to thank you page
        public function thankyou()
        {
        return Session::has('success') ? view('checkout.thankyou') : redirect()->
        route('products.index');
        }

    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
