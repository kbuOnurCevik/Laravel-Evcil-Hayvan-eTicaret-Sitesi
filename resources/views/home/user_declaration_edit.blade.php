@extends('layouts.home')

@section('title','İlanı Düzenle')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">İlanı Düzenle</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                    <li><a href="{{route('myprofile')}}">Profilim</a></li>
                    <li class="active">İlan Düzenle</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm bg-default text-start" style="margin-top: -50px" >
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-12">
                    <div class="table-custom-responsive" >
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
                <h3>İlanı Düzenle</h3>
                <p class="big font-family-sans-serif-1">Düzenlemek istediğiniz alanlarda değişiklik yapabilirsiniz.</p>
            </div>

        </div>
    </section>


    <section class="section section-xxl bg-default text-md-left" style="margin-top: -50px">
        <div class="container">
            <div class="row row-40 justify-content-center justify-content-md-between">
                <div class="col-12">
                    <div class="inset-xl-right-70">


                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                              method="post" action="{{route('user_declaration_update',['id'=>$data->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-12">
                                <div class="row row-20 row-md-30">



                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <p style="color: #0d0a0a"><strong>Başlık Giriniz.</strong></p>
                                            <input class="form-input " id="baslik" type="text" name="title" value="{{$data->title}}"/>

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <p style="color: #0d0a0a"><strong>İletişim Numarası Giriniz.</strong></p>
                                            <input class="form-input" value="{{$data->phone}}" type="number" name="phone"
                                                   data-constraints="Phone"/>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-wrap">
                                            <p style="color: #0d0a0a"><strong>Açıklama Giriniz.</strong></p>
                                            <input class="form-input" id="descriptionid" value="{{$data->description}}" type="text" name="description"
                                                   data-constraints="Description"/>

                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-wrap">
                                            <p style="color: #0d0a0a"><strong>İlan Detaylarını Giriniz.</strong></p>
                                            <textarea style="width: 100%;height: 100px" id="detailid" name="detail">{!!$data->detail!!}</textarea>
                                            <script>
                                                CKEDITOR.replace('detail');
                                            </script>

                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <p style="color: #0d0a0a"><strong>Resim Ekleyiniz.</strong></p>
                                            <input class="form-input" id="imageid" type="file" name="image" value="{{$data->image}}"
                                                   data-constraints="Slug"/>
                                            @if ($data->image)
                                                <img src="{{Storage::url($data->image)}}" width="100px" alt="">
                                            @endif

                                        </div>
                                    </div>


                                </div>
                            </div>


                            <button class="button button-lg button-primary button-zakaria" type="submit" style="background-color: #0f6848">İlanı Düzenle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
@endsection
