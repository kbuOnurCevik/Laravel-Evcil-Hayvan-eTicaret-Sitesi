@auth()
<section class="section section-sm bg-default text-md-left">
    <div class="container" style="margin-left: 100px">
        <h3><strong>Kullanıcı Paneli</strong></h3>
        <div class="row row-sm">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="row row-30">
                    <div>
                        <ul class="list-marked d-inline-block d-inline-md-block">
                            <li><a style="color: #0d0a0a" href="{{route('myprofile')}}">Profilim</a></li>
                            <li><a style="color: #0d0a0a" href="{{route('user_products')}}">Ürünlerim</a></li>
                            <li><a style="color: #0d0a0a" href="{{route('user_declarations')}}">İlanlarım</a></li>
                            <li><a style="color: #0d0a0a" href="{{route('user_orders')}}">Siparişlerim</a></li>
                            <li><a style="color: #0d0a0a" href="{{route('user_shopcart')}}">Sepetim</a></li>
                            <li><a style="color: #0d0a0a" href="{{route('myreviews')}}">Ürün Yorumlarım</a></li>
                            <li><a style="color: #0d0a0a" href="{{route('myreviewsdec')}}">İlan Yorumlarım</a></li>
                            @php
                                $userRoles = Auth::user()->roles->pluck('name');
                            @endphp
                            @if($userRoles->contains('admin'))
                                <li><a style="color: #0d0a0a" href="{{route('admin_home')}}" target="_blank">Admin Paneli</a></li>
                            @endif
                            <li><a style="color: #0d0a0a" href="{{route('logout')}}">Çıkış Yap</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endauth

