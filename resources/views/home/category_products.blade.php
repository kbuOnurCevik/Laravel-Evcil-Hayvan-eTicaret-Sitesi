@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title',$data->title ." Product List")

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
                    <h2 class="breadcrumbs-custom-title">Kategori Ürünleri</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Product List</li>
                    <li class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Section Shop-->
    <section class="section section-xxl bg-gray-1">
        <div class="container">
            <h2 class="wow fadeScale">Ürünler</h2>
            <!-- Owl Carousel-->
            <div class="row col-12">

            @foreach($datalist as $rs)
                <!-- Product-->
                    <article class="product" style="margin-top: 30px">
                        <div class="product-body">
                            <div class="product-figure"><img src="{{Storage::url($rs->image)}}"
                                                             alt="" width="200" height="200"/>
                            </div>
                            <h5 class="product-title"><a
                                    href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"><p style="color: black">
                                        {{$rs->title}}</a>
                            </h5>
                            <div class="product-price-wrap">
                                <div class="product-price "><p style="color: red">
                                        <strong>{{$rs->price}}₺</strong></p></div>
                            </div>
                        </div>

                        <div class="product-button-wrap">
                            <div class="product-button"><a
                                    class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                    href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"></a></div>
                            <div class="product-button">
                                <form action="{{route('user_shopcart_add',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                    <input  type="hidden" name="quantity" data-zeros="true" value="1">
                                    <button type="submit" class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                    ></button>
                                </form>
                            </div>
                        </div>

                    </article>

                @endforeach


            </div>
        </div>
    </section>


    </body>
@endsection
