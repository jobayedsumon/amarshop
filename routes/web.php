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

Route::get('/log', function () {
   $activities = \Spatie\Activitylog\Models\Activity::all();
   return view('log', compact('activities'));
})->middleware('can:access-manager-data');

/*********************
 *
 *
 * FRONTEND ROUTES
 */
/*********************
 *
 */

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/shop/{shopId}', 'FrontendController@shop')->name('shop');
Route::get('/shop/{shopId}/subshop/{subId}', 'FrontendController@subshop')->name('subshop');
Route::get('/shop/{shopId}/subshop/{subId}/product/{productId}', 'FrontendController@product_details')->name('product-details');
Route::get('/wishlist', 'FrontendController@wishlist')->name('wishlist');
Route::get('/cart', 'FrontendController@cart')->name('cart');
Route::get('/checkout', 'FrontendController@checkout')->name('checkout');
Route::get('/my-account', 'FrontendController@my_account')->name('my-account')->middleware('auth:customer');
Route::get('/customer-login', 'CustomerController@customer_login')->name('customer-login');
Route::post('/customer-login', 'CustomerController@login_customer');
Route::post('/customer-register', 'CustomerController@register_customer');
Route::get('/contact', 'FrontendController@contact');
Route::get('/about', 'FrontendController@about');

//AJAX CALL
Route::post('/wishlist/add', 'AjaxController@add_wishlist');
Route::get('/wishlist/remove/{wishId}', 'AjaxController@remove_wishlist');
Route::post('/cart/add', 'AjaxController@add_cart');
Route::post('/cart/update', 'AjaxController@update_cart');
Route::get('/cart/remove/{cartId}', 'AjaxController@remove_cart');

Route::get('dynamicModal/{id}',[
    'as'=>'dynamicModal',
    'uses'=> 'AjaxController@loadModal'
]);




/**************
 *
 * BACKEND ROUTES
 *
 *
 ***************/



Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::prefix('admin')->group(function () {



            Route::resource('users', 'UserController', ['except' => ['show']]);
            Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
            Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
            Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
            Route::get('activities/{id}', 'AdminController@destroy_activity')->middleware('can:access-manager-data');



            Route::resource('sale', 'SaleController', ['except' => ['show']]);



            Route::get('slider', 'SlideController@index')->name('slider');
            Route::post('slider', 'SlideController@store')->name('slider');
            Route::get('slider/{id}/delete', ['as' => 'slider.delete', 'uses' => 'SlideController@destroy']);
            Route::resource('products', 'ProductController');
            Route::resource('categories', 'CategoryController', ['except' => ['show']]);
            Route::resource('sub_categories', 'SubCategoryController', ['except' => ['show']]);


            Route::get('customers', function () {
                $customers = \App\Customer::all();
                return view('pages.customers', compact('customers'));
            })->name('customers');


    });

});

Route::get('logout_user', 'Auth\LoginController@logout_user')->name('logout_user');
Route::get('logout_customer', 'CustomerController@logout_customer')->name('logout_customer');

