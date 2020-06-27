@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Add User')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" action="{{ route('categories.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add Category') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Category Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="category_name" id="input-name" type="text" placeholder="{{ __('Category Name') }}" value="" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">{{ __('Category Image') }}</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('category_image') ? ' has-danger' : '' }}">
                                                <input class="form-control{{ $errors->has('category_image') ? ' is-invalid' : '' }}" name="category_image" id="input-category_image" type="file"/>
                                                @if ($errors->has('category_image'))
                                                    <span id="category_image-error" class="error text-danger" for="input-category_image">{{ $errors->first('category_image') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
                            </div>

                        </div>


                    </form>
                </div>

                <div class="col-md-6">

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Available Categories') }}</h4>
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
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                            <th>
                                                Image
                                            </th>
                                            <th>
                                                Category Name
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                @forelse($categories as $category)

                                                    <td>
                                                        <img width="100px" src="{{ asset($category->category_image) }}" alt="">
                                                    </td>

                                                    <td class="text-success font-weight-bold">
                                                        {{ $category->category_name }}
                                                    </td>

                                                    <td class="td-actions">
                                                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button onclick="return confirm('Are you sure?')" rel="tooltip" class="btn btn-success btn-link"
                                                                    data-original-title="" title="Delete">
                                                                <i class="material-icons">delete</i>
                                                                <div class="ripple-container"></div>
                                                            </button>
                                                        </form>
                                                    </td>

                                            </tr>

                                            @empty

                                            @endforelse



                                            </tbody>
                                        </table>
                                    </div>

                            </div>


                        </div>
                </div>


            </div>
        </div>

    </div>
    </div>
@endsection
