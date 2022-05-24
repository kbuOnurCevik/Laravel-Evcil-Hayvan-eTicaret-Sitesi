@auth()
<section class="section section-sm bg-default text-md-left">
    <div class="container" style="margin-left: 80px">
        <h3>User Panel</h3>
        <div class="row row-sm">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="row row-30">
                    <div>
                        <ul class="list-marked d-inline-block d-inline-md-block">
                            <li><a href="{{route('myprofile')}}">My Profile</a></li>
                            <li><a href="{{route('user_products')}}">My Products</a></li>
                            <li><a href="{{route('user_orders')}}">My Orders</a></li>
                            <li><a href="{{route('user_shopcart')}}">My Shopcart</a></li>
                            <li><a href="{{route('logout')}}">Logout </a></li>
                            @php
                                $userRoles = Auth::user()->roles->pluck('name');
                            @endphp
                            @if($userRoles->contains('admin'))
                                <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endauth

