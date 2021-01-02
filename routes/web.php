<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// use app\Http\Controller\ProductController;
// Route::get('/restaurant', [ProductController::class, 'index']);
//products route
Route::get('/restaurant', 'ProductController@index')->name('products.index');
Route::get('/restaurant/Menu', 'MenuController@index')->name('products.Menu');
Route::get('/restaurant/Menu/{slug}', 'ProductController@show')->name('products.show');
Route::get('/search','ProductController@search')->name('products.search');

//authers pages route
Route::get('/restaurant/about', 'Controller@about')->name('about');
Route::get('/restaurant/contact', 'Controller@contact')->name('contact');
Route::get('/restaurant/blog/blog', 'Controller@blog')->name('blog');
Route::get('/restaurant/blog/single-blog', 'Controller@single_blog')->name('single-blog');

//cart route
Route::get('/basket', 'CartController@index')->name('cart.index');
Route::post('/basket/add', 'CartController@store')->name('cart.show');
Route::patch('/basket/{rowId}', 'CartController@update')->name('cart.update');
Route::delete('/basket/{rowId}', 'CartController@destroy')->name('cart.destroy');




//checkout route
Route::get('/payment', 'CheckoutController@index')->name('checkout.index');
Route::post('/payment', 'CheckoutController@store')->name('checkout.store');
Route::get('/thank you', 'CheckoutController@thankyou')->name('checkout.thankyou');


//Contact route
Route::post('/restaurant/message_contact', 'ContactController@sendMessage')->name('MessageSended');

//admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
