<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetails;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->check_method == 'cod')
        {
            $this->cod($request);
        }
    }

    public function cod($request)
    {
        if (auth('customer')->check()) {
            $order = Order::create([
                'customer_id' => auth('customer')->id()
            ]);

        } else {

            $data = $request->validate([
                'email' => 'email|required|unique:customers',
                'password' => 'required|confirmed',
            ]);

            dd($data);

            $customer = Customer::create([
                'email' => $data['email'],
                'password' => bcrypt($data['password'])
            ]);



            $order = Order::create([
                'customer_id' => $customer->id
            ]);
        }


        $count = session()->get('cart_items_count');
        $cart = session()->get('cart');
        $total = session()->get('cart_total');

        for ($i = 0; $i < $count; $i++) {
            OrderDetails::create([
                'order_id' => $order->id,
                'product_id' => $cart[$i]['product_id'],
                'count' => $cart[$i]['count'],
                'total' => $total,
                'color_id' => $cart[$i]['color_id'],
                'size_id' => $cart[$i]['size_id'],
            ]);
        }

        dd('THANK YOU!');


    }
}
