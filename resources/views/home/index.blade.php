@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title')
    {{$setting->title}}
@endsection

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)


@section('content')

    @include('home._topmenu')

İÇERİK ALANI<br>
    İÇERİK ALANI<br>
    İÇERİK ALANI<br>
    İÇERİK ALANI<br>
    İÇERİK ALANI<br>
    İÇERİK ALANI<br>
    İÇERİK ALANI<br>
    İÇERİK ALANI<br>


    <!-- About Us-->
    <!-- <section class="section section-xl section-last bg-default">
         <div class="container">
             <h2 class="wow fadeScale">Featured products</h2>
             <!-- Owl Carousel-->
    <!--  <div class="owl-carousel owl-style-8" data-loop="false" data-items="1" data-sm-items="2" data-lg-items="3"
                 data-margin="30" data-dots="true" data-mouse-drag="false">
                <article class="box-info-modern wow slideInUp" data-wow-delay=".1s"><a
                        class="box-info-modern-figure link-img" href="about-us.html"><img
                            src="{{asset('assets')}}/images/about-1-370x276.jpg" alt="" width="370" height="276"/></a>
                    <h4 class="box-info-modern-title"><a href="about-us.html">Best pets clothing</a></h4><a
                        class="box-info-modern-link" href="about-us.html">more</a>
                </article>
                <article class="box-info-modern wow slideInUp"><a class="box-info-modern-figure link-img"
                                                                  href="about-us.html"><img
                            src="{{asset('assets')}}/images/about-2-370x276.jpg" alt="" width="370" height="276"/></a>
                    <h4 class="box-info-modern-title"><a href="about-us.html">Grooming supplies</a></h4><a
                        class="box-info-modern-link" href="about-us.html">more</a>
                </article>
                <article class="box-info-modern wow slideInUp" data-wow-delay=".1s"><a
                        class="box-info-modern-figure link-img" href="about-us.html"><img
                            src="{{asset('assets')}}/images/about-3-370x276.jpg" alt="" width="370" height="276"/></a>
                    <h4 class="box-info-modern-title"><a href="about-us.html">Pet food</a></h4><a
                        class="box-info-modern-link" href="about-us.html">more</a>
                </article>
            </div>
        </div>
    </section>
    <!-- New products-->
    <!-- <section class="section section-xl section-last bg-gray-1">
        <div class="container">
            <h2 class="inset-sm-20 inset-xl-50">What we offer</h2>
            <div class="row row-50">
                <div class="col-sm-6 col-md-4">
                    <article class="box-icon-classic text-sm-left">
                        <div class="unit flex-column flex-sm-row flex-md-column flex-xl-row">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon"><img src="{{asset('assets')}}/images/icon-01-50x50.png" alt="" width="50"
                                                                        height="50"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-classic-title"><a href="#">Grooming</a></h4>
                                <p class="box-icon-classic-text">Let your pets enjoy the first-class grooming services
                                    provided by our certified and experienced groomers.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4">
                    <article class="box-icon-classic text-sm-left">
                        <div class="unit flex-column flex-sm-row flex-md-column flex-xl-row">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon"><img src="{{asset('assets')}}/images/icon-02-50x42.png" alt="" width="50"
                                                                        height="42"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-classic-title"><a href="#">Pet hotel</a></h4>
                                <p class="box-icon-classic-text">At Puffles, we offer a safe &amp; clean environment
                                    with playtime, exercises, healthy meals &amp; more.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4">
                    <article class="box-icon-classic text-sm-left">
                        <div class="unit flex-column flex-sm-row flex-md-column flex-xl-row">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon"><img src="{{asset('assets')}}/images/icon-03-48x50.png" alt="" width="48"
                                                                        height="50"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-classic-title"><a href="#">Dog daycare</a></h4>
                                <p class="box-icon-classic-text">Our daytime guests enjoy playtime with other dogs in a
                                    safe and fun environment.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4">
                    <article class="box-icon-classic text-sm-left">
                        <div class="unit flex-column flex-sm-row flex-md-column flex-xl-row">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon"><img src="{{asset('assets')}}/images/icon-04-42x50.png" alt="" width="42"
                                                                        height="50"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-classic-title"><a href="#">Dog training</a></h4>
                                <p class="box-icon-classic-text">Our accredited pet trainers teach fun &amp; eﬀective
                                    group &amp; private classes through positive reinforcement.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4">
                    <article class="box-icon-classic text-sm-left">
                        <div class="unit flex-column flex-sm-row flex-md-column flex-xl-row">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon"><img src="{{asset('assets')}}/images/icon-05-42x50.png" alt="" width="42"
                                                                        height="50"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-classic-title"><a href="#">Veterinary care</a></h4>
                                <p class="box-icon-classic-text">Save your pet the discomfort of advanced illness &amp;
                                    help save you the stress &amp; expense of treatment.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4">
                    <article class="box-icon-classic text-sm-left">
                        <div class="unit flex-column flex-sm-row flex-md-column flex-xl-row">
                            <div class="unit-left">
                                <div class="box-icon-classic-icon"><img src="{{asset('assets')}}/images/icon-06-50x44.png" alt="" width="50"
                                                                        height="44"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <h4 class="box-icon-classic-title"><a href="#">Adoption</a></h4>
                                <p class="box-icon-classic-text">Whether you adopt online or at a Puffles store near
                                    you, you’re helping change the life of a pet in need.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA-->
    <!-- <section class="section section-xxl bg-primary context-dark bg-position-2 text-start"
             style="background-image: url('{{asset('assets')}}/images/bg-cta.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="wow fadeInRight">Hurry up!</h2>
                    <h4 class="wow fadeInRight" data-wow-delay=".1s">Save 50% on all items your first order</h4>
                    <p class="wow fadeInRight" data-wow-delay=".2s">Shop today to save big on your first order at
                        Puffles Store and get everything that your dog needs to stay healthy and happy.</p><a
                        class="button button-lg button-primary button-zakaria wow fadeInUp" href="shop-list.html">Shop
                        now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xxl bg-gray-1">
        <div class="container">
            <h2 class="wow fadeScale">Products</h2>
            <!-- Owl Carousel-->
    <!-- <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4"
          data-margin="30" data-dots="true">
         <!-- Product-->
    <!-- <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-01-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Deep Dish Cuddler</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price product-price-old">$30.00</div>
                            <div class="product-price">$23.00</div>
                        </div>
                    </div>
                    <span class="product-badge product-badge-sale">Sale</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!-- <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-02-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Zoo Fun Dog Collars</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$11.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!--    <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-03-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Glendan Dog Brush</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$17.00</div>
                        </div>
                    </div>
                    <span class="product-badge product-badge-new">New</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!-- <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-04-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Pet Food Bowl</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$12.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!--  <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-01-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Deep Dish Cuddler</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price product-price-old">$30.00</div>
                            <div class="product-price">$23.00</div>
                        </div>
                    </div>
                    <span class="product-badge product-badge-sale">Sale</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!--<article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-02-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Zoo Fun Dog Collars</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$11.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!-- <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-03-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Glendan Dog Brush</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$17.00</div>
                        </div>
                    </div>
                    <span class="product-badge product-badge-new">New</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!--  <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-04-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Pet Food Bowl</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$12.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!-- <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-01-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Deep Dish Cuddler</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price product-price-old">$30.00</div>
                            <div class="product-price">$23.00</div>
                        </div>
                    </div>
                    <span class="product-badge product-badge-sale">Sale</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!--  <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-02-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Zoo Fun Dog Collars</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$11.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!-- <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-03-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Glendan Dog Brush</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$17.00</div>
                        </div>
                    </div>
                    <span class="product-badge product-badge-new">New</span>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
                <!-- Product-->
    <!--    <article class="product">
                    <div class="product-body">
                        <div class="product-figure"><img src="{{asset('assets')}}/images/product-04-200x200.png" alt="" width="200"
                                                         height="200"/>
                        </div>
                        <h5 class="product-title"><a href="single-product.html">Pet Food Bowl</a></h5>
                        <div class="product-price-wrap">
                            <div class="product-price">$12.00</div>
                        </div>
                    </div>
                    <div class="product-button-wrap">
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-search74"
                                href="single-product.html"></a></div>
                        <div class="product-button"><a
                                class="button button-secondary button-zakaria fl-bigmug-line-shopping202"
                                href="cart-page.html"></a></div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- About Us-->
    <!--  <section class="section section-xl bg-default">
        <div class="container">
            <h2 class="wow fadeScale">About us</h2>
            <div class="row row-30 row-lg justify-content-center">
                <div class="col-sm-8 col-md-7 col-lg-6 wow fadeInLeft"><img src="{{asset('assets')}}/images/about-4-570x511.jpg" alt=""
                                                                            width="570" height="511"/>
                </div>
                <div class="col-md-10 col-lg-6 wow fadeInRight">
                    <!-- Bootstrap tabs-->
    <!-- <div class="tabs-custom tabs-jean" id="tabs-1">
         <!-- Tab panes-->
    <!-- <div class="tab-content">
         <div class="tab-pane fade show active" id="tabs-1-1">
             <div class="box-info-creative">
                 <h4 class="box-info-creative-title"><a href="#">Our Pet Shop’s mission lies in
                         providing quality care for pets.</a></h4>
                 <div class="box-info-creative-text">We want our clients and their pets to receive
                     the best service and goods, that’s why we work only with proven and respected
                     manufacturers.
                 </div>
                 <a class="link-classic box-info-creative-link" href="#">Read more</a>
             </div>
         </div>
         <div class="tab-pane fade" id="tabs-1-2">
             <div class="box-info-creative">
                 <h4 class="box-info-creative-title"><a href="#">Aiming to be the leading place for
                         pet care and shopping</a></h4>
                 <div class="box-info-creative-text">Our vision at Puffles is to become the #1 online
                     store for pets as well as the space where owners can get any kind of pet-related
                     services at an affordable price.
                 </div>
                 <a class="link-classic box-info-creative-link" href="#">Read more</a>
             </div>
         </div>
         <div class="tab-pane fade" id="tabs-1-3">
             <div class="box-info-creative">
                 <h4 class="box-info-creative-title"><a href="#">We always strive for being
                         professional and consistent</a></h4>
                 <div class="box-info-creative-text">Our work is defined by certain values that
                     include excellence, care, professionalism, innovation, and consistency. We aim
                     to provide the best pet care services to you.
                 </div>
                 <a class="link-classic box-info-creative-link" href="#">Read more</a>
             </div>
         </div>
     </div>
     <!-- Nav tabs-->
    <!--<div class="nav-tabs-wrap">
        <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                                        data-bs-toggle="tab">Our mission</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                                        data-bs-toggle="tab">our vision</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                                        data-bs-toggle="tab">our values</a></li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Out Team-->
    <!--<section class="section section-xxl bg-gray-1">
        <div class="container">
            <h2 class="wow fadeScale">Our team</h2>
            <!-- Owl Carousel-->
    <!--  <div class="owl-carousel owl-style-10" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30"
                 data-dots="true" data-mouse-drag="false">
                <article class="team-creative wow slideInUp" data-wow-delay=".1s">
                    <div class="team-creative-header"><a class="team-creative-figure" href="#"><img
                                src="{{asset('assets')}}/images/team-8-249x249.jpg" alt="" width="249" height="249"/></a>
                        <div class="team-creative-decor"></div>
                    </div>
                    <div class="team-creative-body">
                        <h4 class="team-creative-name"><a href="#">Richard Smith</a></h4>
                        <p class="team-creative-text">Senior salesman with 15 years of experience. He knows everything
                            about the pet products he offers.</p>
                        <ul class="list-inline team-creative-list-social list-social-2 list-inline-sm">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                        </ul>
                    </div>
                </article>
                <article class="team-creative wow slideInUp">
                    <div class="team-creative-header"><a class="team-creative-figure" href="#"><img
                                src="{{asset('assets')}}/images/team-9-249x249.jpg" alt="" width="249" height="249"/></a>
                        <div class="team-creative-decor"></div>
                    </div>
                    <div class="team-creative-body">
                        <h4 class="team-creative-name"><a href="#">Susan Anderson</a></h4>
                        <p class="team-creative-text">Mega positive shop assistant who is always ready to help you make
                            the right choice and charm you with a smile.</p>
                        <ul class="list-inline team-creative-list-social list-social-2 list-inline-sm">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                        </ul>
                    </div>
                </article>
                <article class="team-creative wow slideInUp" data-wow-delay=".1s">
                    <div class="team-creative-header"><a class="team-creative-figure" href="#"><img
                                src="{{asset('assets')}}/images/team-10-249x249.jpg" alt="" width="249" height="249"/></a>
                        <div class="team-creative-decor"></div>
                    </div>
                    <div class="team-creative-body">
                        <h4 class="team-creative-name"><a href="#">Steve Ruffalo</a></h4>
                        <p class="team-creative-text">Steve is the leading groomer at Puffles. He is always ready to
                            make your pet look and feel good.</p>
                        <ul class="list-inline team-creative-list-social list-social-2 list-inline-sm">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- CTA 2-->
    <!--<section class="section section-xxl section-inset-1 bg-image"
             style="background-image: url({{asset('assets')}}/images/bg-cta-1.jpg);">
        <div class="container box-cta">
            <h2 class="wow fadeInDown">Dog & cat treats</h2>
            <h4 class="wow fadeScale">Pamper your pets with our range of quality dog & cat treats</h4><a
                class="button button-lg button-primary wow fadeInUp btn-one" href="shop-list.html">Shop now</a>
        </div>
    </section>
    <!-- Out Clients-->
    <!-- <section class="section section-xxl bg-default">
         <div class="container">
             <h2 class="wow fadeScale">What Our Clients Say</h2>
             <!-- Owl Carousel-->
    <!--  <div class="owl-carousel owl-style-11" data-items="1" data-sm-items="2" data-margin="30" data-dots="true"
           data-autoplay="false">
          <!-- Quote Carly-->
    <!-- <article class="quote-carly quote-carly-1">
                    <div class="quote-carly-text"><img class="quote-carly-icon" src="{{asset('assets')}}/images/quote-37x29.png" alt=""
                                                       width="37" height="29"/>
                        <div class="q">The daycare service provided by Puffles is a real timesaver for me. I’m always
                            calm and happy that my dog is treated well.
                        </div>
                    </div>
                    <div class="quote-carly-footer">
                        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                            <div class="unit-left">
                                <div class="quote-carly-figure"><img src="{{asset('assets')}}/images/user-10-62x62.jpg" alt="" width="62"
                                                                     height="62"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="quote-carly-author">Brian Foster</div>
                                <div class="quote-carly-status">Client</div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Quote Carly-->
    <!-- <article class="quote-carly quote-carly-1">
                    <div class="quote-carly-text"><img class="quote-carly-icon" src="{{asset('assets')}}/images/quote-37x29.png" alt=""
                                                       width="37" height="29"/>
                        <div class="q">Puffles has the best selection of food and supplies for cats and dogs. I highly
                            recommend this site to every pet owner.
                        </div>
                    </div>
                    <div class="quote-carly-footer">
                        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                            <div class="unit-left">
                                <div class="quote-carly-figure"><img src="{{asset('assets')}}/images/user-11-62x62.jpg" alt="" width="62"
                                                                     height="62"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="quote-carly-author">Kathryn Evans</div>
                                <div class="quote-carly-status">Client</div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Quote Carly-->
    <!--  <article class="quote-carly quote-carly-1">
                    <div class="quote-carly-text"><img class="quote-carly-icon" src="{{asset('assets')}}/images/quote-37x29.png" alt=""
                                                       width="37" height="29"/>
                        <div class="q">I like the vast choice of cat food that this pet shop provides. Being a regular
                            client here for 3 years, I am 100% satisfied by Puffles.
                        </div>
                    </div>
                    <div class="quote-carly-footer">
                        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                            <div class="unit-left">
                                <div class="quote-carly-figure"><img src="{{asset('assets')}}/images/user-5-62x62.jpg" alt="" width="62"
                                                                     height="62"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="quote-carly-author">Evan Williams</div>
                                <div class="quote-carly-status">Client</div>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- Quote Carly-->
    <!--  <article class="quote-carly quote-carly-1">
                    <div class="quote-carly-text"><img class="quote-carly-icon" src="{{asset('assets')}}/images/quote-37x29.png" alt=""
                                                       width="37" height="29"/>
                        <div class="q">The supportive team of this online store helped me in choosing exactly what my
                            dachshund needs right now. Thank you!
                        </div>
                    </div>
                    <div class="quote-carly-footer">
                        <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                            <div class="unit-left">
                                <div class="quote-carly-figure"><img src="{{asset('assets')}}/images/user-6-62x62.jpg" alt="" width="62"
                                                                     height="62"/>
                                </div>
                            </div>
                            <div class="unit-body">
                                <div class="quote-carly-author">Emily jameson</div>
                                <div class="quote-carly-status">Client</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Latest News-->
    <!--  <section class="section section-xxl bg-gray-1">
          <div class="container">
              <h2 class="wow fadeScale">Latest News</h2>
              <div class="row row-lg row-30 justify-content-center">
                  <div class="col-sm-8 col-md-6 wow fadeInLeft">
                      <!-- Post Nikki 2-->
    <!--    <article class="post post-nikki post-nikki-2">
                        <div class="post-nikki-figure"><img src="{{asset('assets')}}/images/post-1-570x461.jpg" alt="" width="570"
                                                            height="461"/>
                        </div>
                        <div class="post-nikki-body">
                            <div>
                                <div class="post-nikki-time">
                                    <time datetime="2020-09-08">August 9, 2020</time>
                                </div>
                                <div class="post-nikki-title"><a href="blog-post.html">Deciphering your cat’s
                                        language</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6">
                    <div class="row row-30">
                        <div class="col-6 col-md-12 wow fadeInRight">
                            <!-- Post Nikki-->
    <!--    <article class="post post-nikki">
                                <div class="unit unit-spacing-lg flex-column flex-md-row align-items-center">
                                    <div class="unit-left"><a class="post-nikki-figure" href="blog-post.html"><img
                                                src="{{asset('assets')}}/images/post-2-270x215.jpg" alt="" width="270" height="215"/></a>
                                    </div>
                                    <div class="unit-body">
                                        <div class="post-nikki-time">
                                            <time datetime="2020-09-08">August 9, 2020</time>
                                        </div>
                                        <div class="post-nikki-title"><a href="blog-post.html">Easy tricks to teach your
                                                dog</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-6 col-md-12 wow fadeInRight">
                            <!-- Post Nikki-->
    <!--  <article class="post post-nikki">
                                <div class="unit unit-spacing-lg flex-column flex-md-row align-items-center">
                                    <div class="unit-left"><a class="post-nikki-figure" href="blog-post.html"><img
                                                src="{{asset('assets')}}/images/post-3-270x215.jpg" alt="" width="270" height="215"/></a>
                                    </div>
                                    <div class="unit-body">
                                        <div class="post-nikki-time">
                                            <time datetime="2020-09-08">August 9, 2020</time>
                                        </div>
                                        <div class="post-nikki-title"><a href="blog-post.html">8 tips for taking the
                                                perfect photo of your pet</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Clients-->
    <!-- <section class="section section-xl bg-primary">
        <div class="container">
            <div class="owl-carousel owl-style-2" data-items="2" data-sm-items="3" data-md-items="4" data-lg-items="5"
                 data-margin="30" data-dots="true"><a class="clients-classic" href="#"><img
                        src="{{asset('assets')}}/images/clients-1-120x114.png" alt="" width="120" height="114"/></a><a
                    class="clients-classic" href="#"><img src="{{asset('assets')}}/images/clients-2-105x118.png" alt="" width="105"
                                                          height="118"/></a><a class="clients-classic" href="#"><img
                        src="{{asset('assets')}}/images/clients-3-111x98.png" alt="" width="111" height="98"/></a><a class="clients-classic"
                                                                                                 href="#"><img
                        src="{{asset('assets')}}/images/clients-4-122x92.png" alt="" width="122" height="92"/></a><a class="clients-classic"
                                                                                                 href="#"><img
                        src="{{asset('assets')}}/images/clients-5-112x112.png" alt="" width="112" height="112"/></a></div>
        </div>
    </section>

@endsection
