@extends('layouts.app', ['activePage' => 'add-product', 'titlePage' => __('Add Product')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('products.store') }}" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Product') }}</h4>
                                <p class="card-category">{{ __('Product information') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Product Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="product_title" id="input-name" type="text" placeholder="{{ __('Product Title') }}" value="" required="true" aria-required="true"/>
                                            @if ($errors->has('product_title'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('product_title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __('Category') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                                <div class="inline-block relative w-64">
                                                    <select name="category_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                                        @forelse($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                            <hr>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>

                                                @if ($errors->has('category_id'))
                                                    <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('category_id') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="number" placeholder="{{ __('Price') }}" value="" required />
                                            @if ($errors->has('price'))
                                                <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                    <br>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __('Discount Price') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('discount_price') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('discount_price') ? ' is-invalid' : '' }}" name="discount_price" id="input-discount_price" type="number" placeholder="{{ __('Price') }}" value="" required />
                                                @if ($errors->has('discount_price'))
                                                    <span id="discount_price-error" class="error text-danger" for="input-discount_price">{{ $errors->first('discount_price') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __('Product Image') }}</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('product_image') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('product_image') ? ' is-invalid' : '' }}" name="product_image" id="input-product_image" type="file" required />
                                                @if ($errors->has('product_image'))
                                                    <span id="product_image-error" class="error text-danger" for="input-product_image">{{ $errors->first('product_image') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label" for="input-password">{{ __('Short Description') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('short_description') ? ' has-danger' : '' }}">
                                                <textarea class="w-100" name="short_description" id="" cols="" rows="10"></textarea>
                                                @if ($errors->has('short_description'))
                                                    <span id="short_description-error" class="error text-danger" for="input-short_description">{{ $errors->first('short_description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label" for="input-password">{{ __('Full Description') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('product_description') ? ' has-danger' : '' }}">
                                                <textarea class="w-100" name="product_description" id="" cols="" rows="10"></textarea>
                                                @if ($errors->has('product_description'))
                                                    <span id="product_description-error" class="error text-danger" for="input-product_description">{{ $errors->first('product_description') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Create Product') }}</button>
                            </div>

                        </div>


                    </form>
                </div>


            </div>
        </div>

    </div>
    </div>
@endsection
