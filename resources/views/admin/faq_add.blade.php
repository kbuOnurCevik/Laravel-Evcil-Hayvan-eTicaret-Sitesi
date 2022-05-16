@extends('layouts.admin')

@section('title','Add Product')

@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add FAQ</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                <li class="breadcrumb-item">Add FAQ</li>
            </ol>
        </div>

        <div class="card mb-4">

            <div class="card-body">
                <form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label><b>Position</b></label>
                        <input type="number" name="position" value="0" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Question</b></label>
                        <input type="text" name="question" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><b>Answer</b></label>
                        <textarea name="answer" ></textarea>
                        <script>
                            CKEDITOR.replace( 'answer' );
                        </script>
                    </div>
                    <div class = "form-group">
                        <label><b>Status</b></label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">False</option>
                            <option>True</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add to FAQ</button>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!---Container Fluid-->
@endsection
