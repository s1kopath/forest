<!doctype html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Forest, an investment platform">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Global fast Coder">
    <meta name="theme-color" content="#091b65" />
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
    <title>Sign in - {{ env('APP_NAME') }}</title>
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
            <div class="uk-container uk-container-expand"
                style="background-image: url({{ asset('front-end/img/darkbg.png') }}); background-repeat: no-repeat; background-size: cover;">
                <div class="uk-grid uk-flex uk-flex-center" data-uk-height-viewport="expand: true">
                    <div class="uk-width-1-2@l uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="uk-text-center in-padding-horizontal@s">
                                    <a class="uk-logo" href="/">
                                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                            data-src="{{ asset('front-end/img/WF.png') }}" alt="logo"
                                            width="146" height="40" data-uk-img>
                                    </a>
                                    <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">
                                        Sign up with your regular account
                                    </p>

                                    @if (session('error'))
                                        <div class="alert bg-alert text-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert bg-alert text-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif

                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px"
                                                id="ref_authed">
                                                @if (session('referer_id'))
                                                    {{ session('referer_id') ? '✔️' : '❌' }}
                                                @else
                                                    <i class="fas fa-user"></i>
                                                @endif
                                            </span>

                                            <input class="uk-input uk-border-rounded" type="text"
                                                placeholder="Enter User ID" name="refer_username"
                                                value="{{ session('referer_id') ? session('referer_id') : '' }}"
                                                id="refer_username">
                                        </div>

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" type="text"
                                                placeholder="Enter Full Name" name="name" required>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" type="text"
                                                placeholder="Choose Username" name="username" required>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" type="email"
                                                placeholder="Your Email Address" name="email" required>
                                        </div>

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" type="password"
                                                placeholder="Password" name="password" required>
                                        </div>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" type="password"
                                                placeholder="Confirm Password" name="password_confirmation" required>
                                        </div>
                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                            <label>
                                                <input type="checkbox" value="" required>
                                                <span class="text-inverse">
                                                    I read and accept
                                                    <a href="/">
                                                        Terms &amp; Conditions.
                                                    </a>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="text-inverse">
                                                    Send me the
                                                    <a href="/">Newsletter</a>
                                                    weekly.
                                                </span>
                                            </label>
                                        </div>

                                        <div class="uk-margin-small uk-width-1-1">
                                            <button type="submit"
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left">
                                                Sign up now
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
                                    <div class="uk-margin-small uk-width-expand uk-text-small">
                                        <label class="uk-align-right">
                                            <a class="uk-link-reset" href="{{ route('forget_password') }}">
                                                Recover account?
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

    <script type="text/javascript" src="{{ asset('back-end/bower_components/jquery/js/jquery.min.js') }}"></script>
    <script>
        var ref_user = $("#refer_username");

        ref_user.keyup(function() {
            var value = this.value;

            if (value != '') {
                $.ajax({
                    type: "get",
                    url: "/api/ref-auth/" + value,
                    success: function(response) {

                        if (response) {
                            $("#ref_authed").html('✔️');
                        } else {
                            $("#ref_authed").html('❌');
                        }
                    }
                });
            }
        });
    </script>
</body>

</html>
