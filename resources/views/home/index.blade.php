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

    @include('home._topmenu')

    <section class="section section-xxl bg-gray-1">

        <div class="container">
            <h2 class="wow fadeScale">Sizin için Seçilenler</h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4"
                 data-margin="30" data-dots="true">

            @foreach($picked  as $rs)
                <!-- Product-->
                    <article class="product">
                        <div class="product-body">
                            <div class="product-figure"><img src="{{Storage::url($rs->image)}}" alt=""
                                                             width="200"
                                                             height="200"/>
                            </div>
                            <h5 class="product-title"><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                    <p style="color: black">
                                    {{$rs->title}}</a></h5>
                            <div class="product-price-wrap">
                                <!-- <div class="product-price product-price-old">$30.00</div>-->
                                <div class="product-price">{{$rs->price}}₺</div>
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

    <section class="section section-xxl bg-gray-1">

        <div class="container">
            <h2 class="wow fadeScale">Son Gelen Ürünler</h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4"
                 data-margin="30" data-dots="true">

            @foreach($last  as $rs)
                <!-- Product-->
                    <article class="product">
                        <div class="product-body">
                            <div class="product-figure"><img src="{{Storage::url($rs->image)}}" alt=""
                                                             width="200"
                                                             height="200"/>
                            </div>
                            <h5 class="product-title"><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                    <p style="color: black">
                                    {{$rs->title}}</a></h5>
                            <div class="product-price-wrap">
                                <!-- <div class="product-price product-price-old">$30.00</div>-->
                                <div class="product-price">{{$rs->price}}₺</div>
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


    <section class="section section-xxl bg-gray-1">

        <div class="container">
            <h2 class="wow fadeScale">Önerilen Ürünler</h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4"
                 data-margin="30" data-dots="true">

            @foreach($picked  as $rs)
                <!-- Product-->
                    <article class="product">
                        <div class="product-body">
                            <div class="product-figure"><img src="{{Storage::url($rs->image)}}" alt=""
                                                             width="200"
                                                             height="200"/>
                            </div>
                            <h5 class="product-title"><a href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                    <p style="color: black">
                                    {{$rs->title}}</a></h5>
                            <div class="product-price-wrap">
                                <!-- <div class="product-price product-price-old">$30.00</div>-->
                                <div class="product-price">{{$rs->price}}₺</div>
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




@endsection
