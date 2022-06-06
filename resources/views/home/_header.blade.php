@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Page Header-->
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
             data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
             data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
             data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
             data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="120px"
             data-xxl-stick-up-offset="140px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                 data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <div class="rd-navbar-collapse">
                        <div class="contacts-ruth">
                            <div class="unit unit-spacing-xs align-items-center">
                                <div class="unit-left"><span class="linear-icon icon linearicons-map-marker" style="color: #0d0a0a"></span>
                                </div>
                                <div class="unit-body"><a href="http://maps.google.co.uk/maps?q=41.20637281426837,%2032.65963673582528" target="_blank">{{$setting->address}}</a></div>
                            </div>
                        </div>

                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                      <div class="rd-navbar-brand"><a class="brand"><img class="brand-logo-dark"
                                                                                             src="{{asset('assets')}}/images/epati.png"
                                                                                             alt="" width="168"
                                                                                             height="60"/></a>
                        </div>

                    </div>

                    @auth
                        <div class="rd-navbar-button">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">{{Auth::user()->name}}</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-menu rd-navbar-dropdown" style="margin-top: -40px">
                                    <li class="rd-dropdown-item"><a style="color: #0d0a0a" class="rd-dropdown-link"
                                                                    href="{{route('myprofile')}}">Hesabım</a></li>
                                    <li class="rd-dropdown-item"><a style="color: #0d0a0a" class="rd-dropdown-link" href="{{route('logout')}}">Çıkış Yap</a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    @endauth

                    @guest()
                        <div class="rd-navbar-button" style="padding-left: 40px"><a
                                class="button button-primary-outline button-sm button-icon button-icon-left"
                                href="{{route('home_login')}}"><span
                                    class="icon mdi  icon-size-m"></span>Giriş Yap</a>
                            <div class="rd-navbar-button"><a
                                    class="button button-primary-outline button-sm button-icon button-icon-left"
                                    href="/register"><span
                                        class="icon mdi  icon-size-m"></span>Kaydol</a>
                            </div>
                        </div>
                    @endguest

                </div>
            </div>


            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="/home">Anasayfa</a>
                            </li>

                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">ÜRÜNLER</a>
                                <!-- RD Navbar Megamenu-->
                                <ul class="rd-menu rd-navbar-megamenu" style="padding-bottom: 10px">

                                    @foreach($parentCategories as $rs)
                                        <li class="rd-megamenu-item flex-grow-1 flex-shrink-0">
                                            <div class="rd-megamenu-title"><span
                                                    class="rd-megamenu-icon linear-icon mdi mdi-layers"></span><span
                                                    class="rd-megamenu-text"><a style="color: #0d0a0a"
                                                        href="{{route('productlist',['search'=>$rs->keywords])}}">{{$rs->title}}</a></span>
                                            </div>
                                            <ul class="rd-megamenu-list">
                                                @if(count($rs->children))
                                                    <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                                                         href="#">@include('home.categorytree',['children' => $rs->children])</a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('declarationlist')}}">İLANLAR</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contact')}}">İLETİŞİM</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('faq')}}">SSS</a>


                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">Sayfalar</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-menu rd-navbar-dropdown">
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('aboutus')}}">HAKKIMIZDA</a></li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('references')}}">MARKALARIMIZ</a></li>
                                </ul>
                            </li>



                        </ul>

                    </div>


                    <div class="rd-navbar-main-element">

                        <!-- RD Navbar Search-->
                        <div class="rd-navbar-search">

                            <form class="to-search" action="{{route('getproduct')}}"
                                  method="post">
                                @csrf
                                @livewire('search')


                            </form>
                            @section('footerjs')
                                @livewireScripts
                            @endsection
                        </div>

                    </div>

                    <!-- RD Navbar Basket-->
                    <div class="rd-navbar-basket-wrap"><strong style="color: #0d0a0a">Sepetim</strong>

                        <a class="rd-navbar-basket fl-bigmug-line-shopping202" href="{{route('user_shopcart')}}">
                            <span style="color: #0d0a0a">{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span></a>

                    </div>

                </div>
                <div class="col-2" style="margin-left: 70%">
                    @include('home.message')
                </div>

            </div>

        </nav>
    </div>

</header>
