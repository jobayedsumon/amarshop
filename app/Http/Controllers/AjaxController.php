<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Color;
use App\Coupon;
use App\FeaturedProduct;
use App\Product;
use App\Sale;
use App\Size;
use App\Slider;
use App\Wishlist;
use Carbon\Carbon;
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

    public function apply_coupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon)->first();

        if (!$coupon) {
            return redirect()->back()->with('message', 'Invalid Coupon');
        }
        else {
            if ($coupon->expire <= Carbon::now()) {
                return redirect()->back()->with('message', 'Coupon Expired!');
            } else {
                $couponCart = [
                  'code' => $coupon->code,
                  'value' => $coupon->value,
                ];
                session()->put('couponCart', $couponCart);
                return redirect(route('cart'));
            }
        }
    }

    public function remove_coupon()
    {
        session()->forget('couponCart');

        return redirect(route('cart'));
    }

    public function filter_product(Request $request)
    {
        $color = $request->color;
        $size = $request->size;

        $price = $request->price;
        $price = explode(' - ', $price);
        $minPrice = (int) $price[0];
        $maxPrice = (int) $price[1];

        $data = Product::whereBetween('price', [$minPrice, $maxPrice]);

        if ($color) {
            $prodIds = Color::find($color)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        if ($size) {
            $prodIds = Size::find($size)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        $data = $data->get();

        $featuredCatIds = FeaturedProduct::all()->pluck('category_id')->unique();
        $featuredProdIds = FeaturedProduct::all()->pluck('product_id');
        $featuredCategories = Category::whereIn('id', $featuredCatIds)->get();


        $sliders = Slider::all();
        $categories = Category::all();

        $newProducts = Product::latest()->get();
        $allSale = Sale::all();
        $brands = Brand::all();

        return view('frontend.index', compact('sliders', 'categories',
             'newProducts', 'featuredCategories', 'featuredProdIds', 'allSale', 'data'));

    }

    public function filter_product_shop(Request $request)
    {
        $color = $request->color;
        $size = $request->size;

        $price = $request->price;
        $price = explode(' - ', $price);
        $minPrice = (int) $price[0];
        $maxPrice = (int) $price[1];

        $data = Product::where('category_id', $request->category_id);

        $data->whereBetween('price', [$minPrice, $maxPrice]);

        if ($color) {
            $prodIds = Color::find($color)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        if ($size) {
            $prodIds = Size::find($size)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        $data = $data->paginate(9);
        $shop = Category::findOrFail($request->category_id);
        $categories = Category::all();

        return view('frontend.shop', compact('categories', 'shop', 'data'));

    }

    public function filter_product_subshop(Request $request)
    {
        $color = $request->color;
        $size = $request->size;

        $price = $request->price;
        $price = explode(' - ', $price);
        $minPrice = (int) $price[0];
        $maxPrice = (int) $price[1];

        $data = Product::where('sub_category_id', $request->sub_category_id);

        $data->whereBetween('price', [$minPrice, $maxPrice]);

        if ($color) {
            $prodIds = Color::find($color)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        if ($size) {
            $prodIds = Size::find($size)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        $data = $data->paginate(9);
        $subshop = Category::findOrFail($request->sub_category_id);
        $categories = Category::all();

        return view('frontend.subshop', compact('categories', 'subshop', 'data'));

    }

}
