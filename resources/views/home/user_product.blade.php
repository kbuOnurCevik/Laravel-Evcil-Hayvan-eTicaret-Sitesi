@extends('layouts.home')

@section('title','Ürünlerim')


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
                    <li class="active">My Product</li>
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
                <div class="col-3"><a class="button button-lg button-primary button-zakaria" style="background-color: #0dcaf0" href="{{route('user_product_add')}}">Ürün Ekle</a></div>
                <div class="col-12" style="margin-top: -50px">
                    <div class="table-custom-responsive">
                        <table class="table-custom table-custom-striped table-custom-primary">
                            <thead>
                            <tr>
                                <th style="cursor: pointer">Id</th>
                                <th style="cursor: pointer">Category</th>
                                <th style="cursor: pointer">Title</th>
                                <th style="cursor: pointer">Price</th>
                                <th style="cursor: pointer">Quantity</th>
                                <th style="cursor: pointer">Image</th>
                                <th style="cursor: pointer">Image Gallery</th>
                                <th style="cursor: pointer">Status</th>
                                <th style="cursor: pointer">Edit</th>
                                <th style="cursor: pointer">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                                    </td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->quantity}}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="50" width="50" alt="">
                                        @endif
                                    </td>
                                    <td><a href="{{route('user_image_add',['product_id'=>$rs->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                            <img src="{{asset('assets/admin/img')}}/gallery.jpg" height="23" width="23"></a>
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('user_product_edit',['id'=>$rs->id])}}"><img
                                                src="{{asset('assets/admin/img')}}/edit.jpg" height="23" width="23"></a>
                                    </td>
                                    <td><a href="{{route('user_product_delete',['id'=>$rs->id])}}"
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
