<header>
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a class="uk-logo" href="/">
                            <img src="{{ asset('front-end/img/reeve-logo-3.png') }}" alt="logo"
                                width="146" height="40" data-uk-img>
                        </a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="#markets">Markets</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        @if (auth()->user())
                            <a href="{{ route('public_dashboard') }}" class="uk-button uk-button-text">
                                Dashboard
                                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                            </a>
                            <a href="{{ route('logout') }}" class="uk-button uk-button-primary">
                                Log Out
                                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                            </a>
                        @else
                            <a href="{{ route('public_login') }}" class="uk-button uk-button-text">
                                Log in
                                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                            </a>
                            <a href="{{ route('register') }}" class="uk-button uk-button-primary">
                                Sign up
                                <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
