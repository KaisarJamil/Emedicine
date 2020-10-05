@extends('layouts.frontend.app')

@section('title','Medicine')


@push('css')
@endpush

@section('content')
    <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Medicines</h2>
                    <ol class="breadcrumb greylinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_30">

        <div class="container">
            <h3 class="widget-title"><b>Medicine Store</b></h3>
            <div class="row">
                <div class="col-md-12 ">
                    <div class="columns-4">
                        <ul id="products" class="products list-unstyled">
                            @foreach($medicines as $medicine)
                            <li class="product type-product loop-color">
                                <article class="vertical-item content-padding with_border text-center">
                                    <div class="item-media"> <img src="{{ asset('storage/medicine/'.$medicine->image) }}" alt="" /> </div>
                                    <div class="item-content">
                                        <div class="item-meta small-text"> <span class="price">
											<span class="currencies">Tk</span><span class="amount">{{ $medicine->price }}</span> </span>
                                        </div>
                                        <h3 class="entry-title topmargin_5"> <a href="">{{ $medicine->name }}</a> </h3>
                                        <p class="content-3lines-ellipsis">{{ $medicine->description }}</p>
                                        <p class="topmargin_30"> <a href="{{route('add.cart',$medicine->id)}}" class="theme_button color1 inverse min_width_button add_to_cart">Add to cart</a> </p>
                                    </div>
                                </article>
                            </li>
                                @endforeach
                        </ul>
                    </div>
                    <!-- eof .columns-* -->
                    <div class="text-center">
                        <ul class="pagination">

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
