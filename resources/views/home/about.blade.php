@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title','About Us-' . $setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


    <section class="breadcrumbs-custom" >
        <div class="parallax-container"  data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content  context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">About Us</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section About-->
    <section class="section section-sm section-last bg-default text-start">
        <div class="container grid-system-bordered grid-demonstration">


                {!!$setting->aboutus!!}


        </div>
    </section>


    <section class="section section-xl bg-default" style="margin-top: -150px">
        <div class="container">
            <div class="owl-carousel owl-style-2" data-items="2" data-sm-items="3" data-md-items="4" data-lg-items="5"
                 data-margin="30" data-dots="true"><a class="clients-classic" href="#"><img
                        src="{{asset('assets')}}/images/clients-1-120x114.png" alt="" width="120" height="114"/></a><a
                    class="clients-classic" href="#"><img src="{{asset('assets')}}/images/clients-2-105x118.png" alt=""
                                                          width="105"
                                                          height="118"/></a><a class="clients-classic" href="#"><img
                        src="{{asset('assets')}}/images/clients-3-111x98.png" alt="" width="111" height="98"/></a><a
                    class="clients-classic"
                    href="#"><img
                        src="{{asset('assets')}}/images/clients-4-122x92.png" alt="" width="122" height="92"/></a><a
                    class="clients-classic"
                    href="#"><img
                        src="{{asset('assets')}}/images/clients-5-112x112.png" alt="" width="112" height="112"/></a>
            </div>
        </div>
    </section>


@endsection
