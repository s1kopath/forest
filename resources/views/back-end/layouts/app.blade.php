<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="_token" content="{{ csrf_token() }}" />

    <link rel="icon" href="{{ asset('back-end/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- icon preload -->
    <link rel="preload" href="{{ asset('front-end/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2">
    <link rel="preload" href="{{ asset('front-end/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2">
    <!-- font preload -->
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-regular.woff2') }}" as="font"
        type="font/woff2">
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-300.woff2') }}" as="font"
        type="font/woff2">
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-700.woff2') }}" as="font"
        type="font/woff2">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('back-end/bower_components/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('back-end/assets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/icon/feather/css/feather.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/icon/themify-icons/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/icon/icofont/css/icofont.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('back-end/assets/icon/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/bower_components/jstree/css/style.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/font-awesome-n.min.css') }}">

    <link rel="stylesheet" href="{{ asset('back-end/bower_components/chartist/css/chartist.css') }}" type="text/css"
        media="all">

    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/widget.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('back-end/assets/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back-end/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('back-end/assets/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back-end/assets/css/switchery.css') }}" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/pages.css') }}">

    {{-- cropper css --}}
    <link rel="stylesheet" href="{{ asset('back-end/assets/css/cropper.min.css') }}" />

    {{-- sweetalert2 js $ css --}}
    <script src="{{ asset('back-end/assets/js/sweetalert2@11.js') }}"></script>

    {{-- custom css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/css/custom-style.css') }}">

    @stack('css')
</head>

<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('back-end.layouts.nav-bar')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @yield('left-sidebar')

                    @yield('dashboard-extra')

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        @include('back-end.layouts.simple-message')

                                        @yield('page-content')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @if (auth()->user()->user_type == 'public')
        @include('back-end.layouts.mobile-bottom-nav-bar')
    @endif

    <script type="text/javascript" src="{{ asset('back-end/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/bower_components/popper.js/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('back-end/assets/pages/waves/js/waves.min.js') }}"></script>

    <script type="text/javascript"
        src="{{ asset('back-end/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>

    <script src="{{ asset('back-end/assets/pages/chart/float/jquery.flot.js') }}"></script>
    <script src="{{ asset('back-end/assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('back-end/assets/pages/chart/float/curvedLines.js') }}"></script>
    <script src="{{ asset('back-end/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>

    <script src="{{ asset('back-end/bower_components/chartist/js/chartist.js') }}"></script>

    <script src="{{ asset('back-end/assets/pages/widget/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('back-end/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('back-end/assets/pages/widget/amchart/light.js') }}"></script>

    <script src="{{ asset('back-end/assets/js/pcoded.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/js/vertical/vertical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/pages/dashboard/custom-dashboard.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/js/script.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/pages/advance-elements/swithces.js') }}"></script>
    <script
        src="{{ asset('back-end/assets/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>
    <script
        src="{{ asset('back-end/assets/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('back-end/asstes/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('back-end/asset/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back-end/assets/js/switchery.min.js') }}" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('back-end/assets/pages/file-upload/dropzone-amd-module.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('back-end/bower_components/modernizr/js/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/bower_components/modernizr/js/css-scrollbars.js') }}"></script>

    <script type="text/javascript" src="{{ asset('back-end/bower_components/jstree/js/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/pages/treeview/jquery.tree.js') }}"></script>
    <script src="{{ asset('back-end/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/js/script.js') }}"></script>

    {{-- cropper js --}}
    <script src="{{ asset('back-end/assets/js/cropper.min.js') }}"></script>

    @stack('js')
</body>

</html>
