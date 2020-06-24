@extends('frontend.layout.master')

@section('content')
    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="language_currency top">
                            <ul>
                                <li class="language"><a href="#"><img src="{{ asset('frontend') }}/img/icon/language.png" alt=""> English <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Russian</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#"> $ <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li><a href="tel:(00)123456789">(00) 123 456 789</a></li>

                            </ul>
                        </div>
                        <div class="language_currency bottom">
                            <ul>
                                <li><span>Mon - Fri: 8:00 - 18:00</span></li>
                                 <li class="account"><a href="#"> Setting <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency bottom_drop_c">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">£ Pound Sterling</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="icon-equalizer icons"></i> Compare (3)</a></li>
                                <li><a href="#"><i class="icon-heart"></i> Wishlist (3)</a></li>
                            </ul>
                        </div>
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
                                               <a href="#"><img src="{{ asset('frontend') }}/img/s-product/product.jpg" alt=""></a>
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
                                               <a href="#"><img src="{{ asset('frontend') }}/img/s-product/product2.jpg" alt=""></a>
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

                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">services</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">about Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <header>
        <div class="main_header">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="language_currency top_left">
                                <ul>
                                    <li class="language"><a href="#"><img src="{{ asset('frontend') }}/img/icon/language.png" alt=""> English <i class="icon-right ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Russian</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency"><a href="#"> $ <i class="icon-right ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">€ Euro</a></li>
                                            <li><a href="#">£ Pound Sterling</a></li>
                                            <li><a href="#">$ US Dollar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tel:(00)123456789">(00) 123 456 789</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="language_currency text-right">
                                <ul>
                                    <li><span>Mon - Fri: 8:00 - 18:00</span></li>
                                     <li class="account"><a href="#"> Setting <i class="icon-right ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">€ Euro</a></li>
                                            <li><a href="#">£ Pound Sterling</a></li>
                                            <li><a href="#">$ US Dollar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon-equalizer icons"></i> Compare (3)</a></li>
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
                                <a href="index.html"><img src="{{ asset('frontend') }}/img/logo/logo.png" alt=""></a>
                            </div>

                        </div>
                        <div class="col-lg-10">
                            <div class="header_right_info menu_position">
                                <!--main menu start-->
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li><a  href="index.html">home<i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu">
                                                    <li><a href="index.html">Home shop 1</a></li>
                                                    <li><a href="index-2.html">Home shop 2</a></li>
                                                    <li><a href="index-3.html">Home shop 3</a></li>
                                                    <li><a href="index-4.html">Home shop 4</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega_items"><a class="active" href="shop.html">shop<i class="fa fa-angle-down"></i></a>
                                                <div class="mega_menu">
                                                    <ul class="mega_menu_inner">
                                                        <li><a href="#">Shop Layouts</a>
                                                            <ul>
                                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                                <li><a href="shop-list.html">List View</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">other Pages</a>
                                                            <ul>
                                                                <li><a href="cart.html">cart</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="my-account.html">my account</a></li>
                                                                <li><a href="404.html">Error 404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Product Types</a>
                                                            <ul>
                                                                <li><a href="product-details.html">product details</a></li>
                                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                                <li><a href="variable-product.html">product variable</a></li>

                                                            </ul>
                                                        </li>
                                                        <li><a href="#"><img src="{{ asset('frontend') }}/img/bg/banner_menu.jpg" alt=""></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="services.html">services</a></li>
                                                    <li><a href="faq.html">Frequently Questions</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="404.html">Error 404</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html"> Contact Us</a></li>
                                            <li><a href="about.html"> About us</a></li>
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
                                                       <a href="#"><img src="{{ asset('frontend') }}/img/s-product/product.jpg" alt=""></a>
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
                                                       <a href="#"><img src="{{ asset('frontend') }}/img/s-product/product2.jpg" alt=""></a>
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
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li> Beauty & shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h3>Women</h3>
                                <ul>
                                    <li class="widget_sub_categories sub_categories1"><a href="javascript:void(0)">Shoes</a>
                                        <ul class="widget_dropdown_categories dropdown_categories1">
                                            <li><a href="#">Document</a></li>
                                            <li><a href="#">Dropcap</a></li>
                                            <li><a href="#">Dummy Image</a></li>
                                            <li><a href="#">Dummy Text</a></li>
                                            <li><a href="#">Fancy Text</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories2"><a href="javascript:void(0)">Bags</a>
                                        <ul class="widget_dropdown_categories dropdown_categories2">
                                            <li><a href="#">Flickr</a></li>
                                            <li><a href="#">Flip Box</a></li>
                                            <li><a href="#">Cocktail</a></li>
                                            <li><a href="#">Frame</a></li>
                                            <li><a href="#">Flickrq</a></li>
                                        </ul>
                                    </li>
                                    <li class="widget_sub_categories sub_categories3"><a href="javascript:void(0)">Clothing</a>
                                        <ul class="widget_dropdown_categories dropdown_categories3">
                                            <li><a href="#">Platform Beds</a></li>
                                            <li><a href="#">Storage Beds</a></li>
                                            <li><a href="#">Regular Beds</a></li>
                                            <li><a href="#">Sleigh Beds</a></li>
                                            <li><a href="#">Laundry</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button type="submit">Filter</button>
                                    <input type="text" name="text" id="amount" />
                                </form>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By Color</h3>
                                <ul>
                                    <li>
                                        <a href="#">Black  <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Blue <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Brown <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Green <span>(6)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_color">
                                <h3>Select By SIze</h3>
                                <ul>
                                    <li>
                                        <a href="#">S  <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> M <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">L <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> XL <span>(6)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list widget_manu">
                                <h3>Manufacturer</h3>
                                <ul>
                                    <li>
                                        <a href="#">Brake Parts <span>(6)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Accessories <span>(10)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Engine Parts <span>(4)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">hermes <span>(10)</span></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="widget_list tags_widget">
                                <h3>Product tags</h3>
                                <div class="tag_cloud">
                                    <a href="#">Men</a>
                                    <a href="#">Women</a>
                                    <a href="#">Watches</a>
                                    <a href="#">Bags</a>
                                    <a href="#">Dress</a>
                                </div>
                            </div>
                            <div class="widget_list widget_banner">
                                <a href="#"><img src="{{ asset('frontend') }}/img/bg/banner17.jpg" alt=""></a>
                            </div>
                            <div class="small_product_area widget_sid_product">
                                <div class="section_title">
                                   <h2>Trending</h2>
                                </div>
                                <div class="small_product_container product_column1 owl-carousel">
                                    <div class="product_items">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product13.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product12.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Calvin Klein Jeans Reflective</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$186.00</span>
                                                    <span class="current_price">$56.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product14.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product15.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">New Balance Arishi Sport v1</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$210.00</span>
                                                    <span class="current_price">$68.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product16.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product17.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Brixton Patrol All Terrain Ano</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$136.00</span>
                                                    <span class="current_price">$76.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product_items">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product6.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product7.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Originals Kaval Windbreaker</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$245.00</span>
                                                    <span class="current_price">$76.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product8.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product9.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Juicy Couture Juicy Quilted</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$180.00</span>
                                                    <span class="current_price">$58.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product11.jpg" alt=""></a>
                                                <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product10.jpg" alt=""></a>
                                            </div>
                                            <div class="product_content">
                                                <h4 class="product_name"><a href="product-details.html">Water and Wind Resistant</a></h4>
                                                <div class="price_box">
                                                    <span class="old_price">$176.00</span>
                                                    <span class="current_price">$86.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->

                    <div class="shop_banner_area">
                        <img src="{{ asset('frontend') }}/img/bg/banner16.jpg" alt="">
                    </div>

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        <div class=" niceselect_option">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option  value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–12 of 21 results</p>
                        </div>
                    </div>
                     <!--shop toolbar end-->
                     <div class="row shop_wrapper">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product6.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product7.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Originals Kaval Windbreaker</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$245.00</span>
                                        <span class="current_price">$76.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Originals Kaval Windbreaker</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$245.00</span>
                                        <span class="current_price">$76.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product8.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product9.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Water and Wind Resistant</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$235.00</span>
                                        <span class="current_price">$86.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Water and Wind Resistant</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$235.00</span>
                                        <span class="current_price">$86.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product10.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product11.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Juicy Couture Juicy Quilted</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$190.00</span>
                                        <span class="current_price">$82.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Juicy Couture Juicy Quilted</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$190.00</span>
                                        <span class="current_price">$82.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product12.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product13.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">New Balance Fresh Foam</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$196.00</span>
                                        <span class="current_price">$95.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">New Balance Fresh Foam</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$196.00</span>
                                        <span class="current_price">$95.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product14.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product15.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Madden by Steve Madden</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$234.00</span>
                                        <span class="current_price">$58.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Madden by Steve Madden</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$234.00</span>
                                        <span class="current_price">$58.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product16.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product17.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Fila Locker Room Varsity</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$178.00</span>
                                        <span class="current_price">$68.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Fila Locker Room Varsity</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$178.00</span>
                                        <span class="current_price">$68.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product18.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product19.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Calvin Klein Jeans Reflect</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$182.00</span>
                                        <span class="current_price">$85.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Calvin Klein Jeans Reflect</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$182.00</span>
                                        <span class="current_price">$85.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product9.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product8.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Juicy Couture Tricot Logo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$225.00</span>
                                        <span class="current_price">$56.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Juicy Couture Tricot Logo</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$225.00</span>
                                        <span class="current_price">$56.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product11.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product10.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Trans-Weight Hooded Wind</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$238.00</span>
                                        <span class="current_price">$72.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Trans-Weight Hooded Wind</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$238.00</span>
                                        <span class="current_price">$72.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product13.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product12.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Originals Kaval Windbreaker</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$245.00</span>
                                        <span class="current_price">$76.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Originals Kaval Windbreaker</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$245.00</span>
                                        <span class="current_price">$76.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product15.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product14.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Juicy Couture Juicy Quilted</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$205.00</span>
                                        <span class="current_price">$59.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Juicy Couture Juicy Quilted</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$205.00</span>
                                        <span class="current_price">$59.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 ">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="product-details.html"><img src="{{ asset('frontend') }}/img/product/product16.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-15%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <h4 class="product_name"><a href="product-details.html">Brixton Patrol All Terrain</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$215.00</span>
                                        <span class="current_price">$49.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html">+ Add to cart</a>
                                    </div>
                                </div>
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="product-details.html">Brixton Patrol All Terrain</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">$215.00</span>
                                        <span class="current_price">$49.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="list_action_wrapper">
                                        <div class="list_cart_btn">
                                            <a href="cart.html" title="Add to cart">+ Add to Cart</a>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

   <!--footer area start-->
    <footer class="footer_widgets footer_padding">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">

                                <ul>
                                    <li><a href="#">Delivery</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#"> Secure payment</a></li>
                                    <li><a href="contact.html"> Contact Us</a></li>
                                    <li><a href="#"> Sitemap</a></li>
                                    <li><a href="#"> Stores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Custom Links</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Legal Notice</a></li>
                                    <li><a href="#">  Prices dro</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html"> My account</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Personal info</a></li>
                                    <li><a href="#"> Orders</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Credit slips</a></li>
                                    <li><a href="#">Addresses</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Follow us on</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>  Facebook</a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>   Twitter</a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i> YouTube</a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i>  Google +</a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>  Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-12">
                        <div class="widgets_container widget_newsletter">
                            <h3>Subscribe</h3>
                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Your email address" />
                                    <button id="mc-submit"><i class="icon-arrow-right-circle icons"></i></button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>Copyright  © 2020  <a href="index.html">Bonique</a>.  <a href="https://hasthemes.com/" target="_blank">All rights reserved.</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <a href="#"><img src="{{ asset('frontend') }}/img/icon/payment.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="ion-android-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('frontend') }}/img/product/productbig1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('frontend') }}/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('frontend') }}/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ asset('frontend') }}/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ asset('frontend') }}/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ asset('frontend') }}/img/product/product10.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ asset('frontend') }}/img/product/product5.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ asset('frontend') }}/img/product/product4.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->



@endsection
