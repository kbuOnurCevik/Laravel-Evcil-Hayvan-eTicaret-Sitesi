@extends('layouts.home')

@section('title','Yorumlarım')


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">My Products</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li class="active">Yorumlarım</li>
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
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('myprofile')}}">Profilim</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_products')}}">Ürünlerim</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_products')}}">Siparişlerim</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_products')}}">Sepetim</a></th>
                                <th style="cursor: pointer"><a style="color: #0d0a0a" href="{{route('user_products')}}">Yorumlarım</a></th>
                                @php
                                    $userRoles = Auth::user()->roles->pluck('name');
                                @endphp
                                @if($userRoles->contains('admin'))
                                    <th><a style="color: #0d0a0a" style="cursor: pointer" href="{{route('admin_home')}}" target="_blank">Admin Paneli</a></th>
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
                <h3>Ürünlerim</h3>
                <p class="big font-family-sans-serif-1">Ürünlerinizi görüntülemektesiniz ve bunları
                    yönetebilirsiniz.</p>
            </div>
            <div class="title-group">
                <p class="big font-family-sans-serif-1"> @include('home.message')</p>
            </div>
        </div>
    </section>



    <section class="section section-sm bg-default text-start" style="margin-top: -100px">
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-3"><a class="button button-lg button-primary button-zakaria" style="background-color: #0dcaf0" href="{{route('user_product_add')}}">Ürün Ekle</a></div>
                <div class="col-12" style="margin-top: -50px">
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tbody>
                                <td>{{$rs->id}}</td>
                                <td><a href="{{route('product',['id'=>$rs->product_id,'slug'=>$rs->product->slug])}}"
                                       target="_blank">{{$rs->product->title}}</a></td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->status}}</td>
                                <td>{{$rs->created_at}}</td>
                                <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}"
                                       onclick="return confirm('Delete ! Are you sure ?')"> <img src="{{ asset('assets')}}/img/click.png" alt="" height="40px"></a></td>
                                </tbody>
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
