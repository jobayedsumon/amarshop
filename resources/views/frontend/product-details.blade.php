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
                            <li>product details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <div class="product_details mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset($product->image_primary) }}" data-zoom-image="{{ asset($product->image_secondary) }}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset($product->image_primary) }}"
                                       data-zoom-image="{{ asset($product->image_primary) }}">
                                        <img src="{{ asset($product->image_primary) }}" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset($product->image_secondary) }}"
                                       data-zoom-image="{{ asset($product->image_secondary) }}">
                                        <img src="{{ asset($product->image_secondary) }}" alt="zo-th-1"/>
                                    </a>

                                </li>
{{--                                <li >--}}
{{--                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset($product->image) }}"--}}
{{--                                       data-zoom-image="{{ asset($product->image) }}">--}}
{{--                                        <img src="{{ asset($product->image) }}" alt="zo-th-1"/>--}}
{{--                                    </a>--}}

{{--                                </li>--}}
{{--                                <li >--}}
{{--                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{ asset($product->image) }}"--}}
{{--                                       data-zoom-image="{{ asset($product->image) }}">--}}
{{--                                        <img src="{{ asset($product->image) }}" alt="zo-th-1"/>--}}
{{--                                    </a>--}}

{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="product_d_right">
                       <form action="#">
                            <div class="productd_title_nav">
                                <h1><a href="#">{{ $product->name }}</a></h1>

                            </div>

                            <div class="price_box">
                                <span class="current_price">BDT {{ $product->discount_price }}</span>
                                <span class="old_price">BDT {{ $product->price }}</span>
                            </div>
                            <div class="product_desc">
                                {{ $product->short_description }}
                            </div>
                            <div class="product_variant color">
                                <h3>Available Options</h3>
                                <label>color</label>
                                <ul>
                                    @forelse($product->colors as $color)
                                        <li class=""><a style="background-color: {{ $color->name }}"
                                                        class="chooseColor" onclick="choose_color({{ $color->id }})"></a></li>
                                    @empty
                                    @endforelse

                                </ul>

                                <div class="size">
                                    <label>size</label>
                                    <ul class="">
                                        @forelse($product->sizes as $size)
                                            <li><a class="chooseSize" onclick="choose_size({{ $size->id }})">{{ $size->name }}</a></li>
                                        @empty
                                        @endforelse


                                    </ul>
                                </div>


                            </div>



                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>

                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li><a href="javascript:void(0)" onclick="wishlist({{ $product->id }})" title="Add to wishlist">+ Add to Wishlist</a></li>

                               </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="{{ route('shop', $category->id) }}">{{ $category->name }}</a></span>
                            </div>
                           <div class="product_meta">
                               <span>Tags:
                                   @forelse($product->tags as $tag)
                                       <a href="">{{ $tag->name }}</a>
                                   @empty
                                   @endforelse

                               </span>
                           </div>

                        </form>
{{--                        <div class="priduct_social">--}}
{{--                            <ul>--}}
{{--                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>--}}
{{--                                --}}
{{--                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>--}}
{{--                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>--}}
{{--                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-57">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    {{ $product->description }}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                <div class="product_d_table">
                                   <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>{{ $product->specifications ?  $product->specifications->compositions : '' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>{{ $product->specifications ?  $product->specifications->styles : '' }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>{{ $product->specifications ?  $product->specifications->properties : '' }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    {{ $product->short_description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products mb-57">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title psec_title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>

            <div id="owl-demo-2" class="owl-carousel owl-theme product_column4 product_carousel">


                @forelse($related_products as $related_product)

                        <article class="single_product h-full flex justify-between mr-3">
                            <figure class="flex justify-between">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{ route('product-details', [$related_product->category->id, $related_product->sub_category->id, $related_product->id]) }}">
                                        <img src="{{ asset($related_product->image_primary)}}" alt=""></a>
                                    <a class="secondary_img" href="{{ route('product-details', [$related_product->category->id, $related_product->sub_category->id, $related_product->id]) }}">
                                        <img src="{{ asset($related_product->image_secondary)}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">-{{ $related_product->discount }}%</span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="wishlist"><a href="javascript:void(0)" onclick="return wishlist({{ $related_product->id }})" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{ route('product-details', [$related_product->category->id, $related_product->sub_category->id, $related_product->id]) }}">
                                            {{ $related_product->name }}</a></h4>
                                    <div class="price_box">
                                        <span class="old_price">BDT {{ $related_product->price }}</span>
                                        <span class="current_price">BDT {{ $related_product->price * $related_product->discount_price / 100 }}</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="{{ route('cart') }}">+ Add to cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                @empty
                @endforelse
            </div>
{{--            <div class="row">--}}
{{--                <div class="product_carousel product_column4 owl-carousel">--}}

{{--                    @forelse($related_products as $related_product)--}}

{{--                        --}}

{{--                            <article class="single_product h-full flex justify-between">--}}
{{--                                <figure class="flex justify-between">--}}
{{--                                    <div class="product_thumb">--}}
{{--                                        <a class="primary_img" href="{{ route('product-details', [$related_product->category->id, $related_product->sub_category->id, $related_product->id]) }}">--}}
{{--                                            <img src="{{ asset($related_product->image_primary)}}" alt=""></a>--}}
{{--                                        <a class="secondary_img" href="{{ route('product-details', [$related_product->category->id, $related_product->sub_category->id, $related_product->id]) }}">--}}
{{--                                            <img src="{{ asset($related_product->image_secondary)}}" alt=""></a>--}}
{{--                                        <div class="label_product">--}}
{{--                                            <span class="label_sale">-{{ $related_product->discount }}%</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="action_links">--}}
{{--                                            <ul>--}}
{{--                                                <li class="wishlist"><a href="javascript:void(0)" onclick="return wishlist({{ $related_product->id }})" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>--}}
{{--                                                <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>--}}
{{--                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="product_content">--}}
{{--                                        <h4 class="product_name"><a href="{{ route('product-details', [$related_product->category->id, $related_product->sub_category->id, $related_product->id]) }}">--}}
{{--                                                {{ $related_product->name }}</a></h4>--}}
{{--                                        <div class="price_box">--}}
{{--                                            <span class="old_price">BDT {{ $related_product->price }}</span>--}}
{{--                                            <span class="current_price">BDT {{ $related_product->price * $related_product->discount_price / 100 }}</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="add_to_cart">--}}
{{--                                            <a href="{{ route('cart') }}">+ Add to cart</a>--}}
{{--                                        </div>--}}
{{--                                    </figcaption>--}}
{{--                                </figure>--}}
{{--                            </article>--}}

{{--                    @empty--}}
{{--                    @endforelse--}}

{{--               </div>--}}
{{--            </div>--}}
        </div>
    </section>
    <!--product area end-->

    <!--brand area start-->
    @include('frontend.layout.brand')
    <!--brand area end-->





@endsection


@section('modal')

    @include('frontend.layout.modal')

@endsection

@section('script')



@endsection

@section('footer')

    @include('frontend.layout.footer')

@endsection





