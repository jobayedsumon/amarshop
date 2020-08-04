@extends('layouts.app', ['activePage' => 'add-product', 'titlePage' => __('Add Product')])

@canany(['access-all-data', 'access-admin-data', 'access-manager-data'])
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
                                    <label class="col-sm-2 col-form-label">{{ __('Product Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Product Name') }}" value="" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
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
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                                        <label class="col-sm-2 col-form-label">{{ __('Sub Category') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('sub_category_id') ? ' has-danger' : '' }}">
                                                <div class="inline-block relative w-64">
                                                    <select name="sub_category_id" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                                        @forelse($sub_categories as $sub_category)
                                                            <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                                            <hr>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>

                                                @if ($errors->has('sub_category_id'))
                                                    <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('sub_category_id') }}</span>
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
                                        <label class="col-sm-2 col-form-label">{{ __('Discount') }}</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('discount') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('discount') ? ' is-invalid' : '' }}" name="discount" id="input-discount" type="number" placeholder="{{ __('Discount') }}" value="" required />
                                                @if ($errors->has('discount'))
                                                    <span id="discount-error" class="error text-danger" for="input-discount_price">{{ $errors->first('discount') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <br>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __('Primary Image') }}</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('image_primary') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('image_primary') ? ' is-invalid' : '' }}" name="image_primary" id="input-image_primary" type="file" required />
                                                @if ($errors->has('image_primary'))
                                                    <span id="image_primary-error" class="error text-danger" for="input-image_primary">{{ $errors->first('image_primary') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __('Secondary Image') }}</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('image_secondary') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('image_secondary') ? ' is-invalid' : '' }}" name="image_secondary" id="input-image_secondary" type="file" required />
                                                @if ($errors->has('image_secondary'))
                                                    <span id="image_secondary-error" class="error text-danger" for="input-image_secondary">{{ $errors->first('image_secondary') }}</span>
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
                                            <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                <textarea class="w-100" name="description" id="" cols="" rows="10"></textarea>
                                                @if ($errors->has('description'))
                                                    <span id="description-error" class="error text-danger" for="input-product_description">{{ $errors->first('description') }}</span>
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
@endcanany
