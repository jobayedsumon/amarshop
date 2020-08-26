<div class="container">
    <div class="row justify-center">
        <div class="col-12">
            <!--testimonial area start-->
            <div class="testimonial_area  testimonial_about">
                <div class="about_testi_title">
                    <h2>What Our Customers Say ?</h2>
                </div>
                <div class="testimonial_container">
                    <div class="owl-carousel owl-theme testimonial_column3">

                        @forelse(\App\Testimonial::all() as $testimonial)
                        <div class="single_testimonial">
                            <div class="testimonial_thumb">

                            </div>
                            <div class="testimonial_content">
                                <div class="testimonial_icon_img">
                                    <img src="{{ asset('frontend/img/icon/testimonials-icon.png') }}" alt="">
                                </div>
                                {!! $testimonial->testimonial !!}
                                <a href="#">{{ $testimonial->name }}</a>
                            </div>
                        </div>
                        @empty
                        @endforelse

{{--                        <div class="single_testimonial">--}}
{{--                            <div class="testimonial_thumb">--}}

{{--                            </div>--}}
{{--                            <div class="testimonial_content">--}}
{{--                                <div class="testimonial_icon_img">--}}
{{--                                    <img src="{{ asset('frontend/img/icon/testimonials-icon.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <p>I am very happy to their service and product...and I am very happy to contact with the admin ..Really thankful to them for their excellent behavior.....--}}
{{--                                    ..So I highly recommended to buy stuff from amar shop...</p>--}}
{{--                                <a href="#">Tanha Islam</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="single_testimonial">--}}
{{--                            <div class="testimonial_thumb">--}}

{{--                            </div>--}}
{{--                            <div class="testimonial_content">--}}
{{--                                <div class="testimonial_icon_img">--}}
{{--                                    <img src="{{ asset('frontend/img/icon/testimonials-icon.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <p>Best online skin and hair page. All products are just magical. I love Amarshop 🥰🥰🥰</p>--}}
{{--                                <a href="#">Khadija Akter</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="single_testimonial">--}}
{{--                            <div class="testimonial_thumb">--}}

{{--                            </div>--}}
{{--                            <div class="testimonial_content">--}}
{{--                                <div class="testimonial_icon_img">--}}
{{--                                    <img src="{{ asset('frontend/img/icon/testimonials-icon.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <p>God my daimonds😱😱😱--}}
{{--                                    I means product💖💖💖--}}
{{--                                    This page product quality is so good and service so fast--}}
{{--                                    Thanks amarshop for ur service and product</p>--}}
{{--                                <a href="#">Tawhida Islam</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="single_testimonial">--}}
{{--                            <div class="testimonial_thumb">--}}

{{--                            </div>--}}
{{--                            <div class="testimonial_content">--}}
{{--                                <div class="testimonial_icon_img">--}}
{{--                                    <img src="{{ asset('frontend/img/icon/testimonials-icon.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <p>5 stars--}}
{{--                                    Very friendly--}}
{{--                                    Original products</p>--}}
{{--                                <a href="#">Rojoni Jannat</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                    </div>
                </div>
            </div>
            <!--testimonial area end-->
        </div>

        <a class="text-center my-5 customButton p-2 rounded-full" href="/testimonial">Speak out your voice</a>

    </div>



</div>
