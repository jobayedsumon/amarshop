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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/shop', 'FrontendController@shop')->name('shop');
Route::get('/product-details', 'FrontendController@product_details')->name('product-details');
Route::get('/wishlist', 'FrontendController@wishlist')->name('wishlist');
Route::get('/cart', 'FrontendController@cart')->name('cart');
Route::get('/checkout', 'FrontendController@checkout')->name('checkout');
Route::get('/my-account', 'FrontendController@my_account')->name('my-account');
Route::get('/customer-login', 'FrontendController@customer_login')->name('customer-login');
Route::get('/contact', 'FrontendController@contact');
Route::get('/about', 'FrontendController@about');



Auth::routes(['register' => false]);

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

