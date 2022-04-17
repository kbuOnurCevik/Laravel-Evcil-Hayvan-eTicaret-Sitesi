@extends('layouts.home')

@section('title','User Profile')

@section('content')
    <body>

    <section class="section section-sm bg-default text-start">
        <div class="container-fluid  grid-demonstration">

            <div class="row">
                <div class="col-3">
                    @include('home.usermenu')
                </div>
                <div class="col-lg-9 col-md-9">
                    @include('profile.show')
                </div>

            </div>
        </div>
    </section>
    </body>
@endsection
