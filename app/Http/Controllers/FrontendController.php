<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function shop()
    {
        return view('frontend.shop');
    }

    public function product_details()
    {
        return view('frontend.product-details');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function my_account()
    {
        return view('frontend.my-account');
    }

    public function customer_login()
    {
        return view('frontend.customer-login');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }
}
