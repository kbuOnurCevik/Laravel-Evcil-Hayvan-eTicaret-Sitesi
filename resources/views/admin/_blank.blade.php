@extends('layouts.admin')

@section('title','Admin Panel Home Page')

@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Blank Page</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
            </ol>
        </div>

        <div class="text-center">
            <img src="{{ asset('assets')}}/admin/img/think.svg" style="max-height: 90px">
            <h4 class="pt-3">save your <b>imagination</b> here!</h4>
        </div>
    </div>
    </div>
    <!---Container Fluid-->
@endsection
