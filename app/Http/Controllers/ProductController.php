<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $sub_categories = SubCategory::all();

        return view('products.add-product', compact('categories', 'sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image_primary = $request->file('image_primary')->getClientOriginalName();
        $image_primary = $request->file('image_primary')->storeAs('product', $image_primary);
        $image_primary = 'storage/' .$image_primary;

        $image_secondary = $request->file('image_secondary')->getClientOriginalName();
        $image_secondary = $request->file('image_secondary')->storeAs('product', $image_secondary);
        $image_secondary = 'storage/' .$image_secondary;

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image_primary' => $image_primary,
            'image_secondary' => $image_secondary,
        ]);

        return redirect(route('products.index'));
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
        $productId = $id;
        return view('products.show', compact('productId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        $sub_categories = SubCategory::all();

        return view('products.edit-product', compact('categories', 'sub_categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        if ($request->file('image_primary')) {
            $image_primary = $request->file('image_primary')->getClientOriginalName();
            $image_primary = $request->file('image_primary')->storeAs('product', $image_primary);
            $image_primary = 'storage/' .$image_primary;

            unlink(asset($product->image_primary));
        } else {
            $image_primary = $product->image_primary;
        }

        if ($request->file('image_secondary')) {
            $image_secondary = $request->file('image_secondary')->getClientOriginalName();
            $image_secondary = $request->file('image_secondary')->storeAs('product', $image_secondary);
            $image_secondary = 'storage/' .$image_secondary;

            unlink(aset($product->image_secondary));
        } else {
            $image_secondary = $product->image_secondary;
        }



        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'image_primary' => $image_primary,
            'image_secondary' => $image_secondary,
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //

        File::delete(asset($product->image_primary));
        File::delete(asset($product->image_secondary));

        $product->delete();

        return redirect(route('products.index'));
    }
}
