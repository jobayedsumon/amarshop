@extends('frontend.layout.master')

@section('header')

    @include('frontend.layout.header')

@endsection

@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--about section area -->
    <section class="about_section">
       <div class="container">
            <div class="row">
                <div class="col-12">
                   {!! $page->about_us !!}
                </div>
            </div>
        </div>
    </section>
    <!--about section end-->

    @include('frontend.layout.testimonial')


   <!--brand area start-->
    @include('frontend.layout.brand')
    <!--brand area end-->


    @endsection


    @section('modal')

        @include('frontend.layout.modal')

    @endsection

    @section('footer')

        @include('frontend.layout.footer')

    @endsection
