<div class="banner_gallery_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>2020 top collections</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="banner_carousel banner_column4 owl-carousel">

                @forelse($categories as $category)
                    <div class="col-lg-3">
                        <div class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ route('shop') }}"><img src="{{ asset($category->category_image)}}" alt=""></a>
                            </div>
                            <div class="banner_text">
                                <h3>{{ $category->category_name }}e</h3>
                                <p>/ {{ $category->products->count() }} items</p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </div>
</div>
