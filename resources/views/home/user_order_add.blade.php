@extends('layouts.home')

@section('title','Order Products')

@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Order</h2>

                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Blank</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section checkout form-->
    <section class="section section-sm section-first bg-default text-md-left">
        <div class="container">
            <form action="{{route('user_order_store')}}" method="post">
                @csrf
                <div class="row row-50 justify-content-center">

                    <div class="col-md-10 col-lg-6">
                        <h3 class="fw-medium">Billing Address</h3>
                        <div class="row row-30">
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>İsim Soyisim Giriniz</strong></p>
                                    <input class="form-input " value="{{Auth::user()->name}}" id="nameid" type="text"
                                           name="name"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>Email Giriniz</strong></p>
                                    <input class="form-input " value="{{Auth::user()->email}}" id="emailid" type="email"
                                           name="email"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>Adres Giriniz</strong></p>
                                    <input class="form-input " value="{{Auth::user()->address}}" id="addressid"
                                           type="text" name="address"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>Tel No Giriniz</strong></p>
                                    <input class="form-input " value="{{Auth::user()->phone}}" id="phoneid" type="text"
                                           name="phone"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 col-lg-6">
                        <h3 class="fw-medium">Card Details</h3>
                        <div class="row row-30">
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>Kart İsim ve Soyisim</strong></p>
                                    <input class="form-input " value="{{Auth::user()->name}}" id="phoneid" type="text"
                                           name="cardname"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>Kart No</strong></p>
                                    <input class="form-input "  id="cardnumberid" type="number"
                                           name="cardnumber"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>Geçerli Kart Tarihi</strong></p>
                                    <input class="form-input " id="datesid" type="text"
                                           name="dates"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <p style="color: #0d0a0a"><strong>CVV No</strong></p>
                                    <input class="form-input " id="keyid" type="text"
                                           name="key"/>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <input class="form-input " value="{{$total}}" type="hidden"
                                           name="total"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-medium text-center"> Toplam Tutar : {{$total}}₺</h3>
                    <button type="submit" style="background-color: red" class="col-2 button button-md button-primary button-zakaria"  >Place
                        Order</button>

                </div>

            </form>
        </div>
    </section>






    </body>
@endsection
