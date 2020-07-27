<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    //
    public function add_wishlist(Request $request)
    {
        Wishlist::create([
           'customer_id' => Auth::guard('customer')->id(),
           'product_id' => $request->productId
        ]);

        return Wishlist::all()->count();
    }

    public function remove_wishlist($wishId)
    {
        Wishlist::findOrFail($wishId)->delete();

        return redirect(route('wishlist'));
    }
}
