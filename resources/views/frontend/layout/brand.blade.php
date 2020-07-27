<div class="brand_area brand_padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand_container owl-carousel ">
                    @forelse($brands as $brand)
                        <div class="single_brand">
                            <a href="#"><img src="{{ asset($brand->image) }}" class="img-fluid" alt=""></a>
                        </div>
                    @empty
                    @endforelse


                </div>
            </div>
        </div>
    </div>
</div>
