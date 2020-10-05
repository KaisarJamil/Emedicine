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
                <!-- <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4"> -->
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table shop_table cart cart-table">
                            <thead>
                            <tr>
                                <td class="product-info">Medicine</td>
                                <td class="product-price-td">Price</td>
                                <td class="product-quantity">Quantity</td>
                                <td class="product-remove">Remove</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cartCollections as $cartCollection)
                            <tr class="cart_item">
                                <td class="product-info">
                                    <div class="media">
                                        <div class="media-left"> <a href="#">
                                                <img class="media-object cart-product-image" src="{{ asset('storage/medicine/'.$cartCollection->attributes->image) }}" alt="">
                                            </a> </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"> <a href="#">{{ $cartCollection->name }}</a> </h4>
                                            <span class="grey">Company Name : </span>{{$cartCollection->attributes->company_name}}<br></div>
                                    </div>
                                </td>
                                <td class="product-price"> <span class="currencies">Tk</span><span class="amount">{{ $cartCollection->price }}</span> </td>
                                <td class="product-quantity">

                                    <div class="quantity"> <input type="button" value="-" class="minus">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <input type="number" step="1" min="0" name="product_quantity" value="{{ $cartCollection->quantity }}" title="Qty" class="form-control">
                                        <input type="button" name="quantity" value="+" class="plus">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                                    </div>

                                </td>
                                <td class="">
                                    <a href="{{ route('remove.cart',$cartCollection->id) }}" class=" fontsize_20" title="Remove this item">
                                        <i class="fa fa-trash-o"></i>
                                    </a> </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div
                        class="cart-collaterals">
                        <div class="cart_totals">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>

                                <tr class="shipping">
                                    <td>Shipping and Handling</td>
                                    <td> Free Shipping </td>
                                </tr>
                                <tr class="order-total">
                                    <td class="grey">Order Total</td>
                                    <td>
                                        <strong class="grey"><span class="currencies">Tk </span>
                                            <span class="amount">{{ $totals }}</span> </strong> </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="cart-buttons">
                        <a class="theme_button color2" href="{{ route('checkout.cart') }}">Proceed to Checkout</a>
                        <a href="{{ route('home') }}"><button type="submit" class="theme_button color1">Continue Buying</button></a>
                    </div>
                </div>
                <!--eof .col-sm-8 (main content)-->
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
