<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout_customer');
    }

    public function customer_login()
    {
        $categories = Category::all();

        return view('frontend.customer-login', compact('categories'));
    }

    public function register_customer(Request $request)
    {
        $data = $request->validate([
           'email' => 'email|required|unique:customers',
           'password' => 'required|confirmed',
        ]);

        Customer::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        session()->flash('message', 'Registration completed successfully!');
        session()->flash('alert-class', 'alert-success');

        return redirect('customer-login');
    }

    public function login_customer(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('customer')->attempt($credentials, $request->remember)) {
            return redirect('my-account');
        }

        session()->flash('message', 'Credentials error!');
        session()->flash('alert-class', 'alert-danger');
        return redirect()->back();

//        $customer = Customer::where('email', $credentials['email'])->first();
//
//        if ($customer != null) {
//            if (password_verify($credentials['password'], $customer->password)) {
//                return redirect('my-account');
//            }
//        } else {
//            session()->flash('message', 'Credentials error!');
//            session()->flash('alert-class', 'alert-danger');
//            return redirect()->back();
//        }
    }

    public function logout_customer()
    {
        Auth::guard('customer')->logout();

        return redirect('/');

    }
}
