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
                                <div class="product-price" style="color: red">{{$rs->price}}₺</div>
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
                                <div class="product-price" style="color: red">{{$rs->price}}₺</div>
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
            <h2 class="wow fadeScale">Tavsiye Edilen Ürünler</h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4"
                 data-margin="30" data-dots="true">

            @foreach($daily  as $rs)
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
                                <div class="product-price" style="color: red">{{$rs->price}}₺</div>
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

    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30">

                <h2 class="wow fadeScale">İlanlar</h2>

                @foreach($lastdec as $rs)
                    <div class="col-sm-6 col-lg-4">
                        <!-- Post Classic-->
                        <article class="post post-classic box-md" style="width: 80%"><a class="post-classic-figure"
                                                                                        href="{{route('declaration',['id'=>$rs->id])}}"><img
                                    src="{{Storage::url($rs->image)}}" alt=""/></a>
                            <div class="post-classic-content">
                                <div class="post-classic-time">
                                    <time datetime="2020-08-09">{{$rs->created_at}}</time>
                                    <h5 class="post-classic-title">İlan sahibi : {{$rs->user->name}}</h5>

                                </div>
                                <h5 class="post-classic-title">{{$rs->title}}</h5>
                                <p class="post-classic-text" style="color: black">{{$rs->description}}</p>
                                <div class="justify-content-center text-center" style="margin-top: 10px"><a
                                        class="button button-sm button-primary button-zakaria"
                                        style="background-color:#0f6848"
                                        href="{{route('declaration',['id'=>$rs->id])}}">Detaylar</a></div>
                            </div>
                        </article>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!-- Section About-->
    <section class="section section-sm section-last bg-default text-start">
        <div class="container grid-system-bordered grid-demonstration">


            {!!$setting->mainpage!!}


        </div>
    </section>




@endsection
