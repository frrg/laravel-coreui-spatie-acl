<header class="c-header c-header-light c-header-fixed c-header-with-subheader">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="fas fa-bars"></i>
    </button>
    <div class="row">
        <div class="col-sm-12">
            <a class="c-header-brand d-lg-none">
                <img src="{{ asset('assets/img/logo/logo-full.png') }}" style="max-width: 100px;" class="img-fluid">
            </a>
        </div>
    </div>
    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
        <i class="fas fa-bars"></i>
    </button>
    <ul class="c-header-nav ml-auto mr-4">

        <li class="c-header-nav-item d-md-down-none mx-2">
            Selamat datang, <b>{{ Auth::user()->name }}</b>
        </li>
        <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="c-avatar"><img class="c-avatar-img" src="{{ asset('assets/img/avatars/profile.svg') }}"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
                <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>

                <a class="dropdown-item mt-2" href="#"> <i class="c-icon fas fa-user mr-2"></i> Profile</a>
                <a class="dropdown-item mt-2" href="#"> <i class="c-icon fas fa-lock mr-2"></i> Ganti Password</a>
                <a class="dropdown-item mt-2" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sm fa-sign-out-alt mr-2"></i>
                    Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    {{ csrf_field() }}
                </form>

            </div>
        </li>
    </ul>
    @include('layouts.backend.partials.bcrum')
</header>