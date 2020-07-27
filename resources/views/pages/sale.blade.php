@extends('layouts.app', ['activePage' => 'sale', 'titlePage' => __('Give Sale')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{ route('sale.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Give Sale') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Sale Percentage') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('sale_percentage') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('sale_percentage') ? ' is-invalid' : '' }}" name="sale_percentage" id="input-sale_percentage" type="number" placeholder="{{ __('Sale Percentage') }}" value="" required="true" aria-required="true"/>
                                            @if ($errors->has('sale_percentage'))
                                                <span id="sale_percentage-error" class="error text-danger" for="input-sale_percentage">{{ $errors->first('sale_percentage') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                    <input type="hidden" name="product_id" value="{{ $productId }}">

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Expiry Date') }}</label>
                                    <div class="col-sm-7">
                                        <div class="{{ $errors->has('sale_expire') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('sale_expire') ? ' is-invalid' : '' }}" name="sale_expire" id="input-sale_expire" type="date"/>
                                            @if ($errors->has('sale_expire'))
                                                <span id="sale_expire-error" class="error text-danger" for="input-sale_expire">{{ $errors->first('sale_expire') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Give Sale') }}</button>
                            </div>

                        </div>


                    </form>
                </div>

{{--                <div class="col-md-6">--}}

{{--                    <div class="card ">--}}
{{--                        <div class="card-header card-header-primary">--}}
{{--                            <h4 class="card-title">{{ __('Available Categories') }}</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body ">--}}
{{--                            @if (session('status'))--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <div class="alert alert-success">--}}
{{--                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                                <i class="material-icons">close</i>--}}
{{--                                            </button>--}}
{{--                                            <span>{{ session('status') }}</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table">--}}
{{--                                    <thead class=" text-primary">--}}
{{--                                    <th>--}}
{{--                                        Image--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Category Name--}}
{{--                                    </th>--}}
{{--                                    <th>--}}
{{--                                        Action--}}
{{--                                    </th>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        @forelse($categories as $category)--}}

{{--                                            <td>--}}
{{--                                                <img width="100px" src="{{ asset($category->category_image) }}" alt="">--}}
{{--                                            </td>--}}

{{--                                            <td class="text-success font-weight-bold">--}}
{{--                                                {{ $category->category_name }}--}}
{{--                                            </td>--}}

{{--                                            <td class="td-actions">--}}
{{--                                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button onclick="return confirm('Are you sure?')" rel="tooltip" class="btn btn-success btn-link"--}}
{{--                                                            data-original-title="" title="Delete">--}}
{{--                                                        <i class="material-icons">delete</i>--}}
{{--                                                        <div class="ripple-container"></div>--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}

{{--                                    </tr>--}}

{{--                                    @empty--}}

{{--                                    @endforelse--}}



{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}

{{--                        </div>--}}


{{--                    </div>--}}
{{--                </div>--}}


            </div>
        </div>

    </div>
    </div>
@endsection
