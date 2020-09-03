

@extends('frontend.layout.master')

@section('header')

    @include('frontend.layout.header')

@endsection

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

     <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="/cart/update" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product_name">Color</th>
                                    <th class="product_name">Size</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php

                                $sub_total = 0;

                                $shipping_cost = 0;

                            @endphp

                            @forelse($cart ?? [] as $data)

                                @php
                                    $product = \App\Product::findOrFail($data['product_id']);
                                    $color = \App\Color::find($data['color_id']);
                                    $size = \App\Size::find($data['size_id']);

                                @endphp

                                <tr>
                                   <td class="product_remove"><a href="/cart/remove/{{ $data['cart_id'] }}"><i class="fa fa-trash-o"></i></a></td>
                                    <td class="product_thumb"><a href="#"><img src="{{ asset($product->image_primary) }}" alt=""></a></td>
                                    <td class="product_name"><a href="#">{{ $product->name }}</a></td>
                                    <td class="product-price"><span style="background-color: {{ $color ? $color->name : '' }}" class="p-3"> &nbsp;</span></td>
                                    <td class="product-price">{{ $size ? $size->name : '' }}</td>
                                    @php $discount = $product->sale ? $product->sale->percentage : $product->discount; @endphp
                                    <td class="product-price">BDT {{ $cart_price = $discount ? $product->price - round($product->price * $discount / 100) : $product->price }}</td>
                                    <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" name="count[]" value="{{ $data['count'] }}" type="number"></td>
                                    <td class="product_total">BDT {!! $row_total = $cart_price * $data['count'] !!}</td>

                                    @php
                                        $sub_total += $row_total;
                                    @endphp


                                </tr>
                            @empty
                            @endforelse

                            </tbody>
                        </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                        </div>
                     </div>
                 </div>
            </form>
                 <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code left">
                                <h3 class="">Coupon</h3>
                                <div class="coupon_inner">
                                    <p>Enter your coupon code if you have one.</p>
                                    <form action="{{ route('apply-coupon') }}" method="POST">
                                        @csrf
                                    <input placeholder="Coupon Code" type="text" name="coupon">
                                    <button type="submit">Apply coupon</button>
                                    </form>
                                </div>
                            </div>

                            <span class="text-danger">{{ session('message') }}</span>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Calculations</h3>
                                <div class="coupon_inner">
                                   <div class="cart_subtotal">
                                       <p>Subtotal</p>
                                       <p class="cart_amount" id="cart_sub_total">BDT {{ $sub_total }}</p>
                                   </div>


                                    @if(session()->has('couponCart'))
                                        @php $couponCart = session()->get('couponCart'); @endphp
                                        <div class="cart_subtotal">
                                            <p>Discount</p>
                                            <p class="flex">({{ $couponCart['code'] }})<a title="Remove" href="{{ route('remove-coupon') }}"><i class="fa fa-remove"></i></a></p>
                                            <p class="cart_amount" id="">BDT {{ $discount = round($sub_total * $couponCart['value'] / 100) }}</p>
                                        </div>


                                    @endif

                                    <div class="cart_subtotal ">
                                        <p>Shipping</p>
                                        <p id="shippingCost" class="cart_amount">BDT 0</p>
                                    </div>

                                    <div>

                                        <div class="flex items-center">

                                            <input type="radio" class="location" name="location" value="inside_dhaka" required> Inside Dhaka


                                            <input type="radio" class="ml-5 location" name="location" value="outside_dhaka" required> Outside Dhaka

                                        </div>

                                        <p> * Please choose correctly, otherwise delivery won't be guaranteed.</p>

                                    </div>

                                   <div class="checkout_btn">
                                       <a onclick="return checkLocation();" href="{{ route('checkout') }}">Proceed to Checkout</a>
                                       <p> * Cart total will be calculated accordingly.</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->

        </div>
    </div>
     <!--shopping cart area end -->



    <!--brand area start-->
    @include('frontend.layout.brand')
    <!--brand area end-->

@endsection

<script>
    let cart_items_quantity = @json(session()->get('cart_items_quantity'));

    function checkLocation()
    {
        return $('input[name="location"]').is(':checked');
    }


</script>


@section('footer')

    @include('frontend.layout.footer')

@endsection

