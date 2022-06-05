@extends('layouts.home')

@section('title','İlanlarım')


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">İlanlarım</h2>

                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                    <li><a href="{{route('myprofile')}}">Profilim</a></li>
                    <li class="active">İlanlarım</li>
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


    <section class="section section-sm text-center" style="margin-top: -70px">
        <div class="container">
            <div class="title-group">
                <h3>İlanlar</h3>
                <p class="big font-family-sans-serif-1">İlanlarınızı görüntülemektesiniz ve bunları
                    yönetebilirsiniz.</p>
            </div>

        </div>
    </section>



    <section class="section section-sm bg-default text-start" style="margin-top: -100px">
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-3"><a class="button button-lg button-primary button-zakaria" style="background-color:#0f6848" href="{{route('user_declaration_add')}}">İlan Ekle</a></div>
                <div class="col-12" style="margin-top: -50px">
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                            <tr>
                                <th style="cursor: pointer">Id</th>>
                                <th style="cursor: pointer">BAŞLIK</th>
                                <th style="cursor: pointer">Numara</th>
                                <th style="cursor: pointer">RESİM</th>
                                <th style="cursor: pointer">DURUM</th>
                                <th style="cursor: pointer">DÜZENLE</th>
                                <th style="cursor: pointer">SİL</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="50" width="50" alt="">
                                        @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('user_declaration_edit',['id'=>$rs->id])}}"><img
                                                src="{{asset('assets/admin/img')}}/edit.jpg" height="23" width="23"></a>
                                    </td>
                                    <td><a href="{{route('user_declaration_delete',['id'=>$rs->id])}}"
                                           onclick="return confirm('Deleting ! Are you sure?')">
                                            <img src="{{asset('assets/admin/img')}}/delete.png" height="23" width="23"></a>
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
