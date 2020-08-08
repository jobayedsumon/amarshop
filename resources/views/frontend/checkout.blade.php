@extends('frontend.layout.master')

@section('header')

    @include('frontend.layout.header')

@endsection
    <!--header area end-->

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="Checkout_section">
       <div class="container">

           <form action="{{ route('payment') }}" method="POST">
               @csrf

            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">

                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-12 mb-20">
                                    <label>Name <span>*</span></label>
                                    <input type="text" name="name">
                                </div>
                                <div class="col-12 mb-20">
                                    <label for="division">Division <span>*</span></label>
                                    <select class="select_option" name="division" id="division">
                                        <option value="dhaka">Dhaka</option>
                                        <option value="chittagong">Chittagong</option>
                                        <option value="barisal">Barisal</option>
                                        <option value="khulna">Khulna</option>
                                        <option value="mymensingh">Mymensingh</option>
                                        <option value="sylhet">Sylhet</option>
                                        <option value="rangpur">Rangpur</option>

                                    </select>
                                </div>

                                <div class="col-12 mb-20">
                                    <label>District <span>*</span></label>
                                    <input type="text" name="district">
                                </div>

                                <div class="col-12 mb-20">
                                    <label>Town / City <span>*</span></label>
                                    <input type="text" name="city">
                                </div>

                                <div class="col-12 mb-20">
                                    <label>Street address  <span>*</span></label>
                                    <input name="street" placeholder="House number and street name" type="text">
                                </div>

                                <div class="col-lg-6 mb-20">
                                    <label>Phone<span>*</span></label>
                                    <input name="phone" type="text">

                                </div>
                                 <div class="col-lg-6 mb-20">
                                    <label> Email Address   <span>*</span></label>
                                      <input name="email" type="email">

                                </div>
                                <div class="col-12 mb-20">
                                    <input id="account" type="checkbox" data-target="createp_account" />
                                    <label for="account" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne">Create an account?</label>

                                    <div id="collapseOne" class="collapse one" data-parent="#accordion">
                                        <div class="card-body1">
                                           <label> Account password   <span>*</span></label>
                                            <input name="password" placeholder="password" type="password">
                                            <label> Confirm password   <span>*</span></label>
                                            <input name="confirm_password" placeholder="confirm password" type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-20">
                                    <input id="address" type="checkbox" data-target="createp_account" />
                                    <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapsetwo" aria-controls="collapseOne">Ship to a different address?</label>

                                    <div id="collapsetwo" class="collapse one" data-parent="#accordion">
                                       <div class="row">
                                           <div class="col-12 mb-20">
                                               <label>Name <span>*</span></label>
                                               <input type="text">
                                           </div>
                                           <div class="col-12 mb-20">
                                               <label for="division">Division <span>*</span></label>
                                               <select class="select_option" name="division" id="division">
                                                   <option value="dhaka">Dhaka</option>
                                                   <option value="chittagong">Chittagong</option>
                                                   <option value="barisal">Barisal</option>
                                                   <option value="khulna">Khulna</option>
                                                   <option value="mymensingh">Mymensingh</option>
                                                   <option value="sylhet">Sylhet</option>
                                                   <option value="rangpur">Rangpur</option>

                                               </select>
                                           </div>

                                           <div class="col-12 mb-20">
                                               <label>District <span>*</span></label>
                                               <input  type="text">
                                           </div>

                                           <div class="col-12 mb-20">
                                               <label>Town / City <span>*</span></label>
                                               <input  type="text">
                                           </div>

                                           <div class="col-12 mb-20">
                                               <label>Street address  <span>*</span></label>
                                               <input placeholder="House number and street name" type="text">
                                           </div>

                                           <div class="col-lg-6 mb-20">
                                               <label>Phone<span>*</span></label>
                                               <input type="text">

                                           </div>
                                           <div class="col-lg-6 mb-20">
                                               <label> Email Address   <span>*</span></label>
                                               <input type="email">

                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="order-notes">
                                         <label for="order_note">Order Notes</label>
                                        <textarea id="order_note" name="notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-6 col-md-6">

                            <h3>Your order</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($cart ?? [] as $data)
                                        @php
                                            $product = \App\Product::findOrFail($data['product_id']);
                                            $cart_price = $product->discount ? $product->price - round($product->price * $product->discount / 100) : $product->price
                                        @endphp
                                        <tr>
                                            <td> {{ $product->name }} <strong> × {{ $data['count'] }}</strong></td>
                                            <td> BDT {{ $cart_price * $data['count'] }}</td>
                                        </tr>
                                    @empty
                                    @endforelse

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>BDT {{ $sub_total = session()->get('cart_sub_total') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td><strong>BDT 100</strong></td>
                                        </tr>
                                        @if(session()->has('couponCart'))
                                            @php $couponCart = session()->get('couponCart'); @endphp
                                            <tr>
                                                <th>Discount</th>
                                                <td><strong>BDT {{ $discount = round(($sub_total + 100) * $couponCart['value']) / 100 }}</strong></td>
                                            </tr>

                                        @endif
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>BDT {{ session()->get('cart_total') }}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="payment_method">
                               <div class="panel-default">
                                    <input id="cod" name="check_method" value="cod" type="radio" data-target="createp_account" />
                                    <label for="cod" data-toggle="collapse" data-target="#method" aria-controls="method">Cash on delivery</label>
                                </div>
                               <div class="panel-default flex items-center">
                                    <input id="bkash" name="check_method" value="bkash" type="radio" data-target="createp_account" />
                                    <label for="bkash" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult"> <img src="{{ asset('frontend/img/logo/bkash.png') }}" alt=""></label>

                                </div>
                                <div class="panel-default flex items-center">
                                    <input id="card" name="check_method" value="card" type="radio" data-target="createp_account" />
                                    <label for="card" data-toggle="collapse" data-target="#collapsedefult" aria-controls="collapsedefult"> <img src="{{ asset('frontend/img/logo/card.png') }}" alt=""></label>

                                </div>
                                <div class="order_button m-2">
                                    <button type="submit">Confirm Order</button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
           </form>
        </div>
    </div>
    <!--Checkout page section end-->

    <!--brand area start-->
    @include('frontend.layout.brand')
    <!--brand area end-->

@endsection


@section('footer')

    @include('frontend.layout.footer')

@endsection
