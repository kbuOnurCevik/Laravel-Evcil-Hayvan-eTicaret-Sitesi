@extends('layouts.admin')

@section('title','Add Category')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Category</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                <li class="breadcrumb-item">Add Category</li>
            </ol>
        </div>

        <div class="card mb-4">

            <div class="card-body">
                <form action="{{route('admin_category_create')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label><b>Parent Category</b></label>
                        <select class="form-control select2" name="parent_id" style="width: 100%;">
                            <option value="0" selected="selected">Main Category</option>
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
                        <label><b>Slug</b></label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class = "form-group">
                        <label><b>Status</b></label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Category</button>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!---Container Fluid-->
@endsection
