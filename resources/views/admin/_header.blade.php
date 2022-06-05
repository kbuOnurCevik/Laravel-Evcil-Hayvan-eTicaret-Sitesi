<!-- TopBar -->
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background-color: #0f6848">
    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                @if (Auth::user()->profile_photo_path)
                    <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" class="img-profile rounded-circle" height="40" width="40"
                         style="border-radius: 10px" alt="User Image">
                @endif

                <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()->name}}</span>

            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                @auth()
                    <a href="{{route('logout')}}" class="dropdown-item">
                        @endauth
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
            </div>
        </li>
    </ul>
</nav>
<!-- Topbar -->
