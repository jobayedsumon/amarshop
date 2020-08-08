<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\FeaturedProduct;
use App\Product;
use App\Sale;
use App\Slider;
use App\SubCategory;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $featuredCatIds = FeaturedProduct::all()->pluck('category_id')->unique();
        $featuredProdIds = FeaturedProduct::all()->pluck('product_id');
        $featuredCategories = Category::whereIn('id', $featuredCatIds)->get();


        $sliders = Slider::all();
        $categories = Category::all();

        $newProducts = Product::latest()->get();
        $allSale = Sale::all();
        $brands = Brand::all();

        return view('frontend.index', compact('sliders', 'categories',
            'newProducts', 'featuredCategories', 'featuredProdIds', 'allSale'));
    }

    public function shop($shopId)
    {
        $shop = Category::findOrFail($shopId);
        $categories = Category::all();
        $data = $shop->products()->paginate(9);


        return view('frontend.shop', compact('categories', 'data', 'shop'));
    }

    public function subshop($shopId, $subId)
    {
        $shop = Category::findOrFail($shopId);
        $subshop = SubCategory::findOrFail($subId);
        $categories = Category::all();
        $data = $subshop->products()->paginate(9);


        return view('frontend.subshop', compact('subshop', 'shop', 'data'));
    }

    public function product_details($shopId, $subId, $productId)
    {
        $category = Category::findOrFail($shopId);
        $sub_category = SubCategory::findOrFail($subId);
        $product = Product::where('category_id', $shopId)->where('sub_category_id', $subId)->findOrFail($productId);
        $related_products = Product::where('category_id', $shopId)->get();
        $brands = Brand::all();


        return view('frontend.product-details',
            compact('category', 'sub_category', 'product', 'related_products', 'brands'));
    }

    public function wishlist()
    {
        $customer = Auth::guard('customer')->user();
        $wishlist = $customer->wishlist ?? [];
        $brands = Brand::all();
        return view('frontend.wishlist', compact('brands', 'wishlist'));
    }

    public function cart()
    {


        $cart = \session()->get('cart') ?? [];

        $brands = Brand::all();


        return view('frontend.cart', compact('cart', 'brands'));
    }

    public function checkout()
    {
        $brands = Brand::all();
        $cart = \session()->get('cart');

        return view('frontend.checkout', compact('brands', 'cart'));
    }

    public function my_account()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('frontend.my-account', compact('categories', 'brands'));
    }

    public function update_account(Request $request)
    {

        $customer = \auth('customer')->user();

        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:6',
        ]);

        $receive_offer = $request->receive_offer ? true : false;
        $newsletter = $request->newsletter ? true : false;

        $customer->update([
            'name' => $request->name,
            'email' =>$data['email'],
            'phone_number' => $request->phone_number,
            'password' => bcrypt($data['password']),
            'birthdate' => $request->birthdate,
            'receive_offer' => $receive_offer,
            'newsletter' => $newsletter,

        ]);

        return redirect(route('my-account'));
    }

    public function update_address(Request $request)
    {

        $customer = \auth('customer')->user();

        $billing_address = $request->street . '+';
        $billing_address .= $request->city . '+';
        $billing_address .= $request->district . '+';
        $billing_address .= ucfirst($request->division);

        $customer->update([
            'billing_address' => $billing_address,
        ]);

        return redirect(route('my-account'));
    }

    public function contact()
    {
        $brands = Brand::all();
        return view('frontend.contact', compact('brands'));
    }

    public function about()
    {
        $brands = Brand::all();
        return view('frontend.about', compact('brands'));
    }
}
