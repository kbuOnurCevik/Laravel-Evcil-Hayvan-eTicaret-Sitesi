@extends('layouts.admin')

@section('title','Add Product')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                <li class="breadcrumb-item">Add Product</li>
            </ol>
        </div>

        <div class="card mb-4">

            <div class="card-body">
                <form action="{{route('admin_product_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label><b>Category</b></label>
                        <select class="form-control select2" name="category_id" style="width: 100%;">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label><b>Title</b></label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Keywords</b></label>
                        <input type="text" name="keywords" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Description</b></label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Price</b></label>
                        <input type="number" name="price" value="0" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Quantity</b></label>
                        <input type="number" name="quantity" value="0" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Tax</b></label>
                        <input type="number" name="tax" value="18" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Detail</b></label>
                        <textarea name="detail" ></textarea>
                        <script>
                            CKEDITOR.replace( 'detail' );
                        </script>
                    </div>

                    <div class="form-group">
                        <label><b>Slug</b></label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Image</b></label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label><b>Status</b></label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!---Container Fluid-->
@endsection
