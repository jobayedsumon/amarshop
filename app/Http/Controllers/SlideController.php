<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    //
    public function index() {
        $slideImages = Slider::all();
        return view('pages.slider', compact('slideImages'));
    }

    public function store(Request $request)
    {
        $name = $request->file('slide_image')->getClientOriginalName();
        $path = $request->file('slide_image')->storeAs('slider', $name);
        $path = 'storage/' .$path;

        Slider::create([
           'slide_title' => $request->slide_title,
           'slide_exert' => $request->slide_exert,
           'slide_image' => $path,
        ]);

        return redirect(route('slider'));

    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        unlink(public_path($slider->slide_image));

        $slider->delete();

        return redirect(route('slider'));

    }
}
