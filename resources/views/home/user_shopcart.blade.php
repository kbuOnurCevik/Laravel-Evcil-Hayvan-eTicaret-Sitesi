@extends('layouts.home')

@section('title','Sepetim')


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Alışveriş Sepetim</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                    <li><a href="{{route('myprofile')}}">Profilim</a></li>
                    <li class="active">Sepetim</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm bg-default text-start" style="margin-top: -50px">
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-12">
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-bordered">
                            <thead>
                            <tr>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('myprofile')}}">PROFİLİM</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_products')}}">ÜRÜNLERİM</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_orders')}}">SİPARİŞLERİM</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_shopcart')}}">SEPETİM</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('myreviews')}}">YORUMLARIM</a></th>
                                @php
                                    $userRoles = Auth::user()->roles->pluck('name');
                                @endphp
                                @if($userRoles->contains('admin'))
                                    <th><a style="color: #0d0a0a" style="cursor: pointer" href="{{route('admin_home')}}" target="_blank">ADMİN PANELİ</a></th>
                                @endif
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('logout')}}">Çıkış Yap</a></th>

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
                <h3>Sepetim</h3>
                <p class="big font-family-sans-serif-1">Sepetinizi görüntülemektesiniz ve onaylayarak ödeme sayfasına geçebilirsiniz.</p>
            </div>
            <div class="title-group">
                <p class="big font-family-sans-serif-1"> @include('home.message')</p>
            </div>
        </div>
    </section>

    <!-- Shopping Cart-->
    <section class="section section-xl bg-default" style="margin-top: -50px">
        <div class="container">
            <!-- shopping-cart-->
            <div class="table-custom-responsive">
                <table class="table-custom table-cart">
                    <thead>
                    <tr>
                        <th>ÜRÜN İSMİ</th>
                        <th>FİYAT</th>
                        <th>MİKTAR</th>
                        <th>Toplam</th>
                        <th>Sİl</th>
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
                            <td>
                                <form action="{{route('user_shopcart_update',['id'=>$rs->id])}}" method="post">
                                    @csrf
                                    <input type="number" name="quantity" data-zeros="true" value="{{$rs->quantity}}"
                                           min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>{{$rs->product->price * $rs->quantity}}₺</td>
                            <td><a href="{{route('user_shopcart_delete',['id'=>$rs->id])}}"
                                   onclick="return confirm('Deleting ! Are you sure?')">
                                    <img src="{{asset('assets/admin/img')}}/delete.png" height="23" width="23"></a>
                            </td>

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
                                <div class="heading-5 fw-medium text-gray-500">Toplam</div>
                                <div class="heading-3 fw-normal">{{$total}}₺</div>
                            </div>
                        </div>
                        <form action="{{route('user_order_add')}}" method="post">
                            @csrf
                            <input type="hidden" name="total" value="{{$total}}">
                            <button style="background-color: #0f6848" type="submit" class="button button-lg button-primary button-zakaria">Sepeti Onayla</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>


    </body>
@endsection




