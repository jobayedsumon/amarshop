<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/pay', 'SslCommerzPaymentController@index')->name('payment');

Route::prefix('v1')->group(function () {

    Route::get('sliders', 'ApiController@sliders');

    Route::get('shops', 'ApiController@shops');

    Route::get('new-arrivals', 'ApiController@new_arrivals');

    Route::get('subshop/{id}/products', 'ApiController@sub_shop_products');

    Route::get('featured-products', 'ApiController@featured_products');

    Route::get('search/{query}', 'ApiController@search_products');

    Route::get('tag/{tagName}', 'ApiController@tag_search');

    Route::get('customer/{id}/wishlist', 'ApiController@wishlist');

    Route::get('amarcare', 'ApiController@amarcare');

    Route::post('filter-product', 'ApiController@filter_product');

    Route::get('filter-product', 'ApiController@random_products');

    Route::get('sale', 'ApiController@sale_products');

    Route::get('deal', 'ApiController@deal_products');

    Route::post('my-account', 'ApiController@my_account');

    Route::get('filter-attributes', 'ApiController@filter_attributes');




});


