<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slider;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function sliders()
    {
        $sliders = Slider::latest()->get();

        return response()->json($sliders, 200);
    }

    public function shops()
    {
        $shops = Category::with('sub_categories')->with('products')->get();

        return response()->json($shops, 200);
    }
}
