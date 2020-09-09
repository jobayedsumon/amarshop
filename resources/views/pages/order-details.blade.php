@extends('layouts.app', ['activePage' => 'order', 'titlePage' => __('Order Details')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title ">Order Details</h4>
                            <p class="card-category"> Details of the order</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Order Id') }}</label>
                                <div class="col-sm-7">
                                    {{ $order->id }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Date') }}</label>
                                <div class="col-sm-7">
                                    {{ $order->created_at }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Customer') }}</label>
                                <div class="col-sm-7">
                                    {{ $order->name }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Phone Number') }}</label>
                                <div class="col-sm-7">
                                    {{ $order->phone }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-7">
                                    {{ $order->email }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Products') }}</label>
                                <div class="col-sm-7">
                                    <ol>

                                        @forelse($order->order_details as $data)
                                            <li class="font-weight-bold">
                                                <ul>
                                                    <li>{{ $data->product->name }}</li>
                                                    <li>{{ $data->size->name }}</li>
                                                    <li><span class="py-2 px-4" style="background-color: {{ $data->color->name }}"></span></li>
                                                </ul>
                                            </li>
                                            <br>
                                        @empty
                                        @endforelse

                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Total Amount') }}</label>
                                <div class="col-sm-7">
                                    {{ $order->amount }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Payment Status') }}</label>
                                <div class="col-sm-7">
                                    {{ $order->status }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Delivery Status') }}</label>
                                <div class="col-sm-7">
                                    {!! $order->delivery_status == 'awaiting' ? 'Awaiting Shipment' : 'Shipped' !!}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Billing Address') }}</label>
                                <div class="col-sm-7">
                                    {{ str_replace('+', ', ', $order->address) }}
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Shipping Address') }}</label>
                                <div class="col-sm-7">
                                    {{ str_replace('+', ', ', $order->address) }}
                                </div>
                            </div>

                        </div>
                    </div>

                    <form method="post" action="" class="form-horizontal">
                        @csrf
                        @method('patch')

                        <label class="" for="input-notes">{{ __('Order Notes') }}</label>

                    <div class="row">

                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('noted') ? ' has-danger' : '' }}">
                                <textarea class="w-100" name="notes" id="" cols="" rows="10">{{ $order->notes }}</textarea>
                                @if ($errors->has('notes'))
                                    <span id="notes-error" class="error text-danger" for="input-product_notes">{{ $errors->first('notes') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                        <div class="card-footer ml-auto mr-auto">
                            <input type="checkbox" name="ship_order" value="Shipped"> SHIP ORDER
                            <input type="checkbox" name="receive_payment" value="receive_payment"> SHIP ORDER
                        </div>

                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-danger">{{ __('Receive Payment') }}</button>
                        </div>

                    </form>

                </div>




        </div>
    </div>
@endsection
