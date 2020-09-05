<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slider;
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
}
