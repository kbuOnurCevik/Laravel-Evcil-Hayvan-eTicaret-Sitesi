@extends('layouts.home')

@section('title','Order İtem')


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Order İtem</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li class="active">Order İtem</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm bg-default text-start" style="margin-top: -50px">
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-12">
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                            <tr>
                                <th style="cursor: pointer"><a href="{{route('myprofile')}}">My Profile</a></th>
                                <th style="cursor: pointer"><a href="{{route('user_products')}}">My Products</a></th>
                                <th style="cursor: pointer"><a href="{{route('user_shopcart')}}">My Shopcart</a></th>
                                <th style="cursor: pointer"><a href="{{route('logout')}}">Logout </a></th>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section-sm text-center" style="margin-top: -100px">
        <div class="container">
            <div class="title-group">
                <h3>Ürünlerim</h3>
                <p class="big font-family-sans-serif-1">Ürünlerinizi görüntülemektesiniz ve bunları
                    yönetebilirsiniz.</p>
            </div>
            <div class="title-group">
                <p class="big font-family-sans-serif-1"> @include('home.message')</p>
            </div>
        </div>
    </section>

    <!-- Shopping Cart-->
    <section class="section section-xl bg-default">
        <div class="container">
            <!-- shopping-cart-->
            <div class="table-custom-responsive">
                <table class="table-custom table-cart">
                    <thead>
                    <tr>
                        <th>Product name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Durum</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $total=0;
                    @endphp
                    @foreach($datalist as $rs)
                        <tr>
                            <td><a class="table-cart-figure link-img"
                                   href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"> @if ($rs->product->image)
                                        <img src="{{Storage::url($rs->product->image)}}" height="330" width="300"
                                             alt="">
                                    @endif</a><a
                                    class="table-cart-link"
                                    href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}">{{$rs->product->title}}</a>
                            </td>

                            <td>{{$rs->product->price}}₺</td>
                            <td>{{$rs->quantity}}</td>
                            <td>{{$rs->amount}}₺</td>
                            <td>{{$rs->status}}₺</td>
                            <td>{{$rs->note}}</td>

                        </tr>
                        @php
                            $total += $rs->product->price * $rs->quantity;
                        @endphp
                    @endforeach
                    </tbody>
                </table>
            </div>


            <div class="group-xl group-justify justify-content-center justify-content-md-between">
                <div>

                </div>
                <div>
                    <div class="group-xl group-middle">
                        <div>
                            <div class="group-md group-middle">
                                <div class="heading-5 fw-medium text-gray-500">Total</div>
                                <div class="heading-3 fw-normal">{{$total}}₺</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    </body>
@endsection




