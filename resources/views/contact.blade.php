@extends('layouts.frontend.app')

@section('title','Medicine')


@push('css')
@endpush

@section('content')
    <section class="page_breadcrumbs ds background_cover section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <ol class="breadcrumb greylinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a> </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">

            <section id="contact" class="ls section_padding_top_100">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 bottommargin_0 to_animate" data-animation="fadeInUp">
                            <div class="ds bg_teaser with_padding big-padding"> <img src="{{ asset('frontend/images/contact-page.jpg') }}" alt="">
                                <div class="row columns_padding_30">
                                    <div class="wholecolor">
                                    <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6 col-sm-offset-3 col-md-offset-5 col-lg-offset-6">
                                        <h2 class="section_header color3">Contact Us</h2>

                                        <form class="contact-form row columns_padding_10" method="post" action="{{ route('message.store') }}">
                                            @csrf
                                            @method('POST')
                                            <div class="col-sm-6">
                                                <div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name*"> </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address*"> </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group bottommargin_0"> <label for="message">Message</label> <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Your Message..."></textarea> </div>
                                            </div>
                                            <div class="col-sm-12 bottommargin_0">
                                                <div class="contact-form-submit topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color3 min_width_button margin_0">Send now</button> </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection

@push('js')
@endpush
