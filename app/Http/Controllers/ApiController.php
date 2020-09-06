<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\FeaturedProduct;
use App\Product;
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

        return response()->json($newProducts, 200);
    }

    public function sub_shop_products($id)
    {
        $products = $this->products()->where('sub_category_id', $id)
            ->with(['category', 'sale', 'specifications', 'colors', 'sizes', 'tags', 'comments'])
            ->get();

        foreach($products as $p){
            $p->description = strip_tags($p->description);
        }

        return response()->json($products, 200);
    }

    public function featured_products()
    {
        $featuredCatIds = FeaturedProduct::all()->pluck('category_id')->unique();
        $featuredProdIds = FeaturedProduct::all()->pluck('product_id');
        $featuredCategories = Category::whereIn('id', $featuredCatIds)->get();
        $featuredProducts = $this->products()->whereIn('id', $featuredProdIds)->get();


        return response()->json([$featuredCategories, $featuredProducts], 200);

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

    }
}
