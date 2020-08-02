<?php

namespace App\Http\Controllers;

use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    //
    public function add_wishlist(Request $request)
    {
        Wishlist::create([
           'customer_id' => Auth::guard('customer')->id(),
           'product_id' => $request->productId
        ]);

        return Wishlist::all()->count();
    }

    public function remove_wishlist($wishId)
    {
        Wishlist::findOrFail($wishId)->delete();

        return redirect(route('wishlist'));
    }

    public function add_cart(Request $request)
    {
        $cart = session()->get('cart');
        $cart_sub_total = session()->get('cart_sub_total') ??  0;

        $cart[] = array(
            'cart_id' => uniqid(),
            'product_id' => $request->product_id,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'count' => $request->count,
        );

        $product = Product::find($request->product_id);
        $product_price = $product->discount ? $product->price - round($product->price * $product->discount / 100) : $product->price;

        $product_price *= $request->count;

        $cart_sub_total += $product_price;
        session()->put('cart_sub_total', $cart_sub_total);
        session()->put('cart_items_count', count($cart));

        session()->put('cart', $cart);

        return response()->json([
            'cart_items_count' => count($cart),
            'cart_sub_total' => $cart_sub_total,
        ]);
    }

    public function update_cart(Request $request)
    {

        $cart = session()->pull('cart');
        $cart_sub_total = 0;
        $newCart = [];

        foreach ($cart as $i => $data) {
            $data['count'] = $request->count[$i];
            $newCart[] = $data;

            $product = Product::find($data['product_id']);
            $product_price = $product->discount ? $product->price - round($product->price * $product->discount / 100) : $product->price;

            $product_price *= $data['count'];

            $cart_sub_total += $product_price;
        }

        session()->forget('cart');
        session()->put('cart', $newCart);

        session()->put('cart_sub_total', $cart_sub_total);
        session()->put('cart_items_count', count($newCart));
        

        return redirect('/cart');
    }

    public function remove_cart($cartId)
    {
        $cart = session()->get('cart');
        $cart_sub_total = session()->get('cart_sub_total') ??  0;

        foreach ($cart as $i => $data) {
            if ($data['cart_id'] == $cartId) {

                $product = Product::findOrFail($data['product_id']);
                $product_price = $product->discount ? $product->price - round($product->price * $product->discount / 100) : $product->price;
                $product_price *= $data['count'];
                $cart_sub_total -= $product_price;
                session()->put('cart_sub_total', $cart_sub_total);
                unset($cart[$i]);
            }
        }

        session()->put('cart_items_count', count($cart));

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    public function loadModal($id)
    {
        $product = Product::findOrFail($id);

        return view('frontend.layout.modal_body',['data'=>$product]);
    }

}
