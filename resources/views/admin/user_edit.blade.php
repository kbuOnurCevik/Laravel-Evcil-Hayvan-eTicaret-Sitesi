@extends('layouts.admin')

@section('title','Edit User')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin_home')}}">Home</a></li>
                <li class="breadcrumb-item">Edit User</li>
            </ol>
        </div>

        <div class="card mb-4">

            <div class="card-body">
                <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label><b>Name</b></label>
                        <input type="text" name="name" value="{{$data->name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input type="email" name="email" value="{{$data->email}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Phone</b></label>
                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Address</b></label>
                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>Image</b></label>
                        <input type="file" name="image" class="form-control">
                        @if ($data->profile_photo_path)
                            <img src="{{Storage::url($data->profile_photo_path)}}" height="150"
                                 style="border-radius: 10px" alt="">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

    </div>
    </div>
    <!---Container Fluid-->
@endsection
