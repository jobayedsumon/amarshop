<div class="product_area  mb-100 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>New Arrivals</h2>
                    <p>Add our new arrivals to your weekly lineup</p>
                </div>
            </div>
        </div>

        <div id="owl-demo-2" class="owl-carousel owl-theme product_column4 product_carousel">


            @forelse($newProducts as $newProduct)

                <article class="single_product mr-3">
                    <figure class="h-full flex flex-column justify-between">
                        <div class="product_thumb">
                            <a class="primary_img" href="{{ route('product-details', [$newProduct->category->id, $newProduct->sub_category->id, $newProduct->id]) }}">
                                <img src="{{ asset($newProduct->image_primary)}}" alt=""></a>
                            <a class="secondary_img" href="{{ route('product-details', [$newProduct->category->id, $newProduct->sub_category->id, $newProduct->id]) }}">
                                <img src="{{ asset($newProduct->image_secondary)}}" alt=""></a>
                            <div class="label_product">
                                <span class="label_sale">-{{ $newProduct->discount }}%</span>
                            </div>
                            <div class="action_links">
                                <ul>
                                    <li class="wishlist"><a href="javascript:void(0)" onclick="return wishlist({{ $newProduct->id }})" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                    <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                    <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <i class="icon-magnifier-add icons"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <figcaption class="product_content">
                            <h4 class="product_name"><a href="{{ route('product-details', [$newProduct->category->id, $newProduct->sub_category->id, $newProduct->id]) }}">
                                    {{ $newProduct->name }}</a></h4>
                            <div class="price_box">
                                <span class="old_price">BDT {{ $newProduct->price }}</span>
                                <span class="current_price">BDT {{ $newProduct->price * $newProduct->discount_price / 100 }}</span>
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

    </div>
</div>
