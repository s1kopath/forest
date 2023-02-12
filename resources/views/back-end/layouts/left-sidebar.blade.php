@section('left-sidebar')
    <nav class="pcoded-navbar">
        <div class="nav-list">
            <div class="pcoded-inner-navbar main-menu">
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu active pcoded-trigger">
                        <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>                        
                    </li>
                </ul>
                {{-- <div class="pcoded-navigation-label">Forms</div> --}}
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-clipboard"></i>
                            </span>
                            <span class="pcoded-mtext">Stacking Rois</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="{{ route('add_stacking_rois') }}" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Add Stacking Rois</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-elements-add-on.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Add-On</span>
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
@endsection
