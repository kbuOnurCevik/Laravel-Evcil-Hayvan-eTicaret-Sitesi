@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title')

    {{$setting->title}}

@endsection

@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)

@section('content')
<body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Blank</h2>
                    <h5 class="breadcrumbs-custom-text">BlankBlankBlankBlankBlankBlankBlankBlank
                        <br class="d-none d-md-block">BlankBlankBlankBlankBlankBlankBlank</h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Blank</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section About-->
    <section class="section section-sm section-last bg-default text-start">
        <div class="container grid-system-bordered grid-demonstration">

            İÇERİK ALANI
            İÇERİK ALANI
            İÇERİK ALANI
            İÇERİK ALANI İÇERİK ALANI
            İÇERİK ALANI
            İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI
            İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI
            İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI İÇERİK ALANI



        </div>
    </section>
</body>
@endsection
