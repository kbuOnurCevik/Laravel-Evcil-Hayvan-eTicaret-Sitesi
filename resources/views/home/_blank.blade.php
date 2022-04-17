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
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Testimonials</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Full-Width Grid System-->
    <section class="section section-sm bg-default text-start">
        <div class="container-fluid  grid-demonstration">
            <h5 class="text-center">Full-Width Grid System</h5>
            <div class="row">
                <div class="col-12">
                    <h5>1 / 1</h5>
                    <p>Welcome to our wonderful world. We sincerely hope that each and every user entering our website
                        will find exactly what he/she is looking for. With advanced features of activating account and
                        new login widgets, you will definitely have a great experience of using our web page. It will
                        tell you lots of interesting things about our company, its products and services, highly
                        professional staff and happy customers. Our site design and navigation has been thoroughly
                        thought out. The layout is aesthetically appealing, contains concise texts in order not to take
                        your precious time. Text styling allows scanning the pages quickly. Site navigation is extremely
                        intuitive and user-friendly. You will always know where you are now and will be able to skip
                        from one page to another with a single mouse click. We use only trusted, verified content, so
                        you can believe every word we are saying. We are always happy to greet the new visitors on our
                        site. Our blog and social media accounts are available to encourage</p>
                </div>
            </div>
        </div>
    </section>

@endsection
