@extends('layouts.home')

@section('title')
    {{$data->title}}
@endsection

@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">İLAN DETAYLARI</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('declarationlist')}}">İlanlar</a></li>
                    <li class="active">{{$data->title}}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row row-50 row-md-60">

                <div class="col-lg-4 col-xl-3">
                    <div class="aside row row-30 row-md-50 justify-content-md-between">
                        <div class="aside-item col-12">

                            <h3 class="post-modern-title">İlan Sahibi</h3>
                            <div class="team-info box-sm"><a class="team-info-figure" href="#"><img src="{{Storage::url($data->user->profile_photo_path)}}" alt="" width="123" height="133"/></a>
                                <h6 class="team-info-title"><a href="#">{{$data->user->name}}</a></h6>
                                <p class="team-info-text">{{$data->user->address}}</p>
                                <p class="team-info-text">{{$data->user->phone}}</p>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-lg-8 col-xl-9">
                    <div class="inset-xl-right-100">
                        <div class="row row-50 row-md-60 row-lg-80">
                            <div class="col-12">
                                <article class="post post-modern box-xxl">
                                    <div class="post-modern-panel">
                                        <div><a class="post-modern-tag" href="{{route('declarationlist')}}">İlanlar</a></div>
                                        <div>
                                            <time class="post-modern-time" datetime="2020-09-08">{{$data->created_at}}</time>
                                        </div>
                                    </div>
                                    <h3 class="post-modern-title">{{$data->title}}</h3>
                                    <div class="post-modern-figure"><img src="{{Storage::url($data->image)}}" alt="" width="800" height="394"/>
                                    </div>
                                    <h5 class="post-modern-title">İletişim {{$data->phone}}</h5>
                                    <p class="post-modern-text">{!! $data->detail !!}</p>

                                </article>
                            </div>

                            <!-- Bootstrap tabs-->
                            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                                <!-- Nav tabs-->
                                <div class="nav-tabs-wrap">
                                    <ul class="nav nav-tabs nav-tabs-1 single-product-tabs">

                                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                                                                    data-bs-toggle="tab" style="color:#000;">Yorumlar</a></li>

                                    </ul>
                                </div>

                                <!-- Tab panes-->
                                <div class="tab-content tab-content-1">
                                    <div class="tab-pane fade show active" id="tabs-1-1">


                                        @foreach($reviewsdec as $rs)

                                            <div class="box-comment">
                                                <div class="unit flex-column flex-sm-row unit-spacing-md">
                                                    <div class="unit-left"><a class="box-comment-figure"><img
                                                                src="{{Storage::url($rs->user->profile_photo_path)}}" alt="" width="119" height="119"/></a>
                                                    </div>
                                                    <div class="unit-body">
                                                        <div class="group-sm group-justify">
                                                            <div>
                                                                <div class="group-xs group-middle">
                                                                    <h5 class="box-comment-author">{{$rs->user->name}}</h5>


                                                                </div>
                                                            </div>
                                                            <div class="box-comment-time">
                                                                <time>{{$rs->created_at}}</time>
                                                            </div>
                                                        </div>
                                                        <h5 class="box-comment-author"> {{$rs->subject}}</h5>
                                                        <p class="box-comment-text"> {{$rs->review}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach


                                        <h4 class="text-transform-none fw-medium">Yorum yapabilirsiniz.</h4>

                                        <section class="section section-xxl bg-default text-md-left" style="margin-top: -50px">
                                            <div class="container">
                                                <div class="row row-40 justify-content-center justify-content-md-between">
                                                    <div class="col-12">
                                                        <div class="inset-xl-right-70">


                                                            @livewire('reviewdec',['id'=>$data->id])


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

      </body>
@endsection
