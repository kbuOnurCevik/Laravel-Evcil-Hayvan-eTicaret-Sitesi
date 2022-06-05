@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title','İletişim ' . $setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">İletişime Geç</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">İletişim</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section About-->
    <section class="section section-sm section-last text-start">
        <div class="container grid-demonstration">

            <div class="row">
                <div class="col-4">

                    {!!$setting->contact!!}

                </div>
                <div class="col-8">

                    <div class="title-classic">
                        <h3 class="title-classic-title">Mesaj Gönder</h3>
                        <p class="title-classic-subtitle">Önerileriniz veya şikayetleriniz hakkında bizimle iletişime geçebilirsiniz.</p>
                    </div>
                    <div class="row row-20 row-md-30">
                        <div class="col-lg-12">
                            @include('home.message')
                        </div>
                    </div>
                    <form
                        method="post" action="{{route('sendmessage')}}">
                        @csrf
                        <div class="row row-20 row-md-30">
                            <div class="col-lg-12">
                                <div class="row row-20 row-md-30">

                                    <div class="col-sm-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="subject" type="text" name="subject"
                                                   data-constraints="@Required"/>
                                            <label class="form-label" for="subject">Konu</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-wrap">
                                            <input class="form-input" id="contact-first-name-2" type="text" name="name"
                                                   data-constraints="@Required"/>
                                            <label class="form-label" for="contact-first-name-2">Ad & Soyad</label>
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
                                            <label class="form-label" for="contact-phone-2">Telefon No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-message-2">Mesajınız</label>
                                    <textarea class="form-input textarea-lg" id="contact-message-2" name="message"
                                              data-constraints="@Required"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="button button-lg button-primary button-zakaria" style="background-color: #0f6848" type="submit">Gönder
                        </button>
                    </form>

                </div>
            </div>
        </div>

    </section>

@endsection
