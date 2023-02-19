<header>
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a class="uk-logo" href="/">
                            <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                data-src="{{ asset('front-end/img/user/header-logo-Uw3Zp9.svg') }}" alt="logo"
                                width="146" height="40" data-uk-img>
                        </a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('markets') }}">Markets</a>
                            </li>
                            <li><a href="#">Company<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="education.html">Education</a>
                            </li>
                            <li><a href="#">Resources<i class="fas fa-chevron-down"></i></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a href="https://getuikit.com/docs/introduction">Documentation<i
                                                            class="fas fa-square-arrow-up-right fa-sm"></i></a></li>
                                                <li><a href="help-center.html">Help Center</a></li>
                                                <li><a href="customers.html">Customers</a></li>
                                                <li><a href="roadmap.html">Roadmap</a></li>
                                                <li><a href="legal-docs.html">Legal Docs<i
                                                            class="fas fa-gavel fa-sm"></i></a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                                <li><a class="uk-disabled" href="#">Adipiscing elit sed do
                                                        eiusmod incididunt ut labore dolore magna lorem ipsum sit
                                                        dolor amet consectetur</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
