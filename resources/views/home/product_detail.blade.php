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
                            <div class="single-product-price" style="color: red">{{$data->price}}₺</div>

                        </div>
                        <p>{{$data->description}}</p>
                        <hr class="hr-gray-100">
                        <!-- <ul class="list list-description">
                                <li><span>Categories:</span><span>Gifts</span></li>
                                <li><span>Weight:</span><span> 0,44 lbs</span></li>
                                <li><span>Size:</span><span>60 x 60 x 90 cm</span></li>
                            </ul>-->

                        <form action="{{route('user_shopcart_add',['id'=>$data->id])}}" method="post">
                            @csrf
                            <div class="group-xs group-middle">
                                <div class="product-stepper">
                                    <input class="form-input" type="number" name="quantity" data-zeros="true" value="1"
                                           min="1"
                                           max="{{$data->quantity}}">

                                </div>

                                <button type="submit" class="button button-lg button-secondary button-zakaria"
                                >Sepete Ekle
                                </button>
                            </div>
                        </form><br><br>
                        <p>Ürün detaylarını aşağıda inceleyebilir ve dilerseniz ürüne yorum yapabilirsiniz.</p>


                        <hr class="hr-gray-100">

                    </div>
                </div>
            </div>

            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs nav-tabs-1 single-product-tabs">

                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-2"
                                                                    data-bs-toggle="tab">Detaylar</a></li>

                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-1"
                                                                    data-bs-toggle="tab">Yorumlar</a></li>

                        <!--  <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                                                     data-bs-toggle="tab">Delivery and payment</a></li>-->
                     </ul>
                 </div>

                 <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show " id="tabs-1-1">


                        @foreach($reviews as $rs)

                            <div class="box-comment">
                                <div class="unit flex-column flex-sm-row unit-spacing-md">
                                    <div class="unit-left"><a class="box-comment-figure"><img
                                                src="{{Storage::url($rs->user->profile_photo_path)}}" alt="" width="80" height="80"/></a>
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


                        <h4 class="text-transform-none fw-medium">Görüşlerinizi Belirtebilirsiniz.</h4>

                        <section class="section section-xxl bg-default text-md-left" style="margin-top: -50px">
                            <div class="container">
                                <div class="row row-40 justify-content-center justify-content-md-between">
                                    <div class="col-12">
                                        <div class="inset-xl-right-70">


                                            @livewire('review',['id'=>$data->id])


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>


                    <div class="tab-pane fade show active" id="tabs-1-2">
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


                    <!--   <div class="tab-pane fade" id="tabs-1-3">
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
                      </div>-->

                  </div>
              </div>
          </div>
      </section>

      </body>
@endsection
