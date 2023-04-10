<footer>
    <div class="uk-section">
        <div class="uk-container uk-margin-top">
            <div class="uk-grid">


                <div class="uk-width-1-3@m">
                    <div class="">
                        <img src="{{ asset('front-end/img/reeve-logo-2.png') }}" alt="logo">
                    </div>
                    <style>
                        .social-icons {
                            padding: 14px;
                        }

                        .social-icons>a {
                            padding: 10px;
                        }
                    </style>
                    <!-- social media begin -->
                    <div class="uk-flex uk-flex-center social-icons">
                        <a href="https://www.facebook.com/" class="text-decoration-none">
                            <img src="{{ asset('front-end/img/icons/facebook-icon.png') }}" width="40px"
                                alt="REEVE">
                        </a>
                        <a href="https://twitter.com/" class="text-decoration-none">
                            <img src="{{ asset('front-end/img/icons/twitter-icon.png') }}" width="40px"
                                alt="REEVE">
                        </a>
                        <a href="https://www.instagram.com/" class="text-decoration-none">
                            <img src="{{ asset('front-end/img/icons/instagram-icon.png') }}" width="40px"
                                alt="REEVE">
                        </a>
                        <a href="#some-link" class="text-decoration-none">
                            <img src="{{ asset('front-end/img/icons/youtube-icon.png') }}" width="40px"
                                alt="REEVE">
                        </a>
                    </div>
                    <!-- social media end -->
                </div>


                <div class="uk-width-2-3@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid="">
                        <div>
                            <h5 style="color: #000"><b>Company</b></h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Return Policy</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 style="color: #000"><b>Popular Products</b></h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ route('staking') }}">Staking</a></li>
                                <li><a href="{{ route('forex_trading') }}">Forex Trading</li>
                                <li><a href="{{ route('forex_broker') }}">Forex Broker</a></li>
                                <li><a href="{{ route('e_commerce') }}">E-Commerce</a></li>
                            </ul>
                        </div>
                        <div>
                            <h5 style="color: #000"><b>Quick Links</b></h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ route('public_login') }}">Sign In</a></li>
                                <li><a href="{{ route('register') }}">Sign Up</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="{{ route('public_become_an_ib') }}">Become An IB</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        {{-- <hr class="uk-margin-large">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-2-3@m uk-text-small">
                    <ul class="uk-subnav uk-subnav-divider uk-visible@s" data-uk-margin="">
                        <li><a href="#">Risk disclosure</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Return policy</a></li>
                        <li><a href="#">Customer Agreement</a></li>
                        <li><a href="#">AML policy</a></li>
                    </ul>
                    <p class="copyright-text">©2023 Development with ❤️ by Global Fast Coder🌎. All Rights Reserved.</p>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-right uk-visible@m">
                    <span class="uk-margin-right">
                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                            data-src="{{ asset('front-end/img/in-footer-mastercard.svg') }}" alt="footer-payment"
                            width="34" height="21" data-uk-img="">
                    </span>
                    <span>
                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                            data-src="{{ asset('front-end/img/in-footer-visa.svg') }}" alt="footer-payment"
                            width="50" height="16" data-uk-img="">
                    </span>
                </div>
            </div>
        </div> --}}

    </div>
</footer>
