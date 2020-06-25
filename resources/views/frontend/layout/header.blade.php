
<header>
    <div class="main_header">
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="language_currency top_left">
                            <ul>
                                <li class="language"><a href="#"><img src="{{ asset('frontend')}}/img/icon/language.png" alt=""> English <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">Bangla</a></li>
                                    </ul>
                                </li>
{{--                                <li class="currency"><a href="#"> $ <i class="icon-right ion-ios-arrow-down"></i></a>--}}
{{--                                    <ul class="dropdown_currency">--}}
{{--                                        <li><a href="#">€ Euro</a></li>--}}
{{--                                        <li><a href="#">£ Pound Sterling</a></li>--}}
{{--                                        <li><a href="#">$ US Dollar</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                <li><a href="tel:(00)123456789">(00) 123 456 789</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="language_currency text-right">
                            <ul>
                                <li><span>Mon - Fri: 8:00 - 18:00</span></li>

{{--                                <li><a href="#"><i class="icon-equalizer icons"></i> Compare (3)</a></li>--}}
                                <li><a href="#"><i class="icon-heart"></i> Wishlist (3)</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('frontend')}}/img/logo/logo.png" alt=""></a>
                        </div>

                    </div>
                    <div class="col-lg-10">
                        <div class="header_right_info menu_position">
                            <!--main menu start-->
                            <div class="main_menu">
                                <nav>
                                    <ul>
                                        <li><a class="active"  href="{{ route('home') }}">home<i class=""></i></a>

                                        </li>
                                        <li class="mega_items"><a href="{{ route('shop') }}">shop<i class="fa fa-angle-down"></i></a>
                                            <div class="mega_menu">
                                                <ul class="mega_menu_inner">
                                                    <li><a href="#"><img src="{{ asset('frontend')}}/img/bg/banner_menu.jpg" alt=""></a></li>
                                                    <li><a href="#"><img src="{{ asset('frontend')}}/img/bg/banner_menu.jpg" alt=""></a></li>
                                                    <li><a href="#"><img src="{{ asset('frontend')}}/img/bg/banner_menu.jpg" alt=""></a></li>
                                                    <li><a href="#"><img src="{{ asset('frontend')}}/img/bg/banner_menu.jpg" alt=""></a></li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li><a href="/contact"> Contact Us</a></li>
                                        <li><a href="/about"> About us</a></li>
                                        <li><a href="{{ route('customer-login') }}">Login <i class=""></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!--main menu end-->
                            <div class="header_account_area">
                                <div class="header_account_list search_list">
                                    <a href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                    <div class="dropdown_search">
                                        <form action="#">
                                            <input placeholder="Search entire store here ..." type="text">
                                            <button type="submit"><i class="icon-magnifier icons"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header_account_list  mini_cart_wrapper">
                                    <a href="javascript:void(0)"><i class="icon-bag icons"></i>
                                        <span class="cart_itemtext">Cart:</span>
                                        <span class="cart_itemtotal">$59.00</span>
                                        <span class="item_count">2</span>
                                    </a>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="cart_gallery">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="{{ asset('frontend')}}/img/s-product/product.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Juicy Couture Tricot</a>
                                                    <p>1 x <span> $30.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-ios-close-outline"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="{{ asset('frontend')}}/img/s-product/product2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">Juicy Couture Juicy</a>
                                                    <p>1 x <span> $29.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="ion-ios-close-outline"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_table">
                                            <div class="cart_table_border">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$125.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$125.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button">
                                                <a href="cart.html"><i class="fa fa-shopping-cart"></i> View cart</a>
                                            </div>
                                            <div class="cart_button">
                                                <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
