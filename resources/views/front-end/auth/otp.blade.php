<!doctype html>
<html lang="en">
@php
    
    use Carbon\Carbon;
    use App\Models\Otp;
    $startTime = Carbon::now();
    $endTime = $startTime->copy()->addMinutes(30);
    $diff = $endTime->diffInSeconds($startTime); 
@endphp
<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Forest, an investment platform">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Global fast Coder">
    <meta name="theme-color" content="#FCB42D" />
    <!-- critical preload -->
    <link rel="preload" href="{{ asset('front-end/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front-end/css/style.css') }}" as="style">
    <!-- icon preload -->
    <link rel="preload" href="{{ asset('front-end/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="preload" href="{{ asset('front-end/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <!-- font preload -->
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-regular.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-300.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-700.woff2') }}" as="font"
        type="font/woff2" crossorigin>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front-end/img/favicon-32x32.png') }}" type="image/x-icon">
    <!-- Touch icon -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front-end/img/apple-touch-icon.png') }}">
    <title>Otp - {{ env('APP_NAME') }}</title>
</head>

<body>
    <!-- page loader begin -->
    <div class="in-page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-section-secondary uk-light uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url({{ asset('front-end/img/in-signin-image.jpg') }});">

                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="uk-text-center in-padding-horizontal@s">
                                    <a class="uk-logo" href="/">
                                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                            data-src="{{ asset('front-end/img/WF.png') }}" alt="logo"
                                            width="146" height="40" data-uk-img>
                                    </a>
                                    <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">
                                        Verify Your OTP
                                    </p>
                                    @if(session('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('message') }}
                                        <div>
                                    @endif
                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" action="{{ route('otp_verify') }}" method="POST">
                                        @csrf
                                        @dd(session('is_suspended'))
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" type="text"
                                                placeholder="Enter Your Otp"class="form-control @error('otp') is-invalid @enderror" name="otp" required>
                                            <span id="countdown"></span>
                                            @error('otp')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            @if(session()->get('error'))
                                                <div class="text-danger">{{ session()->get('error') }}</div>
                                            @endif
                                        </div>                                        
                                        {{-- @if (session('referer_id'))
                                            <span>
                                                * Referer: {{ session('referer_name') }}
                                            </span>
                                            <input type="hidden" name="referer_id"
                                                value="{{ session('referer_id') }}">
                                        @endif --}}

                                        <div class="uk-margin-small uk-width-1-1">
                                            <button type="submit"
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left">
                                                Verify Otp
                                            </button>
                                        </div>
                                    </form>
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-left">
                                            Already have an account? <a href="{{ route('public_login') }}">
                                                Login here
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- javascript -->
    <script src="{{ asset('front-end/js/vendors/uikit.min.js') }}"></script>
    <script src="{{ asset('front-end/js/utilities.min.js') }}"></script>
    <script src="{{ asset('front-end/js/config-theme.js') }}"></script>
    <script>
        var countdown = {{$diff}};
        var interval = setInterval(function() {
            var minutes = Math.floor(countdown / 60);
            var seconds = countdown % 60;
            
            document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s ";            
            countdown--;           
            if (countdown < 0) {
                clearInterval(interval);
                document.getElementById("countdown").innerHTML = "Time's up!";
            }
        }, 1000);
    </script>      
</body>

</html>
