@extends('layouts.admin')

@section('title','Edit Product')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

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
                <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label><b>Position</b></label>
                        <input type="number" name="position" value="{{$data->position}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Question</b></label>
                        <input type="text" name="question" value="{{$data->question}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><b>Answer</b></label>
                        <textarea name="answer">{{$data->answer}}</textarea>
                        <script>
                            CKEDITOR.replace('answer');
                        </script>
                    </div>
                    <div class="form-group">
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
