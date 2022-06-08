@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<!-- Page Footer-->
<footer class="section footer-modern">
    <div class="footer-modern-body section-xl">
        <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between">
         
                <div class="col-sm-6 col-md-7 col-lg-5 wow fadeInRight" data-wow-delay=".1s">
                    <h5 class="footer-modern-title">HIZLI LİNKLER</h5>
                    <ul class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block">
                        <li><a href="{{route('aboutus')}}">HAKKIMIZDA</a></li>
                        <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
                        <li><a href="{{route('references')}}">MARKALARIMIZ</a></li>
                        <li><a href="{{route('faq')}}">SSS</a></li>

                    </ul>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
                    <h5 class="footer-modern-title">BİZE ULAŞ</h5>
                    <ul class="contacts-creative">
                        <li>
                            <div class="unit unit-spacing-sm flex-column flex-md-row">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker linear-icon"></span></div>
                                <div class="unit-body"><a href="#">{{$setting->address}}</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="unit unit-spacing-sm flex-column flex-md-row">
                                <div class="unit-left"><span class="icon mdi mdi-phone linear-icon"></span></div>
                                <div class="unit-body"><a href="tel:#">{{$setting->phone}}</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="unit unit-spacing-sm flex-column flex-md-row">
                                <div class="unit-left"><span class="icon mdi mdi-email-outline linear-icon"></span>
                                </div>
                                <div class="unit-body"><a href="mailto:#">{{$setting->email}}</a></div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline list-social-3 list-inline-sm ">

                        <li>@if ($setting->facebook != null) <a class="icon mdi mdi-facebook  icon-xxs"
                                                                href="{{$setting->facebook}}" target="_blank"></a>@endif
                        </li>
                        <li>@if ($setting->facebook != null) <a class="icon mdi mdi-twitter  icon-xxs"
                                                                href="{{$setting->twitter}}" target="_blank"></a>@endif
                        </li>
                        <li>@if ($setting->facebook != null) <a class="icon mdi mdi-instagram  icon-xxs"
                                                                href="{{$setting->instagram}}"
                                                                target="_blank"></a>@endif</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-modern-panel text-center">
        <div class="container">
            <p class="rights"><span>&copy;&nbsp;</span><span
                    class="copyright-year"></span><span>&nbsp;</span><span>{{$setting->company}}</span><span>. All Rights Reserved.&nbsp;</span></p>
        </div>
    </div>
</footer>
<script src="{{asset('assets')}}/js/core.min.js"></script>
<script src="{{asset('assets')}}/js/script.js"></script>
