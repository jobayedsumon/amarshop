<header>
    <div class="main_header">
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="language_currency top_left">
                            <ul>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="language_currency text-right">
                            <ul>
                                @php
                                    $compare = \session()->get('compare') ?? [];
                                @endphp

                                <li><a href="{{ route('compare') }}"><i class="icon-refresh icons mr-1"></i> Compare (<span class="compareCount">{{ count($compare) }}</span>)</a></li>

                                @auth('customer')

                                <li><a href="{{ route('wishlist') }}"><i class="icon-heart mr-1"></i> Wishlist (<span class="wishlistCount">{{ auth()->guard('customer')->user()->wishlist->count() ?? ''  }}</span>)</a></li>

                                @elseguest('customer')
                                    <li><a href="{{ route('customer-login') }}"><i class="icon-heart mr-1"></i> Wishlist (0)</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_middle sticky-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-2 flex justify-center" style="bottom: 1rem">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img width="150px" src="{{ asset('frontend/img/logo/logo-amarshop.com.bd.png')}}" alt=""></a>
                        </div>

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 flex justify-center">
                        <div class="header_right_info menu_position">
                            <!--main menu start-->
                            <div class="main_menu">
                                <nav>
                                    <ul>
                                        <li><a class="active"  href="{{ route('home') }}">home<i class=""></i></a>

                                        </li>

                                        <li class="nav-item has-dimmer dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Mega submenu </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                                                <li><a class="dropdown-item" href="#"> Dropdown item 2 </a></li>
                                                <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                                                <li class="has-megasubmenu">
                                                    <a class="dropdown-item icon-arrow" href="#"> Dropdown item 4 </a>
                                                    <div class="megasubmenu dropdown-menu">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h6 class="title">Title Menu One</h6>
                                                                <ul class="list-unstyled">
                                                                    <li><a href="#">Submenu item</a></li>
                                                                    <li><a href="#">Submenu item</a></li>
                                                                    <li><a href="#">Submenu item</a></li>
                                                                    <li><a href="#">Submenu item</a></li>
                                                                    <li><a href="#">Submenu item</a></li>
                                                                </ul>
                                                            </div><!-- end col-3 -->
                                                            <div class="col-6">
                                                                <h6 class="title">Title Menu Two</h6>
                                                                <ul class="list-unstyled">
                                                                    <li><a href="#">Submenu item</a></li>
                                                                    <li><a href="#">Submenu item</a></li>
                                                                    <li><a href="#">Submenu item</a></li>
                                                                    <li><a href="#">Submenu item</a></li>
                                                                </ul>
                                                            </div><!-- end col-3 -->
                                                        </div><!-- end row -->
                                                    </div>
                                                </li>
                                                <li class="has-megasubmenu">
                                                    <a class="dropdown-item icon-arrow" href="#"> Dropdown item 5 </a>
                                                    <div class="megasubmenu dropdown-menu">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.
                                                    </div>
                                                </li>
                                                <li><a class="dropdown-item" href="#"> Dropdown item 6 </a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Large menu  </a>
                                            <div class="dropdown-menu animate fade-up dropdown-large">
                                                <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <h6 class="title">Title Menu One</h6>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                        </ul>
                                                    </div><!-- end col-3 -->
                                                    <div class="col-md-6 col-6">
                                                        <h6 class="title">Title Menu Two</h6>
                                                        <ul class="list-unstyled">
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                            <li><a href="#">Submenu item</a></li>
                                                        </ul>
                                                    </div><!-- end col-3 -->
                                                </div><!-- end row -->
                                            </div> <!-- dropdown-large.// -->
                                        </li>
                                        <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
                                        <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Treeview  </a>
                                            <ul class="dropdown-menu animate fade-up">
                                                <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
                                                <li><a class="dropdown-item icon-arrow" href="#"> Dropdown item 2 </a>
                                                    <ul class="submenu dropdown-menu  animate fade-up">
                                                        <li><a class="dropdown-item" href="">Submenu item 1</a></li>
                                                        <li><a class="dropdown-item" href="">Submenu item 2</a></li>
                                                        <li><a class="dropdown-item icon-arrow" href="">Submenu item 3  </a>
                                                            <ul class="submenu dropdown-menu  animate fade-up">
                                                                <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                                                <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                                        <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="#"> Dropdown item 3 </a></li>
                                                <li><a class="dropdown-item" href="#"> Dropdown item 4 </a>
                                                </li></ul>
                                        </li>
                                        <li class="nav-item dropdown has-megamenu">
                                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Megamenu  </a>
                                            <div class="dropdown-menu animate fade-down megamenu" role="menu">
                                                <div class="row">
                                                    <div class="col-md-3 col-6">
                                                        <div class="col-megamenu">
                                                            <h6 class="title">Title Menu One</h6>
                                                            <ul class="list-unstyled">
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                            </ul>
                                                        </div>  <!-- col-megamenu.// -->
                                                    </div><!-- end col-3 -->
                                                    <div class="col-md-3 col-6">
                                                        <div class="col-megamenu">
                                                            <h6 class="title">Title Menu Two</h6>
                                                            <ul class="list-unstyled">
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                            </ul>
                                                        </div>  <!-- col-megamenu.// -->
                                                    </div><!-- end col-3 -->
                                                    <div class="col-md-3 col-6">
                                                        <div class="col-megamenu">
                                                            <h6 class="title">Title Menu Three</h6>
                                                            <ul class="list-unstyled">
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                            </ul>
                                                        </div>  <!-- col-megamenu.// -->
                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <div class="col-megamenu">
                                                            <h6 class="title">Title Menu Four</h6>
                                                            <ul class="list-unstyled">
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                                <li><a href="#">Submenu item</a></li>
                                                            </ul>
                                                        </div>  <!-- col-megamenu.// -->
                                                    </div><!-- end col-3 -->
                                                </div><!-- end row -->
                                            </div> <!-- dropdown-mega-menu.// -->
                                        </li>


{{--                                        <li class="mega_items"><a href="#">shop<i class="fa fa-angle-down"></i></a>--}}
{{--                                            <div class="mega_menu">--}}
{{--                                                <ul class="mega_menu_inner">--}}

{{--                                                    @php--}}
{{--                                                        $categories = \App\Category::all();--}}
{{--                                                    @endphp--}}

{{--                                                    @forelse($categories as $category)--}}
{{--                                                        <li class="mega_items"><a href="{{ route('shop', $category->id) }}">{{ $category->name }}</a>--}}

{{--                                                            <ul>--}}


{{--                                                                @forelse($sub_categories = $category->sub_categories as $sub_category)--}}

{{--                                                                    <li><a href="{{ route('subshop', [$category->id, $sub_category->id]) }}">{{ $sub_category->name }}</a></li>--}}
{{--                                                                @empty--}}
{{--                                                                @endforelse--}}

{{--                                                            </ul>--}}

{{--                                                        </li>--}}



{{--                                                    @empty--}}
{{--                                                    @endforelse--}}

{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}


                                        <li><a href="#">Amar Care<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">

                                                @forelse($categories as $category)

                                                <li><a class="" href="/amar-care/{{ $category->id }}">{{ $category->name }}</a></li>

                                                @empty
                                                @endforelse

                                            </ul>
                                        </li>

                                        <li><a href="/about-us"> About us</a></li>
                                        <li><a href="/contact-us"> Contact Us</a></li>


                                        @auth('customer')

                                            <li><a href="#"><i class="fa fa-user"></i><i class="fa fa-angle-down"></i></a>
                                                <ul class="sub_menu pages">

                                                    <li><a class="" href="{{ route('my-account') }}">My Account <i class=""></i></a></li>

                                                    <li><a class="" href="{{ route('logout_customer') }}">Logout <i class=""></i></a></li>
                                                </ul>
                                            </li>


                                        @elseguest('customer')
                                            <li><a href="{{ route('customer-login') }}">Login <i class=""></i></a></li>
                                        @endauth

                                    </ul>
                                </nav>
                            </div>
                            <!--main menu end-->

                        </div>

                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-2 flex justify-center">
                        <div class="header_account_area">
                            <div class="header_account_list search_list">
                                <a href="javascript:void(0)"><i id="searchIcon" class="icon-magnifier icons"></i></a>
                                <div class="dropdown_search">
                                    <form action="{{ route('search') }}" method="GET">
                                        <input placeholder="Search entire store here ..." type="text" name="search">
                                        <button type="submit"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header_account_list  mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="icon-bag icons"></i>
                                    <span class="cart_itemtotal cart_sub_total">BDT {{ session()->get('cart_sub_total') ?? 0 }}</span>
                                    <span class="item_count cart_items_quantity">{{ session()->get('cart_items_quantity') ?? 0 }}</span>
                                </a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="mini_cart_table">
                                        <div class="cart_table_border">
                                            <div class="cart_total">
                                                <span>Sub Total:</span>
                                                <span class="price cart_sub_total">BDT {{ session()->get('cart_sub_total') ?? 0 }}</span>
                                            </div>
                                            <div class="cart_total mt-10">
                                                <span>Total:</span>
                                                <span class="price cart_total_amount">BDT {{ session()->get('cart_sub_total') ? session()->get('cart_sub_total')  : 0 }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                        <div class="cart_button">
                                            <a class="customButton" href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i> View cart</a>
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
</header>
