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
                        <article class="post post-classic box-md" style="width: 80%"><a class="post-classic-figure"
                                                                     href="{{route('declaration',['id'=>$rs->id])}}"><img
                                    src="{{Storage::url($rs->image)}}" alt=""/></a>
                            <div class="post-classic-content">
                                <div class="post-classic-time">
                                    <time datetime="2020-08-09">{{$rs->created_at}}</time>
                                    <h5 class="post-classic-title">İlan sahibi : {{$rs->user->name}}</h5>

                                </div>
                                <h5 class="post-classic-title">{{$rs->title}}</h5>
                                <p class="post-classic-text" style="color: black">{{$rs->description}}</p>
                                <div class="justify-content-center text-center" style="margin-top: 10px"><a
                                        class="button button-sm button-primary button-zakaria"
                                        style="background-color:#0f6848"
                                        href="{{route('declaration',['id'=>$rs->id])}}">Detaylar</a></div>
                            </div>
                        </article>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


    </body>
@endsection
