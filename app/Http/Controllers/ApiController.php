<?php

namespace App\Http\Controllers;

use App\AmarCare;
use App\Brand;
use App\Category;
use App\Customer;
use App\Deal;
use App\FeaturedProduct;
use App\Product;
use App\Sale;
use App\Size;
use App\Slider;
use App\SubCategory;
use App\Tag;
use App\Wishlist;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\JWTAuth;

class ApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:customer-api')->only([
            'wishlist', 'my_account', 'update_account', 'update_address', 'logout',
            'add_wishlist', 'remove_wishlist'
        ]);
    }


    public function products()
    {
        return Product::with(['category', 'sale', 'specifications', 'colors', 'sizes', 'tags', 'comments']);
    }
    //
    public function sliders()
    {
        $sliders = Slider::latest()->get();

        if ($sliders) {
            return response()->json($sliders, 200);
        } else {
            return response()->json('Sliders not found!', 404);
        }


    }

    public function shops()
    {
        $shops = Category::with('sub_categories')->get();

        if ($shops) {
            return response()->json($shops, 200);
        } else {
            return response()->json('Shops not found!', 404);
        }


    }

    public function new_arrivals()
    {

        $newProducts = $this->products()->whereDate('created_at', Carbon::now()->subDays(7))->get();

        if ($newProducts->count() <= 0) {
            $newProducts = $this->products()->latest()->limit(20)->get();
        }

        foreach($newProducts as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($newProducts) {
            return response()->json($newProducts, 200);
        } else {
            return response()->json('New products not found!', 404);
        }


    }

    public function sub_shop_products($id)
    {
        $products = $this->products()->where('sub_category_id', $id)
            ->with(['category', 'sale', 'specifications', 'colors', 'sizes', 'tags', 'comments'])
            ->get();

        foreach($products as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($products) {
            return response()->json($products, 200);
        } else {
            return response()->json('Products not found!', 404);
        }

    }

    public function featured_products()
    {
        $featuredCatIds = FeaturedProduct::all()->pluck('category_id')->unique();
        $featuredProdIds = FeaturedProduct::all()->pluck('product_id');
        $featuredCategories = Category::whereIn('id', $featuredCatIds)->get();
        $featuredProducts = $this->products()->whereIn('id', $featuredProdIds);

        $data = [];

        foreach ($featuredCategories as $i => $fc) {
            $data[$i]['categoryName'] = $fc->name;
            $data[$i]['Products'] = $fc->products()->whereIn('id', $featuredProdIds)
                ->with(['category', 'sale', 'specifications', 'colors', 'sizes', 'tags', 'comments'])
                ->get();
        }

        foreach ($data as $d) {
            foreach ($d['Products'] as $p) {
                $p->description = strip_tags($p->description);
                $p->short_description = strip_tags($p->short_description);
            }
        }

        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json('Featured products not found!', 404);
        }

    }

    public function search_products($query)
    {

        $products = $this->products()->where('name', 'LIKE', '%'.$query.'%')->get();

        foreach($products as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($products) {
            return response()->json($products, 200);
        } else {
            return response()->json('Search products not found!', 404);
        }
    }

    public function tag_search($tagName)
    {
        $tag = Tag::where('name', $tagName)->first();

        $products = $tag->products()->with(['category', 'sale', 'specifications', 'colors', 'sizes', 'tags', 'comments'])->get();

        foreach($products as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($products) {
            return response()->json($products, 200);
        } else {
            return response()->json('Tag products not found!', 404);
        }

    }

    public function wishlist()
    {
        $customer = auth('customer-api')->user();

        $prodIds = $customer->wishlist()->pluck('product_id');

        $wishlist = $this->products()->whereIn('id', $prodIds)->get();

        if ($wishlist) {
            return response()->json($wishlist, 200);
        } else {
            return response()->json('Wishlist products not found!', 404);
        }

    }

    public function amarcare()
    {
        $vlogs = Category::with('vlogs')->get();

        foreach ($vlogs as $vlog) {
            foreach ($vlog->vlogs as $v) {
                $v->description = strip_tags($v->description);
            }
        }

        if ($vlogs) {
            return response()->json($vlogs, 200);
        } else {
            return response()->json('Vlogs not found!', 404);
        }


    }

    public function filter_product(Request $request)
    {
        $brand = $request->brand_id;
        $size = $request->size_id;

        $minPrice = $request->min_amount;
        $maxPrice = $request->max_amount;

        $data = $this->products()->whereBetween('price', [$minPrice, $maxPrice]);

        if ($brand != -1) {
            $prodIds = Brand::find($brand)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        if ($size != -1) {
            $prodIds = Size::find($size)->products()->pluck('id');
            $data->whereIn('id', $prodIds);
        }

        $data = $data->get();

        foreach($data as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json('Filter products not found!', 404);
        }

    }

    public function sale_products()
    {
        $saleProdIds = Sale::latest()->where('expire', '>', now())->pluck('product_id');

        $saleProducts = $this->products()->whereIn('id', $saleProdIds)->get();

        foreach($saleProducts as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($saleProducts) {
            return response()->json($saleProducts, 200);
        } else {
            return response()->json('Sale products not found!', 404);
        }
    }

    public function deal_products()
    {
        $dealProdIds = Deal::latest()->where('expire', '>', now())->pluck('product_id');

        $dealProducts = $this->products()->whereIn('id', $dealProdIds)->get();

        foreach($dealProducts as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($dealProducts) {
            return response()->json($dealProducts, 200);
        } else {
            return response()->json('Deal products not found!', 404);
        }
    }

    public function my_account(Request $request)
    {
        $customer = auth('customer-api')->user();


        foreach($customer->orders as $order){
            $order->notes = strip_tags($order->notes);
        }

        if ($customer) {
            return response()->json($customer, 200);
        } else {
            return response()->json('Customer not found!', 404);
        }

    }

    public function filter_attributes()
    {
        $brands = Brand::all();
        $sizes = Size::all();
        $tags = Tag::all();

        return response()->json([
            'brands' => $brands,
            'sizes' => $sizes,
            'tags' => $tags
        ], 200);
    }

    public function random_products()
    {
        $products = $this->products()->limit(6)->get();

        foreach($products as $p){
            $p->description = strip_tags($p->description);
            $p->short_description = strip_tags($p->short_description);
        }

        if ($products) {
            return response()->json($products, 200);
        } else {
            return response()->json('Random products not found!', 404);
        }

    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => 'Login failed'], 404);
        }

        try {
            if (! $token = auth('customer-api')->attempt($request->all())) {
                return response()->json(['msg' => 'Credentials not found!'], 404);
            }
        } catch (JWTException $e) {
            return response()->json(['msg' => 'Token creation failed!'], 404);
        }

        return response()->json([
            'customer' => \auth('customer-api')->user(),
            'token' => $token,
            'expire' => auth('customer-api')->factory()->getTTL() * 60
        ], 200);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required|unique:customers',
            'password' => 'required|confirmed|min:6',
            'name' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => 'Registration failed'], 404);
        }

        $data = $request->validate([
            'email' => 'email|required|unique:customers',
            'password' => 'required|confirmed|min:6',
            'name' => 'required',
            'phone_number' => 'required',
        ]);

        $customer = Customer::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
        ]);

        if ($customer) {
            return response()->json(['msg' => 'Registration successful'], 200);
        } else {
            return response()->json('Registration failed', 404);
        }

    }

    public function logout()
    {
        auth('customer-api')->logout();

        return response()->json(['msg' => 'Logged out successfully'], 200);
    }

    public function update_account(Request $request)
    {

        $customer = auth('customer-api')->user();

        $customer->email = '';
        $customer->save();

        $validator = Validator::make($request->all(), [
            'email' => 'email|required|unique:customers',
            'password' => 'required|confirmed|min:6',
            'name' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => 'Update failed'], 404);
        }

        $receive_offer = $request->receive_offer ? true : false;
        $newsletter = $request->newsletter ? true : false;

        $customer->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => bcrypt($request->password),
            'birthdate' => $request->birthdate,
            'receive_offer' => $receive_offer,
            'newsletter' => $newsletter,

        ]);

        if ($customer) {
            return response()->json([
                'customer' => $customer,
                'msg'=>'Account updated successfully'
            ], 200);
        } else {
            return response()->json('Update failed', 404);
        }


    }

    public function update_address(Request $request)
    {

        $customer = auth('customer-api')->user();

        $billing_address = $request->street . '+';
        $billing_address .= $request->city . '+';
        $billing_address .= $request->district . '+';
        $billing_address .= ucfirst($request->division);

        $customer->update([
            'billing_address' => $billing_address,
        ]);

        if ($customer) {
            return response()->json([
                'customer' => $customer,
                'msg'=>'Account updated successfully'
            ], 200);
        } else {
            return response()->json('Update failed', 404);
        }
    }

    public function add_wishlist(Request $request)
    {
        $customer = auth('customer-api')->user();

        $wishlist = Wishlist::create([
            'customer_id' => $customer->id,
            'product_id' => $request->productId
        ]);

        $wishlistCount = Wishlist::all()->count();

        if ($wishlist) {
            return response()->json([
                'msg' => 'Product added to wishlist',
                'wishlistCount' => $wishlistCount
            ], 200);
        } else {
            return response()->json('Add to wishlist failed', 404);
        }

    }

    public function remove_wishlist($wishId)
    {
        $wishlist = Wishlist::findOrFail($wishId)->delete();

        $wishlistCount = Wishlist::all()->count();

        if ($wishlist) {
            return response()->json([
                'msg' => 'Product removed from wishlist',
                'wishlistCount' => $wishlistCount
            ], 200);
        } else {
            return response()->json('Remove from wishlist failed', 404);
        }

    }

}
