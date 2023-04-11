<footer>
    <div class="uk-section pb-0">
        <div class="uk-container uk-margin-top">
            <div class="uk-grid">
                <div class="uk-width-1-3@m">
                    <div class="" style="margin-left: 0">
                        <img src="{{ asset('front-end/img/reeve-logo-2.png') }}" alt="logo" width="146" height="40">
                    </div>
                    <style>
                        .social-icons {
                            padding: 14px 14px 14px 2px;
                        }

                        .social-icons>a {
                            padding: 10px;
                        }
                    </style>
                    <!-- social media begin -->
                    <div class="social-icons">
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
        <hr>
        <div class="uk-container" style="padding-bottom: 12px;">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-2-3@m uk-text-small">                    
                    <h6 class="copyright-text" style="color: black">Reeve Capital 2023. All Rights Reserved.</h6>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-right uk-visible@m">
                    <span class="uk-margin-right">
                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                            data-src="{{ asset('front-end/img/icons/pngwing.com (1).png') }}" alt="footer-payment"
                            width="50" data-uk-img="">
                    </span>
                    <span class="uk-margin-right">
                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                            data-src="{{ asset('front-end/img/icons/pngwing.com (2).png') }}" alt="footer-payment"
                            width="60" data-uk-img="">
                    </span>
                    <span class="uk-margin-right">
                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                            data-src="{{ asset('front-end/img/icons/pngwing.com.png') }}" alt="footer-payment"
                            width="45" data-uk-img="">
                    </span>
                    <span class="uk-margin-right">
                        <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                            data-src="{{ asset('front-end/img/icons/pngwing.com.png(3).png') }}" alt="footer-payment"
                            width="60" data-uk-img="">
                    </span>
                </div>
            </div>
        </div>

    </div>
</footer>
