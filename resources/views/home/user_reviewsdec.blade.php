@extends('layouts.home')

@section('title','İlan Yorumlarım')


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">İlan Yorumlarım</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">Profilim</a></li>
                    <li class="active">İlan Yorumlarım</li>
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
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('myprofile')}}">PROFİLİM</a>
                                </th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_products')}}">ÜRÜNLERİM</a>
                                </th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_declarations')}}">İLANLARIM</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_orders')}}">SİPARİŞLERİM</a>
                                </th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_shopcart')}}">SEPETİM</a>
                                </th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('myreviews')}}">ÜRÜN YORUMLARIM</a>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('myreviewsdec')}}">İLAN YORUMLARIM</a>
                                </th>
                                @php
                                    $userRoles = Auth::user()->roles->pluck('name');
                                @endphp
                                @if($userRoles->contains('admin'))
                                    <th><a style="color: #0d0a0a" style="cursor: pointer" href="{{route('admin_home')}}"
                                           target="_blank">ADMİN PANELİ</a></th>
                                @endif
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('logout')}}">Çıkış
                                        Yap</a></th>

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
                <h3>İlan Yorumlarım</h3>
                <p class="big font-family-sans-serif-1">İlan yorumlarınızı görüntülemektesiniz ve bunları
                    yönetebilirsiniz.</p>
            </div>
            <div class="title-group">
                <p class="big font-family-sans-serif-1"> @include('home.message')</p>
            </div>
        </div>
    </section>


    <section class="section section-sm bg-default text-start" style="margin-top: -50px">
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-12" style="margin-top: -50px">
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>İlan</th>
                                <th>Konu</th>
                                <th>Yorum</th>
                                <th>Durum</th>
                                <th>Tarih</th>
                                <th>Sil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tbody>
                                <td>{{$rs->id}}</td>
                                <td><a style="color:#000;" href="{{route('declaration',['id'=>$rs->declaration_id])}}"
                                       target="_blank">{{$rs->declaration->title}}</a></td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td><a href="{{route('user_reviewdec_delete',['id'=>$rs->id])}}"
                                       onclick="return confirm('Delete ! Are you sure ?')"> <img
                                            src="{{ asset('assets/admin/img')}}/click.png" width="40px" height="40px"
                                            alt=""></a></td>

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
