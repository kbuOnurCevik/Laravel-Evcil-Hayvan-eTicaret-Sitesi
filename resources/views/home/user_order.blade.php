@extends('layouts.home')

@section('title','Siparişlerim')


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Siparişlerim</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                    <li><a href="{{route('myprofile')}}">Profilim</a></li>
                    <li class="active">Siparişlerim</li>
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
                <h3>Siparişlerim</h3>
                <p class="big font-family-sans-serif-1">Sipariş bilgilerinizi görüntülemektesiniz ve sipariş sepetinizi kontrol edebilirsiniz.</p>
            </div>
            <div class="title-group">
                <p class="big font-family-sans-serif-1"> @include('home.message')</p>
            </div>
        </div>
    </section>



    <section class="section section-sm bg-default text-start" style="margin-top: -70px">
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-12" >
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                            <tr>
                                <th style="cursor: pointer">Id</th>
                                <th style="cursor: pointer">İsim</th>
                                <th style="cursor: pointer">Numara</th>
                                <th style="cursor: pointer">Adres</th>
                                <th style="cursor: pointer">Toplam</th>
                                <th style="cursor: pointer">Tarih</th>
                                <th style="cursor: pointer">Durum</th>
                                <th style="cursor: pointer">Not</th>
                                <th style="cursor: pointer">Sepet</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->address}}</td>
                                    <td>{{$rs->total}}₺</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->note}}</td>

                                    <td><a href="{{route('user_order_show',['id'=>$rs->id])}}"><img
                                                src="{{asset('assets/admin/img')}}/edit.jpg" height="23" width="23"></a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    </body>
@endsection
