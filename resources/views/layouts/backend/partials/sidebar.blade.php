<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <div class="c-sidebar-brand d-lg-down-none">
    <div class="c-sidebar-brand-full" alt="Logo">
      <img src="{{ asset('assets/img/logo/logo-full.png') }}" width="118" height="46" alt="logo">
    </div>
    <div class="c-sidebar-brand-minimized" alt="logo">
      <img src="{{ asset('assets/img/logo/logo.png') }}" width="46" height="46" alt="logo">
    </div>
  </div>
  <ul class="c-sidebar-nav">

    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{ route('home') }}">
        <i class="c-sidebar-nav-icon fas fa-tachometer-alt"></i>
        Dashboard
        <span class="badge badge-info">NEW</span>
      </a>
    </li>
    <li class="c-sidebar-nav-title">Menu</li>

    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="#">
        <i class="c-sidebar-nav-icon fas fa-users"></i>
        Example Menu 1
        <span class="badge badge-info">NEW</span>
      </a>
    </li>

    <li class="c-sidebar-nav-divider"></li>
    <li class="c-sidebar-nav-title">Settings</li>
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <i class="c-sidebar-nav-icon fas fa-cog"></i>
        Settings
      </a>
      <ul class="c-sidebar-nav-dropdown-items">

        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="#" aria-expanded="false" target="_top">
            <i class="c-sidebar-nav-icon fa fa-user"></i>
            User
          </a>
        </li>

        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="#" aria-expanded="false">
            <i class="c-sidebar-nav-icon fa fa-university"></i>
            Role
          </a>
        </li>

      </ul>
    </li>

  </ul>
  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>