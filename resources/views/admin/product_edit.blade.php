@extends('layouts.admin')

@section('title','Edit Product')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                <li class="breadcrumb-item">Edit Product</li>
            </ol>
        </div>

        <div class="card mb-4">

            <div class="card-body">
                <form action="{{route('admin_product_update',['id'=>$data->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label><b>Parent</b></label>
                        <select class="form-control select2" name="category_id" style="width: 100%;">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif >{{$rs->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>Title</b></label>
                        <input type="text" name="title" value="{{$data->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Keywords</b></label>
                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Description</b></label>
                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Price</b></label>
                        <input type="number" name="price" value="{{$data->price}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Tax</b></label>
                        <input type="number" name="quantity" value="{{$data->quantity}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Tax</b></label>
                        <input type="number" name="tax" value="{{$data->tax}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Detail</b></label>
                        <input type="text" name="detail" value="{{$data->detail}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><b>Slug</b></label>
                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label><b>Status</b></label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!---Container Fluid-->
@endsection
