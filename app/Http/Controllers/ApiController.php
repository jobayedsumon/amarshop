<?php

namespace App\Http\Controllers;

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
}
