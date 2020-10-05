@extends('layouts.frontend.app')

@section('title','Medicine')


@push('css')
@endpush

@section('content')
    <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>About</h2>
                    <ol class="breadcrumb greylinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="ls section_padding_top_110 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6" data-animation="fadeInUp" data-delay="600">
                    <div class="embed-responsive embed-responsive-3by2">
                            <img src="{{ asset('frontend/images/about.jpg') }}" alt="">
                        </a> </div>
                </div>
                <div class="col-md-6 col-md-pull-6" data-animation="fadeInRight" data-delay="300">
                    <h2 class="section_header color4"> WHO WE ARE </h2>
                    <p><strong>E-Medicine</strong> is the largest digital pharmacy in the country of Bangladesh.
                        We are a ONE-STOP ONLINE Healthcare Solutions where we not only provide a wide range of medicines, we also offer a wide choice of healthcare products including wellness products, vitamins, diet/fitness supplements, herbal products, pain relievers, diabetic care kits, baby/mother care products, beauty care products and surgical supplies.
                        Currently the free home delivery service is available to residents of Dhaka city only, and throughout the country for a very nominal charge and no minimum order volume restrictions.</p>
                        <p><strong>E-Medicine</strong> was created with a vision to serve people with a smile, to provide quality service over a virgin sector and become the industry leader in E-commerce healthcare.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
@endpush
