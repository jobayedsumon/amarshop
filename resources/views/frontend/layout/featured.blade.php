<div class="product_area  mb-95">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title">
                        <h2>Featured Products</h2>
                    </div>

                    <div class="product_tab_btn">
                        <ul class="nav nav-tabs" id="navContent">
                            @forelse($featuredCategories as $featuredCategory)
                                <li>
                                    <a data-toggle="tab" href="#tab{{ $featuredCategory->id }}">
                                        {{ $featuredCategory->name }}
                                    </a>
                                </li>
                            @empty
                            @endforelse


                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="product_container">
            <div class="tab-content" id="tabContent">


                @forelse($featuredCategories as $featuredCategory)

                    <div class="tab-pane fade in" id="tab{{ $featuredCategory->id }}">
                        <div class="row">

                    @forelse($featuredCategory->products()->whereIn('id', $featuredProdIds)->get() as $featuredProduct)

                                <div class="col-md-3 col-sm-6 my-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{ route('product-details', [$featuredProduct->category->id, $featuredProduct->sub_category->id, $featuredProduct->id]) }}">
                                                        <img src="{{ asset($featuredProduct->image_primary)}}" alt=""></a>
                                                    <a class="secondary_img" href="{{ route('product-details', [$featuredProduct->category->id, $featuredProduct->sub_category->id, $featuredProduct->id]) }}">
                                                        <img src="{{ asset($featuredProduct->image_secondary)}}" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">-{{ $featuredProduct->discount }}%</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="wishlist"><a href="{{ route('wishlist') }}" title="Add to Wishlist"><i class="icon-heart icons"></i></a></li>
                                                            <li class="compare"><a href="#" title="Add to Compare"><i class="icon-refresh icons"></i></a></li>
                                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view">
                                                                    <i class="icon-magnifier-add icons"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name"><a href="{{ route('product-details', [$featuredProduct->category->id, $featuredProduct->sub_category->id, $featuredProduct->id]) }}">
                                                            {{ $featuredProduct->name }}</a></h4>
                                                    <div class="price_box">
                                                        <span class="old_price">BDT {{ $featuredProduct->price }}</span>
                                                        <span class="current_price">BDT {{ $featuredProduct->price * $featuredProduct->discount_price / 100 }}</span>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="{{ route('cart') }}">+ Add to cart</a>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>

                                    </div>
                                </div>

                    @empty
                    @endforelse

                        </div>
                    </div>



                @empty
                @endforelse




            </div>

        </div>






    </div>
</div>

<script>

    $('#navContent li a:first').addClass('active');
    $('#tabContent div:first').addClass('active');

</script>

