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

                            <!--<div class="col-12">
                                <h6 class="single-post-title">3 Comments</h6>
                                <div class="box-comment">
                                    <div class="unit flex-column flex-sm-row unit-spacing-md">
                                        <div class="unit-left"><a class="box-comment-figure" href="#"><img src="images/user-1-119x119.jpg" alt="" width="119" height="119"/></a></div>
                                        <div class="unit-body">
                                            <div class="group-sm group-justify">
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <h5 class="box-comment-author"><a href="#">Jane Doe</a></h5><a class="box-comment-reply" href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="box-comment-time">
                                                    <time datetime="2020-08-30">Aug 30, 2020</time>
                                                </div>
                                            </div>
                                            <p class="box-comment-text">In ornare quam viverra orci sagittis eu volutpat odio. Non consectetur a erat nam at lectus urna. A pellentesque sit amet porttitor eget dolor morbi non arcu.</p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <div class="unit flex-column flex-sm-row unit-spacing-md">
                                            <div class="unit-left"><a class="box-comment-figure" href="#"><img src="images/user-2-119x119.jpg" alt="" width="119" height="119"/></a></div>
                                            <div class="unit-body">
                                                <div class="group-sm group-justify">
                                                    <div>
                                                        <div class="group-xs group-middle">
                                                            <h5 class="box-comment-author"><a href="#">Jessica Brown</a></h5><a class="box-comment-reply" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="box-comment-time">
                                                        <time datetime="2020-08-30">Aug 30, 2020</time>
                                                    </div>
                                                </div>
                                                <p class="box-comment-text">Laoreet non curabitur gravida arcu ac tortor dignissim convallis aenean. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-comment">
                                    <div class="unit flex-column flex-sm-row unit-spacing-md">
                                        <div class="unit-left"><a class="box-comment-figure" href="#"><img src="images/user-3-119x119.jpg" alt="" width="119" height="119"/></a></div>
                                        <div class="unit-body">
                                            <div class="group-sm group-justify">
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <h5 class="box-comment-author"><a href="#">Nick Stevens</a></h5><a class="box-comment-reply" href="#">Reply</a>
                                                    </div>
                                                </div>
                                                <div class="box-comment-time">
                                                    <time datetime="2020-08-30">Aug 30, 2020</time>
                                                </div>
                                            </div>
                                            <p class="box-comment-text">Urna neque viverra justo nec ultrices dui. Enim neque volutpat ac tincidunt vitae. Euismod in pellentesque massa placerat duis ultricies lacus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                           <!-- <div class="col-12">
                                <h6 class="single-post-title">Leave a comment</h6>
                                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                    <div class="row row-20 row-md-30">
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-first-name-2" type="text" name="name" data-constraints="@Required">
                                                <label class="form-label" for="contact-first-name-2">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-last-name-2" type="text" name="name" data-constraints="@Required">
                                                <label class="form-label" for="contact-last-name-2">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <label class="form-label" for="contact-message-2">Message</label>
                                                <textarea class="form-input textarea-lg" id="contact-message-2" name="phone" data-constraints="@Required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button button-lg button-primary button-zakaria" type="submit">Submit</button>
                                </form>
                            </div>-->

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

      </body>
@endsection
