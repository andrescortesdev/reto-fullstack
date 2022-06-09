<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-end mb-0">

            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="https://tif-picture.herokuapp.com/svg?name={{ Auth::user()->name }}&bg=00897b" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1">
                        {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a onclick="document.getElementById('form-logout').submit()" href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Cerrar sesion</span>
                    </a>

                </div>
            </li>
            <form action="{{ route('logout') }}" method="post" id="form-logout">
                 @csrf
            </form>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ route('cursos.index') }}" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{ url('img/laravel-brand.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ url('img/laravel-brand.png') }}" alt="" height="20">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- end Topbar -->
