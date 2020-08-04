<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //
        $sub_categories = SubCategory ::latest()->get();
        $categories = Category ::latest()->get();

        return view('pages.sub_categories', compact('sub_categories', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store(Request $request)
    {
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('subcategory', $name);
        $path = 'storage/' .$path;

        SubCategory ::create([
            'name' => $request->name,
            'image' => $path,
            'category_id' => $request->category_id
        ]);

        return redirect(route('sub_categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCategory $category
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(SubCategory $sub_category)
    {
        //
        unlink(public_path($sub_category->image));

        $sub_category->delete();

        return redirect()->back();
    }
}
