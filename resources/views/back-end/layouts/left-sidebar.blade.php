@section('left-sidebar')
    @php
        $route_name = request()
            ->route()
            ->getName();

        $url = url()->current();
        $urlArray = explode('-', $url);
        $lastElement = end($urlArray);
    @endphp
    @if (auth()->user()->user_type == 'admin')
        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'dashboard' ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">ROI</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'rois' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Stacking ROI</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_stacking_rois' ? 'active' : '' }}">
                                    <a href="{{ route('add_stacking_rois') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Stacking ROI</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_stacking_rois' ? 'active' : '' }}">
                                    <a href="{{ route('manage_stacking_rois') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Stacking ROI</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">ROYALITY</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'royality' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Ib Royality</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_ib_royality' ? 'active' : '' }}">
                                    <a href="{{ route('add_ib_royality') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Ib Royality</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_ib_royality' ? 'active' : '' }}">
                                    <a href="{{ route('manage_ib_royality') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Ib Royality</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">GIFT</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'gift' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Gift</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_gift' ? 'active' : '' }}">
                                    <a href="{{ route('add_gift') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Gift</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_gift' ? 'active' : '' }}">
                                    <a href="{{ route('manage_gift') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Gift</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">IB</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'ib' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Ib</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_ib' ? 'active' : '' }}">
                                    <a href="{{ route('add_ib') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add IB</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_ib' ? 'active' : '' }}">
                                    <a href="{{ route('manage_ib') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage IB</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">CONTEST</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'contest' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Monthly Contest</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_monthly_contest' ? 'active' : '' }}">
                                    <a href="{{ route('add_monthly_contest') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Contest</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_monthly_contest' ? 'active' : '' }}">
                                    <a href="{{ route('manage_monthly_contest') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Contest</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    {{-- <div class="pcoded-navigation-label">Forms</div>
                    <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-clipboard"></i>
                            </span>
                            <span class="pcoded-mtext">Form</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="form-elements-component.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Components</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-elements-add-on.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Add-On</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="form-select.html" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-feather"></i>
                            </span>
                            <span class="pcoded-mtext">Form Select</span>
                        </a>
                    </li>
                </ul>  --}}
                </div>
            </div>
        </nav>
    @endif

    @if (auth()->user()->user_type == 'public')
        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <div class="d-flex justify-content-between">
                        <div class="col-4">
                            <img class="img-fluid rounded-lg shadow"
                                src="{{ asset('back-end/assets/images/avatar-4.jpg') }}" alt="forest">
                        </div>
                        <div class="col-8 text-white" style="overflow-wrap: break-word">
                            <span class="font-weight-bold">Hello, {{ auth()->user()->username }}</span>
                            <br>
                            <small>{{ auth()->user()->email }}</small>
                            <br>
                            <span class="font-weight-bold text-primary">Verified Account</span>

                        </div>
                    </div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_dashboard' ? 'active' : '' }}">
                            <a href="{{ route('public_dashboard') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_profile' ? 'active' : '' }}">
                            <a href="{{ route('public_profile') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-cog"></i></span>
                                <span class="pcoded-mtext">Profile</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_fund' ? 'active' : '' }}">
                            <a href="{{ route('public_fund') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-briefcase"></i></span>
                                <span class="pcoded-mtext">Funds</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_history' ? 'active' : '' }}">
                            <a href="{{ route('public_history') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-history"></i></span>
                                <span class="pcoded-mtext">History</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_referrals' ? 'active' : '' }}">
                            <a href="{{ route('public_referrals') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                <span class="pcoded-mtext">Referrals</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_downloads' ? 'active' : '' }}">
                            <a href="{{ route('public_downloads') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-cloud-download-alt"></i></span>
                                <span class="pcoded-mtext">Downloads</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_become_an_ib' ? 'active' : '' }}">
                            <a href="{{ route('public_become_an_ib') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-paw"></i></span>
                                <span class="pcoded-mtext">Become an IB</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="{{ route('logout') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="pcoded-mtext">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    @endif
@endsection
