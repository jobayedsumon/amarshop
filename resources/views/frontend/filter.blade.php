<aside class="sidebar_widget">
    <div class="widget_inner">

        <form action="{{ route('filter-product') }}" method="GET">
            @csrf

        <div class="widget_list widget_filter">
            <h3>Select price range</h3>
                <div id="slider-range"></div>
                <input type="text" name="price" id="amount" />
        </div>
        <div class="widget_list widget_color">
            <h3>Select Color</h3>
            <ul>
                @php $colors = \App\Color::all(); @endphp

                @forelse($colors as $color)
                <li class="flex items-center justify-between mb-2">
                    <input type="radio" name="color" value="{{ $color->id }}"><span class="px-8 py-4 w-3/4" style="background-color: {{ $color->name }}"></span>
                </li>

                @empty

                @endforelse

            </ul>
        </div>

        <div class="widget_list widget_color">
            <h3>Select SIze</h3>
            <ul>
                @php $sizes = \App\Size::all(); @endphp

                @forelse($sizes as $size)
                    <li class="flex items-center justify-between mb-2">
                        <input type="radio" name="size" value="{{ $size->id }}"><span>{{ $size->name }}</span>
                    </li>

                @empty

                @endforelse
            </ul>
        </div>

            <button class="customButton filter_button" type="submit">Filter</button>

        </form>

    </div>


        <div class="widget_list tags_widget mt-4">
            <h3>Product tags</h3>
            <div class="tag_cloud">
                @php $tags = \App\Tag::all(); @endphp

                @forelse($tags as $tag)

                    <a class="customButton" href="#">{{ $tag->name }}</a>
                @empty

                @endforelse


            </div>
        </div>


</aside>
