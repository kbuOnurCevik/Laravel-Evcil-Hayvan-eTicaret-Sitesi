@extends('layouts.home')

@section('title')

    {{$data->title}}

@endsection

@section('description')
    {{$data->description}}
@endsection
@section('keywords', $data->keywords)

@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Product Detail</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">Product</a></li>
                    <li>
                        <a href="#">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</a>
                    </li>
                    <li class="active">{{$data->title}}</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Single Product-->
    <section class="section section-sm section-first bg-default">
        <div class="container">
            <div class="row row-30">
                <div class="col-lg-6">

                    <div class="slick-vertical slick-product">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true"
                             data-child="#child-carousel" data-for="#child-carousel">
                            <div class="item">
                                <div class="slick-product-figure"><img src="{{Storage::url($data->image)}}" alt=""
                                                                       width="530" height="480"/>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true"
                             data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3"
                             data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">

                            @foreach($datalist as $rs)
                                <div class="item">
                                    <div class="slick-product-figure"><img src="{{Storage::url($rs->image)}}" alt=""
                                                                           width="530" height="480"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>


                <div class="col-lg-6">
                    <div class="single-product">
                        <h3 class="text-transform-none fw-medium">{{$data->title}}</h3>
                        <div class="group-md group-middle">
                            <div class="single-product-price">{{$data->price}}₺</div>
                            <div class="single-product-rating"><span class="icon mdi mdi-star"></span><span
                                    class="icon mdi mdi-star"></span><span class="icon mdi mdi-star"></span><span
                                    class="icon mdi mdi-star"></span><span class="icon mdi mdi-star-half"></span></div>
                        </div>
                        <p>{{$data->description}}</p>
                        <hr class="hr-gray-100">
                        <!-- <ul class="list list-description">
                                <li><span>Categories:</span><span>Gifts</span></li>
                                <li><span>Weight:</span><span> 0,44 lbs</span></li>
                                <li><span>Size:</span><span>60 x 60 x 90 cm</span></li>
                            </ul>-->
                        <div class="group-xs group-middle">
                            <!--<div class="product-stepper">
                                    <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                                </div>-->
                            <div><a class="button button-lg button-secondary button-zakaria"
                                    href="{{route('product',['id'=>$data->id,'slug'=>$data->slug])}}">Sepete Ekle</a>
                            </div>
                        </div>
                        <hr class="hr-gray-100">

                    </div>
                </div>
            </div>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs nav-tabs-1 single-product-tabs">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                                                    data-bs-toggle="tab">Reviews</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                                                    data-bs-toggle="tab">Additional information</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                                                    data-bs-toggle="tab">Delivery and payment</a></li>
                    </ul>
                </div>
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        <div class="box-comment">
                            <div class="unit flex-column flex-sm-row unit-spacing-md">
                                <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                            src="images/user-1-119x119.jpg" alt="" width="119" height="119"/></a></div>
                                <div class="unit-body">
                                    <div class="group-sm group-justify">
                                        <div>
                                            <div class="group-xs group-middle">
                                                <h5 class="box-comment-author"><a href="#">Jane Doe</a></h5>
                                                <div class="box-rating"><span class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star"></span><span
                                                        class="icon mdi mdi-star-half"></span></div>
                                            </div>
                                        </div>
                                        <div class="box-comment-time">
                                            <time datetime="2020-11-30">Nov 30, 2020</time>
                                        </div>
                                    </div>
                                    <p class="box-comment-text">Lorem ipsum dolor sit amet, has mutat labores nostrum
                                        ei. Duo te blandit erroribus, ut sea ipsum nonumy, mel no ignota accusamus
                                        gloriatur. Id has habeo regione, explicari hendrerit reprimique cum te.</p>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-transform-none fw-medium">Leave a Review</h4>
                        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                              method="post" action="bat/rd-mailform.php">
                            <div class="row row-20 row-md-30">
                                <div class="col-lg-8">
                                    <div class="row row-20 row-md-30">
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-first-name-2" type="text"
                                                       name="name" data-constraints="@Required"/>
                                                <label class="form-label" for="contact-first-name-2">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-last-name-2" type="text"
                                                       name="name" data-constraints="@Required"/>
                                                <label class="form-label" for="contact-last-name-2">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-email-2" type="email" name="email"
                                                       data-constraints="@Email @Required"/>
                                                <label class="form-label" for="contact-email-2">E-mail</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-phone-2" type="text" name="phone"
                                                       data-constraints="@Numeric"/>
                                                <label class="form-label" for="contact-phone-2">Phone</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message-2">Message</label>
                                        <textarea class="form-input textarea-lg" id="contact-message-2" name="phone"
                                                  data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="button button-lg button-primary button-zakaria" type="submit">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span>
                                </div>
                                <div class="unit-body">
                                    <p>{!! $data->detail !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                                <div class="unit-body">
                                    <p>Placerat orci nulla pellentesque dignissim. Cursus turpis massa tincidunt dui ut
                                        ornare lectus sit amet. Laoreet suspendisse interdum consectetur libero id
                                        faucibus nisl tincidunt. Non nisi est sit amet. Lorem ipsum dolor sit amet
                                        consectetur adipiscing elit pellentesque. Eget duis at tellus at urna. Magna
                                        fringilla urna porttitor rhoncus dolor.</p>
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
