@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title','Contact ' . $setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section About-->
    <section class="section section-sm section-last bg-default text-start">
        <div class="container grid-system-bordered grid-demonstration">

            <div class="row">
                <div class="col-4">

                    {!!$setting->contact!!}

                </div>
                <div class="col-8">
                    <div class="title-classic">
                        <h3 class="title-classic-title">Get in touch</h3>
                        <p class="title-classic-subtitle">We are available 24/7 by fax, e-mail or by phone. You can also use
                            our quick contact form to ask a question about our solutions.</p>
                    </div>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                          method="post" action="#">
                        <div class="row row-20 row-md-30">
                            <div class="col-lg-12">
                                <div class="row row-20 row-md-30">
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-first-name-2" type="text" name="name"
                                                   data-constraints="@Required"/>
                                            <label class="form-label" for="contact-first-name-2">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-last-name-2" type="text" name="name"
                                                   data-constraints="@Required"/>
                                            <label class="form-label" for="contact-last-name-2">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-email-2" type="email" name="email"
                                                   data-constraints="@Email @Required"/>
                                            <label class="form-label" for="contact-email-2">E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-phone-2" type="text" name="phone"
                                                   data-constraints="@Numeric"/>
                                            <label class="form-label" for="contact-phone-2">Phone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message-2">Message</label>
                                    <textarea class="form-input textarea-lg" id="contact-message-2" name="phone"
                                              data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="button button-lg button-primary button-zakaria" type="submit">Send Message</button>
                    </form>

                </div>
            </div>
        </div>

    </section>





@endsection
