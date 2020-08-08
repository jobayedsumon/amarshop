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
                            <li><a href="index.html">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                <li><a href="#address" data-toggle="tab" class="nav-link">Address</a></li>
                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
                                <li><a href="{{ route('logout_customer') }}" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>Dashboard </h3>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <h3>Orders</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>May 10, 2018</td>
                                                <td><span class="success">Completed</span></td>
                                                <td>$25.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>May 10, 2018</td>
                                                <td>Processing</td>
                                                <td>$17.00 for 1 item </td>
                                                <td><a href="cart.html" class="view">view</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            @php

                                if ($billing_address = auth('customer')->user()->billing_address)
                                {
                                       $address = explode('+', $billing_address);

                                       $street = $address[0];
                                       $city = $address[1];
                                       $district = $address[2];
                                       $division = strtolower($address[3]);
                                }

                            @endphp

                            <div class="tab-pane" id="address">
                               <p>The following addresses will be used on the checkout page by default.</p>
                                <div class="checkout_form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                <h4 class="billing-address">Billing address</h4>
                                <div class="row">
                                    <form action="{{ route('update-address') }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                    <div class="col-12 mb-20">
                                        <label for="division">Division <span>*</span></label>
                                        <select class="select_option" name="division" id="division">

                                            <option value="{{ $division }}">{{ ucfirst($division) }}</option>

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
                                        <input type="text" name="district" value="{{ $district }}">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Town / City <span>*</span></label>
                                        <input type="text" name="city" value="{{ $city }}">
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Street address  <span>*</span></label>
                                        <input name="street" placeholder="House number and street name" type="text" value="{{ $street }}">
                                    </div>

                                    <button class="customButton py-2 px-6" style="border-radius: 5px" type="submit">Save</button>

                                    </form>

                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login_form_container">
                                        <div class="account_login_form">
                                            <form action="{{ route('update-account') }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <label>Name</label>
                                                <input type="text" name="name" value="{{ auth('customer')->user()->name }}">
                                                <label>Email</label>
                                                <input type="email" name="email" value="{{ auth('customer')->user()->email }}">
                                                <label>Phone Number</label>
                                                <input type="text" name="phone_number" value="{{ auth('customer')->user()->phone_number }}">
                                                <label>Password</label>
                                                <input type="password" name="password" required>
                                                <label>Birthdate</label>
                                                <input type="date" placeholder="MM/DD/YYYY" value="{{ auth('customer')->user()->birthdate }}" name="birthdate">
                                                <span class="example">
                                                  (E.g.: 05/31/1970)
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input {{ auth('customer')->user()->receive_offer ? 'checked' : '' }} type="checkbox" value="1" name="receive_offer">
                                                    <label>Receive offers from our partners</label>
                                                </span>
                                                <br>
                                                <span class="custom_checkbox">
                                                    <input {{ auth('customer')->user()->receive_offer ? 'checked' : '' }} type="checkbox" value="1" name="newsletter">
                                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                </span>
                                                <div class="save_button primary_btn default_button">
                                                   <button class="customButton py-2 px-6" style="border-radius: 5px" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- my account end   -->

     <!--brand area start-->
@include('frontend.layout.brand')
    <!--brand area end-->

@endsection


@section('modal')

    @include('frontend.layout.modal')

@endsection

@section('footer')

    @include('frontend.layout.footer')

@endsection
