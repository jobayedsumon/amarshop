<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index() {
        $orders = Order::latest()->get();
        return view('pages.orders', compact('orders'));
    }
}
