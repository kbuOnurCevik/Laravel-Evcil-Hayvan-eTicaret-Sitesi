@extends('layouts.home')

@section('title','İlanlar')

@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">İLANLAR</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">İLANLAR</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30">

                @foreach($datalist as $rs)
                <div class="col-sm-6 col-lg-4">
                    <!-- Post Classic-->
                    <article class="post post-classic box-md"><a class="post-classic-figure" href="{{route('declaration',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" alt="" width="370" height="239"/></a>
                        <div class="post-classic-content">
                            <div class="post-classic-time">
                                <time datetime="2020-08-09">{{$rs->created_at}}</time>
                            </div>
                            <h5 class="post-classic-title"><a href="{{route('declaration',['id'=>$rs->id])}}">{{$rs->title}}</a></h5>
                            <p class="post-classic-text">{{$rs->description}}</p>
                        </div>
                    </article>
                </div>
                @endforeach



            </div>
        </div>
    </section>


    </body>
@endsection
