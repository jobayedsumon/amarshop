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
        $topCategory = Category::withCount('products')->latest('products_count')->first();

        $newProducts = Product::latest()->get();
        $allSale = Sale::all();
        $brands = Brand::all();

        return view('frontend.index', compact('sliders', 'categories',
            'topCategory', 'newProducts', 'featuredCategories', 'featuredProdIds', 'allSale'));
    }

    public function shop($shopId)
    {
        $shop = Category::findOrFail($shopId);
        $categories = Category::all();


        return view('frontend.shop', compact('categories', 'shop'));
    }

    public function subshop($shopId, $subId)
    {
        $shop = Category::findOrFail($shopId);
        $subshop = SubCategory::findOrFail($subId);
        $categories = Category::all();


        return view('frontend.subshop', compact('subshop', 'shop'));
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



        $cart = Session::get('cart');

//        $cart[] = array(
//            'id' => 2,
//            'count' => 4,
//            'name' =>'item 2'
//        );

        Session::put('cart', $cart);

        $cart = Session::get('cart');

        $brands = Brand::all();

        return view('frontend.cart', compact('cart', 'brands'));
    }

    public function checkout()
    {
        $brands = Brand::all();

        return view('frontend.checkout', compact('brands'));
    }

    public function my_account()
    {
        $categories = Category::all();
        return view('frontend.my-account', compact('categories'));
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
