@extends('frontend.layout.master')


<!--header area start-->
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
                @include('frontend.filter')
                <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->

                    <div class="shop_banner_area">
                        <img src="{{ asset($subshop->image) }}" class="img-fluid single_slider w-100" alt="">
                    </div>

                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <button data-role="grid_3" type="button" class="active btn-grid-3" data-toggle="tooltip" title="3"></button>

{{--                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-toggle="tooltip" title="4"></button>--}}

                            <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button>
                        </div>
                        {{--                        <div class=" niceselect_option">--}}
                        {{--                            <form class="select_option" action="#">--}}
                        {{--                                <select name="orderby" id="short">--}}

                        {{--                                    <option selected value="1">Sort by average rating</option>--}}
                        {{--                                    <option  value="2">Sort by popularity</option>--}}
                        {{--                                    <option value="3">Sort by newness</option>--}}
                        {{--                                    <option value="4">Sort by price: low to high</option>--}}
                        {{--                                    <option value="5">Sort by price: high to low</option>--}}
                        {{--                                    <option value="6">Product Name: Z</option>--}}
                        {{--                                </select>--}}
                        {{--                            </form>--}}
                        {{--                        </div>--}}
                        <div class="page_amount">
                            @php
                                $total = $subshop->products()->count();
                                $subshops = $subshop->products()->paginate(9);
                                $perPage = $subshop->products()->paginate(9)->count();

                            @endphp
                            <p>Showing {{ min(12, $perPage) }} of {{ $total }} results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">

                        @forelse($subshops = $subshop->products()->paginate(9) as $product)

                            <div class="col-lg-4 col-md-4 col-sm-6 col-6 my-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{ route('product-details', [$product->category->id, $product->sub_category->id, $product->id]) }}">
                                            <img src="{{ asset($product->image_primary) }}" alt=""></a>
                                        <a class="secondary_img" href="{{ route('product-details', [$product->category->id, $product->sub_category->id, $product->id]) }}">
                                            <img src="{{ asset($product->image_secondary) }}" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">-{{ $product->discount }}%</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="wishlist"><a href="javascript:void(0)" class="wishlistButton" data-id="{{ $product->id }}"
                                                                        title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                <li class="compare">
                                                    <a  title="Add to Compare">
                                                        <i class="icon-refresh icons"></i></a></li>
                                                <li class="quick_button">
                                                    <a data-toggle="modal" data-target="#view-modal"
                                                       class="quickButton"
                                                       title="Quick View"
                                                       data-url="{{ route('dynamicModal',['id'=>$product->id])}}"
                                                    >
                                                        <i class="icon-magnifier-add icons"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                        <h4 class="product_name"><a href="{{ route('product-details', [$product->category->id, $product->sub_category->id, $product->id]) }}">
                                                {{ $product->name }}</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">BDT {{ $product->price }}</span>
                                            <span class="current_price">BDT {!! $product->price * $product->discount_price / 100 !!}</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a data-toggle="modal" data-target="#view-modal"
                                               class="quickButton"
                                               data-url="{{ route('dynamicModal',['id'=>$product->id])}}"
                                            >+ Add to cart</a>
                                        </div>
                                    </div>
                                    <div class="product_content list_content">
                                        <h4 class="product_name"><a href="{{ route('product-details', [$product->category->id, $product->sub_category->id, $product->id]) }}">
                                                {{ $product->name }}</a></h4>
                                        <div class="price_box">
                                            <span class="old_price">BDT {{ $product->price }}</span>
                                            <span class="current_price">BDT {!! $product->price * $product->discount_price / 100 !!}</span>
                                        </div>
                                        <div class="product_desc">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        <div class="list_action_wrapper">
                                            <div class="list_cart_btn">
                                                <a data-toggle="modal" data-target="#view-modal"
                                                   class="quickButton"
                                                   data-url="{{ route('dynamicModal',['id'=>$product->id])}}"
                                                >+ Add to cart</a>
                                            </div>
                                            <div class="action_links">
                                                <ul>
                                                    <li class="wishlist"><a href="javascript:void(0)" class="wishlistButton" data-id="{{ $product->id }}"
                                                                            title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                    <li class="compare">
                                                        <a  title="Add to Compare">
                                                            <i class="icon-refresh icons"></i></a></li>
                                                    <li class="quick_button">
                                                        <a data-toggle="modal" data-target="#view-modal"
                                                           class="quickButton"
                                                           title="Quick View"
                                                           data-url="{{ route('dynamicModal',['id'=>$product->id])}}"
                                                        >
                                                            <i class="icon-magnifier-add icons"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty

                        @endforelse

                    </div>
                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            {{ $subshops->links() }}
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

@section('modal')

    @include('frontend.layout.modal')

@endsection

@section('footer')

    @include('frontend.layout.footer')

@endsection



@endsection
