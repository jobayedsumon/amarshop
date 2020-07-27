@extends('layouts.app', ['activePage' => 'products', 'titlePage' => __('Products List')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Products List</h4>
                            <p class="card-category"> Here you can manage products</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Add Product</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Category
                                        </th>
                                        <th class="">
                                            Price
                                        </th>
                                        <th class="">
                                            Discount Price
                                        </th>
                                        <th class="">
                                            Short Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($products as $product)
                                        <tr class="">
                                            <td>
                                                <img width="100px" src="{{ asset($product->image_primary) }}" alt="">
                                            </td>
                                            <td>
                                                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
                                            </td>
                                            <td>
                                                {{ $product->category->name }}
                                            </td>
                                            <td class="text-primary">
                                                {{ $product->price }}
                                            </td>
                                            <td class="text-primary">
                                                {{ $product->discount }}
                                            </td>
                                            <td>
                                                {{ $product->short_description }}
                                            </td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you sure?')" rel="tooltip" class="btn btn-success btn-link"
                                                            data-original-title="" title="">
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

@endsection

