<!doctype html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reeve Capital, an investment platform">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Global fast Coder">
    <meta name="theme-color" content="#091b65" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front-end/img/reeve-favicon.png') }}" type="image/x-icon">
    <!-- Touch icon -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front-end/img/apple-touch-icon.png') }}">
    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Include Styles -->
    @include('front-end.section.header.styles')

    <!-- Include Scripts for customizer, helper, analytics, config -->
    @include('front-end.section.header.header-scripts')

    <!-- Vendor Styles -->
    @stack('vendor-style')

    <!-- Page Styles -->
    @stack('page-style')

</head>

<body>
    <!-- page loader begin -->
    <div class="in-page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->

    <!-- header begin -->
    @include('front-end.section.header.nav-bar')
    <!-- header end -->

    <!-- breadcrumb content begin -->
    @yield('breadcrumb')
    <!-- breadcrumb content end -->

    <main>
        @yield('content')
    </main>

    <!-- footer begin -->
    @include('front-end.section.footer.footer')
    <!-- footer end -->

    <!-- to top begin -->
    <a class="to-top uk-visible@m" data-uk-scroll>
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- to top end -->

    <!-- javascript -->
    @include('front-end.section.footer.main-scripts')

    <!-- Page Script -->
    @stack('page-script')
</body>

</html>
