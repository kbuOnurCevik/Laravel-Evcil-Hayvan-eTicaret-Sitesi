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
                                    <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{route('myprofile')}}">My Account</a></li>
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
                            <li class="rd-nav-item"><a class="rd-nav-link" href="/fag">FAQ</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('contact')}}">Contact</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#">References</a>

                        </ul>

                    </div>
                    <div class="rd-navbar-main-element">
                        <!-- RD Navbar Search-->
                        <div class="rd-navbar-search rd-navbar-search-2">
                            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3"
                                    data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                            <form class="rd-search" action="search-results.html"
                                  data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">Search...</label>
                                    <input class="rd-navbar-search-form-input form-input"
                                           id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    <button class="rd-search-form-submit fl-bigmug-line-search74"
                                            type="submit"></button>
                                </div>
                            </form>
                        </div>
                        <!-- RD Navbar Basket-->
                        <div class="rd-navbar-basket-wrap">
                            <button class="rd-navbar-basket fl-bigmug-line-shopping202"
                                    data-rd-navbar-toggle=".cart-inline"><span>2</span></button>
                            <div class="cart-inline">
                                <div class="cart-inline-header">
                                    <h5 class="cart-inline-title">In cart:<span> 2</span> Products</h5>
                                    <h6 class="cart-inline-title">Total price:<span> $34</span></h6>
                                </div>
                                <div class="cart-inline-body">
                                    <div class="cart-inline-item">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left"><a class="cart-inline-figure"
                                                                      href="single-product.html"><img
                                                        src="{{asset('assets')}}/images/product-mini-1-100x90.jpg"
                                                        alt="" width="100" height="90"/></a></div>
                                            <div class="unit-body">
                                                <h6 class="cart-inline-name"><a href="single-product.html">Deep Dish
                                                        Cuddler</a></h6>
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <div class="table-cart-stepper">
                                                            <input class="form-input" type="number" data-zeros="true"
                                                                   value="1" min="1" max="1000"/>
                                                        </div>
                                                        <h6 class="cart-inline-title">$23.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-inline-item">
                                        <div class="unit unit-spacing-sm align-items-center">
                                            <div class="unit-left"><a class="cart-inline-figure"
                                                                      href="single-product.html"><img
                                                        src="{{asset('assets')}}/images/product-mini-2-100x90.jpg"
                                                        alt="" width="100" height="90"/></a></div>
                                            <div class="unit-body">
                                                <h6 class="cart-inline-name"><a href="single-product.html">Zoo Fun Dog
                                                        Collars</a></h6>
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <div class="table-cart-stepper">
                                                            <input class="form-input" type="number" data-zeros="true"
                                                                   value="1" min="1" max="1000"/>
                                                        </div>
                                                        <h6 class="cart-inline-title">$11.00</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-inline-footer">
                                    <div class="group-sm"><a class="button button-primary-outline button-zakaria"
                                                             href="cart-page.html">Go to cart</a><a
                                            class="button button-primary button-zakaria"
                                            href="checkout.html">Checkout</a></div>
                                </div>
                            </div>
                        </div>
                        <a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202 rd-navbar-fixed-element-2"
                           href="cart-page.html"><span>2</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
