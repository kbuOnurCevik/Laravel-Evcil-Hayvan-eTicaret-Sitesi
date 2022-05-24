@extends('layouts.home')

@section('title','Orders')


@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">My Orders</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li class="active">User Order</li>
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



    <section class="section section-sm bg-default text-start" style="margin-top: -100px">
        <div class="container-fluid  grid-demonstration">
            <div class="row">
                <div class="col-12" >
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                            <tr>
                                <th style="cursor: pointer">Id</th>
                                <th style="cursor: pointer">Name</th>
                                <th style="cursor: pointer">Phone</th>
                                <th style="cursor: pointer">Address</th>
                                <th style="cursor: pointer">Total</th>
                                <th style="cursor: pointer">Date</th>
                                <th style="cursor: pointer">Status</th>
                                <th style="cursor: pointer">Note</th>
                                <th style="cursor: pointer">Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->address}}</td>
                                    <td>{{$rs->total}}</td>
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
