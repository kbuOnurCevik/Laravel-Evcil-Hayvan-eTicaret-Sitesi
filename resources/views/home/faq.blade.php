@extends('layouts.home')

@section('title','Frequently Asked Question')

@section('content')
    <body>
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{asset('assets')}}/images/breadcrumbs-bg.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Frequently Asked Question</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">FAQ</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Tabs and Accordion-->
    <section class="section section-xl bg-default text-md-left">
        <div class="container">
            <div class="row row-30 justify-content-center justify-content-xl-between">
                <div class="col-md-12">
                    <h3>Sık Sorulan Sorular</h3>


                    <!-- Bootstrap collapse-->
                        <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                             aria-multiselectable="false">

                        @foreach($datalist as $rs)
                            <!-- Bootstrap card-->
                            <article class="card card-custom card-corporate">
                                <div class="card-header" role="tab">
                                    <div class="card-title"><a id="accordion1-card-head-vbwxjdra"
                                                               data-bs-toggle="collapse" data-parent="#accordion1"
                                                               href="#accordion1-card-body-crirqsce"
                                                               aria-controls="accordion1-card-body-crirqsce"
                                                               aria-expanded="true" role="button">{{$rs->question}}
                                            <div class="card-arrow">
                                                <div class="icon"></div>
                                            </div>
                                        </a></div>
                                </div>
                                <div class="collapse show" id="accordion1-card-body-crirqsce"
                                     aria-labelledby="accordion1-card-head-vbwxjdra" data-parent="#accordion1"
                                     role="tabpanel">
                                    <div class="card-body">
                                        <p>{!! $rs->answer !!}</p>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>

                </div>
            </div>
        </div>
    </section>


    </body>
@endsection
