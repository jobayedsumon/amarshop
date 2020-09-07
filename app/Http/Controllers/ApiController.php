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
use Carbon\Carbon;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function products()
    {
        return Product::with(['category', 'sale', 'specifications', 'colors', 'sizes', 'tags', 'comments']);
    }
    //
    public function sliders()
    {
        $sliders = Slider::latest()->get();

        return response()->json($sliders, 200);
    }

    public function shops()
    {
        $shops = Category::with('sub_categories')->get();

        return response()->json($shops, 200);
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

        return response()->json($newProducts, 200);
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

        return response()->json($products, 200);
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

        return response()->json($data, 200);

    }

    public function search_products($query)
    {

        $products = $this->products()->where('name', 'LIKE', '%'.$query.'%')->get();

        return response()->json($products, 200);
    }

    public function tag_search($tagName)
    {
        $tag = Tag::where('name', $tagName)->first();

        $products = $tag->products()->with(['category', 'sale', 'specifications', 'colors', 'sizes', 'tags', 'comments'])->get();

        return response()->json($products, 200);
    }

    public function wishlist($id)
    {
        $customer = Customer::findOrFail($id);
        $prodIds = $customer->wishlist()->pluck('product_id');

        $wishlist = $this->products()->whereIn('id', $prodIds)->get();

        return response()->json($wishlist, 200);

    }

    public function amarcare()
    {
        $vlogs = AmarCare::all();
        $data = [];

        foreach ($vlogs as $i => $vlog) {
            $data[$i]['categoryName'] = $vlog->category->name;
            $data[$i]['videos'] = $vlog->video;
        }

        return response()->json($data, 200);
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

        return response()->json($data, 200);


    }

    public function sale_products()
    {
        $saleProdIds = Sale::latest()->where('expire', '>', now())->pluck('product_id');

        $saleProducts = $this->products()->whereIn('id', $saleProdIds)->get();

        return response()->json($saleProducts, 200);
    }

    public function deal_products()
    {
        $dealProdIds = Deal::latest()->where('expire', '>', now())->pluck('product_id');

        $dealProducts = $this->products()->whereIn('id', $dealProdIds)->get();

        return response()->json($dealProducts, 200);
    }

    public function my_account(Request $request)
    {
        $customer = Customer::with('orders')->findOrFail($request->id);

        foreach($customer->orders as $order){
            $order->notes = strip_tags($order->notes);
        }

        return response()->json($customer, 200);

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

        return response()->json($products, 200);
    }
}
