<?php

namespace App\Http\Controllers;

use App\AmarCare;
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
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
    //
    public function add_wishlist(Request $request)
    {
        Wishlist::firstOrCreate([
           'customer_id' => Auth::guard('customer')->id(),
           'product_id' => $request->productId
        ]);

        return Wishlist::all()->count();
    }

    public function add_compare(Request $request)
    {

        $compare = session()->get('compare');

        if (!$compare || count($compare) < 3) {

            $compare[] = $request->productId;

            session()->put('compare', $compare);

            $compare = session()->get('compare');
        }

        return count($compare);

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
        $discount = $product->sale ? $product->sale->percentage : $product->discount;

        $product_price = $product->price - round($product->price * $discount / 100);


        $product_price *= $request->count;

        $cart_sub_total += $product_price;
        session()->put('cart_sub_total', $cart_sub_total);
        session()->put('cart_items_count', count($cart));

        $cart_items_quantity = 0;

        foreach ($cart as $data) {
            $cart_items_quantity += $data['count'];
        }

        session()->put('cart_items_quantity', $cart_items_quantity);
        session()->put('cart', $cart);


        return response()->json([
            'cart_items_quantity' => $cart_items_quantity,
            'cart_sub_total' => $cart_sub_total,
        ]);
    }

    public function update_cart(Request $request)
    {

        $cart = session()->pull('cart');
        $cart_sub_total = 0;
        $newCart = [];

        if ($cart) {

            foreach ($cart as $i => $data) {

                $product = Product::findOrFail($data['product_id']);

                if ($request->count[$i] > $product->quantity) {
                    $data['count'] = $product->quantity;
                    session()->put('msg', 'Product quantity exceeded and set to maximum');
                } else {
                    $data['count'] = $request->count[$i];
                }


                $newCart[] = $data;

                $discount = $product->sale ? $product->sale->percenatge : $product->discount;
                $product_price = $discount ? $product->price - round($product->price * $discount / 100) : $product->price;

                $product_price *= $data['count'];

                $cart_sub_total += $product_price;
            }
        }

        session()->forget('cart');
        session()->put('cart', $newCart);

        session()->put('cart_sub_total', $cart_sub_total);
        session()->put('cart_items_count', count($newCart));

        $cart_items_quantity = 0;

        foreach ($newCart as $data) {
            $cart_items_quantity += $data['count'];
        }

        session()->put('cart_items_quantity', $cart_items_quantity);



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

        $cart_items_quantity = 0;

        foreach ($cart as $data) {
            $cart_items_quantity += $data['count'];
        }

        session()->put('cart_items_quantity', $cart_items_quantity);

        session()->put('cart', $cart);

        return redirect('/cart');
    }

    public function loadModal($id)
    {
        $product = Product::findOrFail($id);

        return view('frontend.layout.modal_body',['data'=>$product]);
    }

    public function loadModalReview($id)
    {
        $product = Product::findOrFail($id);

        return view('frontend.layout.modal_review',['data'=>$product]);
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
        $brand = $request->brand_id;
        $size = $request->size_id;

        $minPrice = $request->min_amount;
        $maxPrice = $request->max_amount;

        $data = Product::whereBetween('price', [$minPrice, $maxPrice]);



        if ($brand != -1) {
            $prodIds = Brand::find($brand)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        if ($size != -1) {
            $prodIds = Size::find($size)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        $data = $data->get();

        return view('frontend.choose-product', compact('data'))->render();


    }

    public function filter_product_shop(Request $request)
    {
        $brand = $request->brand_id;
        $size = $request->size_id;

        $minPrice = $request->min_amount;
        $maxPrice = $request->max_amount;

        $data = Product::whereBetween('price', [$minPrice, $maxPrice]);

        $data->where('category_id', $request->category_id);


        if ($brand != -1) {
            $prodIds = Brand::find($brand)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        if ($size != -1) {
            $prodIds = Size::find($size)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        $data = $data->get();


        return view('frontend.choose-product', compact('data'))->render();

    }

    public function filter_product_subshop(Request $request)
    {
        $brand = $request->brand_id;
        $size = $request->size_id;

        $minPrice = $request->min_amount;
        $maxPrice = $request->max_amount;

        $data = Product::whereBetween('price', [$minPrice, $maxPrice]);

        $data->where('sub_category_id', $request->sub_category_id);


        if ($brand != -1) {
            $prodIds = Brand::find($brand)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        if ($size != -1) {

            $prodIds = Size::find($size)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        $data = $data->get();


        return view('frontend.choose-product', compact('data'))->render();

    }

    public function rate_product(Request $request)
    {

        $product = Product::findOrFail($request->product_id);
        $star = $request->star;
        $comment = $request->comment;
        $customer = \auth('customer')->user();

        $customer->comment($product, $comment, $star);

        return redirect()->back();

    }

    public function comment_vlog(Request $request)
    {

        $vlog = AmarCare::findOrFail($request->vlog_id);
        $comment = $request->comment;
        $customer = \auth('customer')->user();



        $customer->comment($vlog, $comment, $rate=0);

        return redirect()->back();

    }

    public function product_price(Request $request)
    {
        $data = DB::table('product_size')
            ->where('product_id', $request->product_id)
            ->where('size_id', $request->size_id)
            ->first();

        $product = Product::with('sale')->findOrFail($request->product_id);

        return response()->json([
            'data' => $data,
            'product' => $product
        ]);

    }

}
