<style>
    .slimScrollBar {
        display: none !important;
    }
</style>

<nav class="navbar header-navbar pcoded-header" style="background: #091b65;">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            @if (auth()->user()->user_type == 'public')
                <a href="/" class="d-none d-lg-block">
                    <img class="img-fluid" src="{{ asset('back-end/img/WF.png') }}" alt="logo" width="100px">
                </a>
                <div class="d-block d-lg-none text-white pt-2">
                    @yield('page-title')
                </div>

                @if (request()->route()->getName() == 'public_dashboard')
                    <div class="d-block d-lg-none text-white">
                        Dashboard
                    </div>
                @endif
            @else
                <a href="/">
                    <img class="img-fluid" src="{{ asset('back-end/img/WF.png') }}" alt="logo" width="100px">
                </a>
            @endif

            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="fas fa-bars"></i>
            </a>
            <a href="#!" class="mobile-new d-block d-lg-none">
                <div>
                    <i class="feather icon-bell"></i>
                    <span class="badge bg-c-red">5</span>
                </div>
            </a>
        </div>
        <div class="navbar-container container-fluid text-white">
            <ul class="nav-right">
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt text-white"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-red">5</span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn"
                            data-dropdown-out="fadeOut">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-radius" src="{{ asset('back-end/assets/images/avatar-4.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">John Doe</h5>
                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                            consectetuer
                                            elit.</p>
                                        <span class="notification-time">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-radius" src="{{ asset('back-end/assets/images/avatar-4.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">Joseph William</h5>
                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                            consectetuer
                                            elit.</p>
                                        <span class="notification-time">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-radius" src="{{ asset('back-end/assets/images/avatar-4.jpg') }}"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">Sara Soudein</h5>
                                        <p class="notification-msg">Lorem ipsum dolor sit amet,
                                            consectetuer
                                            elit.</p>
                                        <span class="notification-time">30 minutes ago</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            {{-- onlu for public dashboard --}}
            @yield('dashboard-navbar')
            {{-- /onlu for public dashboard --}}

            <ul class="text-center nav-left" style="float: none!important">
                <h3 class="pt-4">
                    @yield('page-title')
                </h3>
            </ul>
        </div>
    </div>
</nav>
