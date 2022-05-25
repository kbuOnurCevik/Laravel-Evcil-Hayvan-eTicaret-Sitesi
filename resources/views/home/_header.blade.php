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
                                <div class="unit-left"><span class="linear-icon icon linearicons-map-marker"></span>
                                </div>
                                <div class="unit-body"><a href="#">{{$setting->address}}</a></div>
                            </div>
                        </div>
                        <a class="button button-primary-outline button-sm button-icon button-icon-left" href="#"><span
                                class="icon mdi mdi-email-outline icon-size-m"></span>Get in touch</a>
                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span>
                        </button>
                        <!-- RD Navbar Brand-->
                    <!--  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark"
                                                                                             src="{{asset('assets')}}/images/logo-default-336x120.png"
                                                                                             alt="" width="168"
                                                                                             height="60"/></a>
                        </div>-->

                    </div>

                    @auth
                        <div class="rd-navbar-button">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">{{Auth::user()->name}}</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-menu rd-navbar-dropdown" style="margin-top: -40px">
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link"
                                                                    href="{{route('myprofile')}}">My Account</a></li>
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('logout')}}">Logout</a>
                                    </li>

                                </ul>
                            </li>
                        </div>
                    @endauth

                    @guest()
                        <div class="rd-navbar-button" style="padding-left: 40px"><a
                                class="button button-primary-outline button-sm button-icon button-icon-left"
                                href="#"><span
                                    class="icon mdi  icon-size-m"></span>Login</a>
                            <div class="rd-navbar-button"><a
                                    class="button button-primary-outline button-sm button-icon button-icon-left"
                                    href="#"><span
                                        class="icon mdi  icon-size-m"></span>Register</a>
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
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="/home">Home</a>
                            </li>

                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">Categories</a>
                                <!-- RD Navbar Megamenu-->
                                <ul class="rd-menu rd-navbar-megamenu">

                                    @foreach($parentCategories as $rs)
                                        <li class="rd-megamenu-item flex-grow-1 flex-shrink-0">
                                            <div class="rd-megamenu-title"><span
                                                    class="rd-megamenu-icon linear-icon mdi mdi-layers"></span><span
                                                    class="rd-megamenu-text">{{$rs->title}}</span></div>
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

                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('aboutus')}}">About Us</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('faq')}}">FAQ</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contact')}}">Contact</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('references')}}">References</a>

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
                    <div class="rd-navbar-basket-wrap"><strong>Sepetim</strong>

                        <a class="rd-navbar-basket fl-bigmug-line-shopping202" href="{{route('user_shopcart')}}">
                            <span>{{\App\Http\Controllers\ShopcartController::countshopcart()}}</span></a>

                    </div>

                </div>
                <div class="col-2" style="margin-left: 70%">
                    @include('home.message')
                </div>

            </div>

        </nav>
    </div>

</header>
