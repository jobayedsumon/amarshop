@extends('frontend.layout.master')

@section('header')

    @include('frontend.layout.header')

@endsection

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>Login</li>

                        </ul>

                    </div>

                </div>

                <div class="col-md-8">
                    @if(session('message'))
                        <span class="alert {{ session('alert-class') }}">{{ session('message') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form action="customer-login" method="POST">
                            @csrf
                            <p>
                                <label>Email <span>*</span></label>
                                <input type="email" name="email">
                             </p>
                             <p>
                                <label>Password <span>*</span></label>
                                <input type="password" name="password">
                             </p>
                            <div class="login_submit">
                               <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>

                            </div>

                        </form>
                     </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">

                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="/customer-register" method="POST">
                            @csrf
                            <p>
                                <label>Email address  <span>*</span></label>
                                <input type="email" name="email">
                             </p>
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                             <p>
                                <label>Password <span>*</span></label>
                                <input type="password" name="password">
                             </p>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <p>
                                <label>Confirm Password <span>*</span></label>
                                <input type="password" name="password_confirmation">
                            </p>
                            @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>

    <!-- customer login end -->

   <!--brand area start-->
    <div class="brand_area brand_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel ">
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->

@endsection


@section('shipping')

    @include('frontend.layout.shipping')

@endsection

@section('modal')

    @include('frontend.layout.modal')

@endsection

@section('footer')

    @include('frontend.layout.footer')

@endsection
