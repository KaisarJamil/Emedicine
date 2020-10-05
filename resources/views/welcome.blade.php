@extends('layouts.frontend.app')

@section('title','Home')


@push('css')
@endpush

@section('content')
    <section class="intro_section page_mainslider ds all-scr-cover bottom-overlap-teasers">
        <div class="flexslider" data-dots="true" data-nav="true">
            <ul class="slides">
                <li>
                    <div class="slide-image-wrap"> <img src="{{ asset('frontend/images/background.jpg') }}" alt="" /> </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="slide_description_wrapper">
                                    <div class="slide_description">
                                        <div class="intro-layer" data-animation="fadeInRight"> Country's Largest E-Medicine Shop </div>
                                        <div class="intro-layer" data-animation="fadeInLeft">
                                            <h2> <span class="highlight3">Your Online Healthcare Solution
                                                </span></h2>
                                                <h3> Serve All Day </h3>
                                        </div>
                                    </div>
                                    <!-- eof .slide_description -->
                                </div>
                                <!-- eof .slide_description_wrapper -->
                            </div>
                            <!-- eof .col-* -->
                        </div>
                        <!-- eof .row -->
                    </div>
                    <!-- eof .container -->
                </li>
            </ul>
        </div>
        <!-- eof flexslider -->
    </section>
    <section id="services" class="ls section_intro_overlap columns_padding_0 columns_margin_0 container_padding_0">
        <div class="container-fluid">
            <div class="row flex-wrap v-center-content">
                <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                    <div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
                        <div class="media xxs-media-left">
                            <div class="media-body media-middle">
                                <a href="{{ route('company',1) }}"><img src="{{ asset('frontend/images/company/square.jpg') }}">
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                    <div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
                        <div class="media xxs-media-left">
                            <div class="media-body media-middle">
                                <a href="{{ route('company',1) }}">
                                    <img src="{{ asset('frontend/images/company/beximco.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                    <div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
                        <div class="media xxs-media-left">
                            <div class="media-body media-middle">
                                <a href="{{ route('company',1) }}"><img src="{{ asset('frontend/images/company/renata.jpg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                    <div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
                        <div class="media xxs-media-left">
                            <div class="media-body media-middle">
                                <a href="{{ route('company',1) }}"><img src="{{ asset('frontend/images/company/incepta.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_30">

        <div class="container">
            <h3 class="widget-title"><b>ONLINE DRUG STORE</b></h3>
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
                                        <h3 class="entry-title topmargin_5"> <a href="{{ route('company',1) }}">{{ $medicine->name }}</a> </h3>
                                        <p class="content-3lines-ellipsis"> {{ $medicine->description }}</p>
                                        <p class="topmargin_30">
                                            <a href="{{route('add.cart',$medicine->id)}}" class="theme_button color1 inverse min_width_button add_to_cart">Add to cart</a>
                                        </p>
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
