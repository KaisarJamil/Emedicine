@extends('layouts.frontend.app')

@section('title','Cart')


@push('css')
@endpush

@section('content')
    <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Cart</h2>
                    <ol class="breadcrumb greylinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8 col-lg-8">

                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h2>Billing Address</h2>
                    <form class="form-horizontal checkout shop-checkout" method="POST" action="{{route('checkout.confirm')}}" role="form">
                        @csrf
                        @method('POST')
                        <div class="form-group validate-required" id="billing_first_name_field">
                            <label for="billing_first_name" class="col-sm-3 control-label">
                                <span class="grey">City/Town:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control " name="city" id="city" placeholder="" value="">
                            </div>
                        </div>

                        <div class="form-group" id="billing_company_field">
                            <label for="billing_company" class="col-sm-3 control-label">
                                <span class="grey">Zip Code:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control " name="zipcode" id="zipcode" placeholder="" value="">
                            </div>
                        </div>

                        <div class="form-group address-field validate-state" id="billing_state_field">
                            <label for="billing_state" class="col-sm-3 control-label">
                                <span class="grey">Road:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control " value="" placeholder="" name="road" id="road">
                            </div>
                        </div>

                        <div class="form-group address-field validate-required" id="billing_city_field">
                            <label for="billing_city" class="col-sm-3 control-label">
                                <span class="grey">House:</span>
                                <span class="required">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control " name="house" id="house" placeholder="" value="">
                            </div>
                        </div>

                        <div id="payment" class="shop-checkout-payment">
                            <h3 class="widget-title">Payment</h3>
                            <ul class="list1 no-bullets payment_methods methods">
                                <li class="payment_method_bacs">
                                    <div class="radio"> <label for="payment_method_bacs">
                                            <input id="payment_method_bacs" type="radio" name="payment_method" value="bacs" checked="checked">
                                            <span class="grey">Cash On Delivery</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="payment_method_cheque">
                                    <div class="radio"> <label for="payment_method_cheque">
                                            <input id="payment_method_cheque" type="radio" name="payment_method" value="cheque">
                                            <span class="grey">Bkash</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="payment_method_paypal">
                                    <div class="radio"> <label for="payment_method_paypal">
                                            <input id="payment_method_paypal" type="radio" name="payment_method" value="paypal">
                                            <span class="grey">Nagad</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="place-order">
                                <input type="submit" class="theme_button color2" name="checkout_place_order" id="place_order" value="Place order">
                        </div>
                    </form>
                </div>

                <!-- sidebar -->
                <aside class="col-sm-5 col-md-4 col-lg-4">
                    <h3 class="widget-title" id="order_review_heading">Your order : </h3>
                    <div id="order_review" class="shop-checkout-review-order">
                        <table class="table shop_table shop-checkout-review-order-table">
                            <thead>
                            <tr>
                                <td class="product-name">Product</td>
                                <td class="product-total">Total</td>
                            </tr>
                            </thead>
                            @foreach($cartCollections as $cartCollection)
                            <tbody>
                            <tr class="cart_item">
                                <td class="product-name"> {{ $cartCollection->name }} <span class="product-quantity"> × {{ $cartCollection->quantity }}</span> </td>
                                <td class="product-total"> <span class="amount grey">Tk {{ $cartCollection->price }}</span> </td>
                            </tr>
                            </tbody>
                            @endforeach
                            <tfoot>
                            <tr class="shipping">
                                <td>Shipping:</td>
                                <td> <span class="grey">Free Shipping</span> </td>
                            </tr>
                            <tr class="order-total">
                                <td>Total:</td>
                                <td> <span class="amount grey">
										<strong>Tk {{ $totals }}</strong>
									</span> </td>
                            </tr>
                            </tfoot>

                        </table>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
