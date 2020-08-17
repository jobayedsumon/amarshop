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

    public function details($orderId)
    {
        $order = Order::findOrFail($orderId);

        return view('pages.order-details', compact('order'));
    }
}
