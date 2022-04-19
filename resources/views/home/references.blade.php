@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title','References ' . $setting->title)

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')


    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">References</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">References</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section About-->
    <section class="section section-sm section-last bg-default text-start">
        <div class="container grid-system-bordered grid-demonstration">


            {!!$setting->references!!}


        </div>

    </section>





@endsection
