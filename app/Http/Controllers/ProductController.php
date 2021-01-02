<?php

namespace App\Http\Controllers;
use App\Models\Product; 
use Illuminate\Http\Request;
use App\Http\Requests;


class ProductController extends Controller
{
    public function index()
    {

         $products = Product::inRandomOrder()->take(8)->get();
         
         return view('products.index')->with('products', $products);
        // return 'hello world';
    }
    public function Menu()
    {
        return view('products.Menu');
    }
    public function Show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.Show')->with('product', $product);
    }
    public function about()
    {
        return view('about');
    }
    //for search
    public function search()
    {
        request()->validate([
          'q' =>'required|min:3'
        ]);
    $q = request()->input('q');
   $products = Product::where('title', 'like', "%$q%")
    ->orWhere('description', 'like', "%$q%")
    ->paginate(6);
    return view('products.search')->with('products', $products);
}
    
}
