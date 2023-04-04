@extends('front-end.master')

@section('content')
    <!-- slideshow content begin -->
    <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
        <div id="particles-js" class="uk-light in-slideshow uk-background-contain"
            data-src="{{ asset('front-end/img/in-equity-decor-1.svg') }}" data-uk-img data-uk-slideshow>
            <hr>
            <ul class="uk-slideshow-items">
                <li class="uk-flex uk-flex-middle">
                    <div class="uk-container">
                        <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@s in-slide-text">
                                <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                        class="uk-label uk-label-success in-label-small">New</span>Trade the
                                    markets directly with
                                    leading trading platforms.</p>
                                <h1 class="uk-heading-small">Demo <span class="in-highlight">page</span>
                                    1.</h1>
                                <p class="uk-text-lead uk-visible@m">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Sint fugit expedita inventore quos asperiores quis officiis quibusdam laudantium?
                                    Nobis a odio culpa praesentium? Est eos commodi quisquam ullam eius eligendi?</p>
                                <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                    data-uk-grid>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-tesla.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price down">
                                                <h6 class="uk-margin-remove">TSLA<span class="uk-text-small">-1.47%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$113.06</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-google.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price up">
                                                <h6 class="uk-margin-remove">GOOGL<span class="uk-text-small">1.32%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$87.34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-visible@m">
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-apple.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price up">
                                                <h6 class="uk-margin-remove">AAPL<span class="uk-text-small">3.68%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$129.62</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="in-slide-img">
                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                    data-src="{{ asset('front-end/img/in-equity-slide-3.png') }}" alt="image-slide"
                                    width="652" height="746" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="uk-flex uk-flex-middle">
                    <div class="uk-container">
                        <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@s in-slide-text">
                                <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                        class="uk-label uk-label-success in-label-small">New</span>Trade the
                                    markets directly with
                                    leading trading platforms.</p>
                                <h1 class="uk-heading-small">Demo <span class="in-highlight">page</span> 2.</h1>
                                <p class="uk-text-lead uk-visible@m">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Sint fugit expedita inventore quos asperiores quis officiis quibusdam laudantium?
                                    Nobis a odio culpa praesentium? Est eos commodi quisquam ullam eius eligendi?</p>
                                <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                    data-uk-grid>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-mcdonalds.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price down">
                                                <h6 class="uk-margin-remove">MCD<span class="uk-text-small">-1.29%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$269.47</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-amazon.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price up">
                                                <h6 class="uk-margin-remove">AMZN<span class="uk-text-small">3.56%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$86.08</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-visible@m">
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-microsoft.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price down">
                                                <h6 class="uk-margin-remove">MSFT<span class="uk-text-small">-1.18%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$224.93</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="in-slide-img">
                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                    data-src="{{ asset('front-end/img/in-equity-slide-3.png') }}" alt="image-slide"
                                    width="652" height="746" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="uk-flex uk-flex-middle">
                    <div class="uk-container">
                        <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@s in-slide-text">
                                <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                        class="uk-label uk-label-success in-label-small">New</span>Demo slider 3.</p>
                                <h1 class="uk-heading-small">Demo <span class="in-highlight">3</span>
                                    app.</h1>
                                <p class="uk-text-lead uk-visible@m">Get the most accurate market data, alerts,
                                    conversions, tools and more — all within the same app.</p>
                                <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                    data-uk-grid>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-tesla.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price down">
                                                <h6 class="uk-margin-remove">TSLA<span class="uk-text-small">-1.47%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$113.06</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-google.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price up">
                                                <h6 class="uk-margin-remove">GOOGL<span class="uk-text-small">1.32%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$87.34</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-visible@m">
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-apple.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price up">
                                                <h6 class="uk-margin-remove">AAPL<span class="uk-text-small">3.68%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$129.62</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="in-slide-img">
                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                    data-src="{{ asset('front-end/img/in-equity-slide-3.png') }}" alt="image-slide"
                                    width="652" height="746" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="uk-flex uk-flex-middle">
                    <div class="uk-container">
                        <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-2@s in-slide-text">
                                <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                        class="uk-label uk-label-success in-label-small">New</span>Lorem ipsum dolor, sit
                                    amet consectetur adipisicing elit..</p>
                                <h1 class="uk-heading-small">Demo <span class="in-highlight">4</span>.</h1>
                                <p class="uk-text-lead uk-visible@m">Demo slider details.</p>
                                <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                    data-uk-grid>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-mcdonalds.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price down">
                                                <h6 class="uk-margin-remove">MCD<span class="uk-text-small">-1.29%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$269.47</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-amazon.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price up">
                                                <h6 class="uk-margin-remove">AMZN<span class="uk-text-small">3.56%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$86.08</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-visible@m">
                                        <div
                                            class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                            <div class="in-symbol-logo">
                                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                    data-src="{{ asset('front-end/img/in-symbol-microsoft.svg') }}"
                                                    alt="ticker" width="28" height="28" data-uk-img>
                                            </div>
                                            <div class="in-price down">
                                                <h6 class="uk-margin-remove">MSFT<span class="uk-text-small">-1.18%</span>
                                                </h6>
                                                <p class="uk-margin-remove"><span
                                                        class="fas fa-arrow-circle-right fa-xs"></span>$224.93</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="in-slide-img">
                                <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                    data-src="{{ asset('front-end/img/in-equity-slide-3.png') }}" alt="image-slide"
                                    width="652" height="746" data-uk-img>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="uk-container">
                <div class="uk-position-relative" data-uk-grid>
                    <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
                </div>
            </div>
        </div>
    </div>
    <!-- slideshow content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-primary uk-preserve-color in-equity-1" id="markets">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <h4>Popular Products</h4>
                </div>
            </div>
            <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom"
                data-uk-grid>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name red">EQ</span>
                            <h5 class="uk-margin-remove">Staking</h5>
                        </div>
                        <p style="color: #b4b4cc">
                            Investors created a site to invest in stacking NFTs. They acquired and stacked rare NFTs,
                            monitored the market for trends...
                        </p>
                        <a href="{{ route('staking') }}"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name green">LQ</span>
                            <h5 class="uk-margin-remove">Forex Trading</h5>
                        </div>
                        <p style="color: #b4b4cc">
                            Our business model involves raising investment funds from investors and allocating them to a
                            forex trading account...
                        </p>
                        <a href="{{ route('forex_trading') }}"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name orange">FB</span>
                            <h5 class="uk-margin-remove">Forex Broker</h5>
                        </div>
                        <p style="color: #b4b4cc">
                            Our company is currently accepting investments from individuals and using these funds to
                            establish a Forex trading platform...
                        </p>
                        <a href="{{ route('forex_broker') }}"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name blue">FU</span>
                            <h5 class="uk-margin-remove">E-Commerce</h5>
                        </div>
                        <p style="color: #b4b4cc">
                            Our company is focused on maximizing returns for our investors by investing their funds in the
                            e-commerce market....
                        </p>
                        <a href="{{ route('e_commerce') }}"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    @include('front-end.section.content.random-user')
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section in-equity-3 in-offset-top-20">
        <div class="uk-container uk-margin-large-bottom">
            {{-- <div class="uk-grid uk-flex uk-flex-middle"> --}}
            <div class="col-md-12 text-center">
                {{-- <div class="uk-width-expand@m"> --}}
                <h1 class="uk-margin-small-bottom text-dark">Tight spreads and <span
                        class="in-highlight">ultra-fast</span>
                    execution</h1>
                <h3 class="uk-margin-top uk-text-warning">Best market prices available so you can receive
                    excellent conditions.</h3>
                {{-- <ul class="uk-list in-list-check">
                        <li>Negative balance protection</li>
                        <li>Segregated and supervised client funds</li>
                        <li>Instant deposit & fast withdrawal</li>
                    </ul> --}}
            </div>
            <x-global-rate-2 />
            {{-- <div class="col-md-12"> --}}
            {{-- <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s"> --}}
            {{-- <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s"> --}}
            {{-- <div id="tradingview-widget"></div> --}}
            {{-- <x-global-rate /> --}}
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-primary uk-preserve-color in-equity-1" id="about">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m uk-text-center">
                        <h1 class="uk-margin-remove-bottom">Putting our clients first <span class="in-highlight">since
                                1986</span></h1>
                        <p class="uk-text-lead text-white uk-margin-small-top">
                            Welcome to our company, where we strive to provide our investors with high returns while
                            ensuring their money is always safe in our hands. Our company is dedicated to making investments
                            in various markets, including Stacking NFT, Forex trading, e-commerce, and Forex broker.
                        </p>
                    </div>
                </div>
                <div class="uk-grid uk-grid-large uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <div class="in-icon-wrap secondary-color">
                                <i class="fas fa-leaf fa-lg"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Philosophy</h3>
                            <p class="uk-margin-remove-bottom text-secondary">At our company, we believe that investment
                                opportunities
                                should be accessible to everyone, regardless of their financial background or investment
                                experience. Therefore, we work hard to provide our clients with the best investment
                                solutions that meet their needs and goals.
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <div class="in-icon-wrap secondary-color">
                                <i class="fas fa-hourglass-end fa-lg"></i>
                            </div>
                        </div>
                        <div>
                            <h3>History</h3>
                            <p class="uk-margin-remove-bottom text-secondary">
                                We also believe in transparency and accountability, which is why we provide our clients with
                                regular updates and reports on their investments. Our customer support team is always
                                available to answer any questions or concerns our clients may have.
                            </p>
                        </div>
                    </div>
                    <div class="uk-flex uk-flex-left">
                        <div class="uk-margin-right">
                            <div class="in-icon-wrap secondary-color">
                                <i class="fas fa-flag fa-lg"></i>
                            </div>
                        </div>
                        <div>
                            <h3>Culture</h3>
                            <p class="uk-margin-remove-bottom text-secondary">
                                At our company, we are dedicated to providing our clients with exceptional investment
                                opportunities and services that exceed their expectations. We are committed to building
                                long-term relationships with our clients and
                                helping them achieve their financial goals
                            </p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m uk-text-center">
                        <p class="uk-text-lead text-white uk-margin-small-top">
                            Thank you for considering our company as your investment partner. We look forward to helping you
                            achieve financial success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-2@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="in-icon-wrap large primary-color uk-margin-right">
                                <i class="fas fa-money-bill-wave fa-2x"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="text-dark">Why trade with our Company?</h3>
                            <p>
                                At our company, we believe that investment opportunities should be accessible to everyone,
                                regardless of their financial background or investment experience. Therefore, we work hard
                                to provide our clients with the best investment solutions that meet their needs and goals.
                                <br>
                                <br>
                                We understand that the safety of our clients' funds is paramount, and we have implemented
                                robust security measures to ensure the safety and integrity of their investments. Our
                                clients can rest assured that their funds are in good hands and that we will always act in
                                their best interests.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                        <div>
                            <ul class="uk-list in-list-check">
                                <li>
                                    We offer competitive returns on investments, with the potential for high returns
                                </li>
                                <li>
                                    We provide our clients with educational resources and guidance on investment strategies
                                </li>
                                <li>
                                    We believe in a diversified investment strategy that minimizes risks and maximizes
                                    returns
                                </li>
                                <li>
                                    Our investment solutions are designed to help our clients build wealth over the long
                                    term
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-list in-list-check">
                                <li>
                                    We have a customer support team available to answer any questions or concerns our
                                    clients may have
                                </li>
                                <li>
                                    We provide excellent customer service, with a focus on meeting our clients' needs and
                                    expectations
                                </li>
                                <li>
                                    We offer flexible investment options to suit our clients' needs and investment goals
                                </li>
                                <li>
                                    Our investment solutions are designed to generate passive income for our clients
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section in-equity-4 container">
        <div class="uk-width-1-1@m uk-text-center uk-margin-bottom mb-5">
            <h1>More than <span class="in-highlight">23,000</span> traders joined</h1>
        </div>
        <div class="uk-slider-container uk-margin-bottom" uk-slider="autoplay: true">
            <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>
                <ul
                    class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid text-center">
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-1.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Marco P</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Italian</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Sono molto soddisfatto degli investimenti che ho fatto con questa azienda. Il team è
                                        molto professionale e i rendimenti sono eccellenti.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-2.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Lars H</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Danish</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Jeg er meget tilfreds med mine investeringer i dette firma. Teamet er meget
                                        kompetent og afkastet er fremragende.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-3.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Maria S</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Spanish</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Estoy muy contento con las inversiones que he hecho con esta empresa. El equipo es
                                        muy profesional y los retornos son excelentes
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-4.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Pierre L</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">French</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Je suis très satisfait de mes investissements avec cette entreprise. L'équipe est
                                        très professionnelle et les rendements sont excellents.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-5.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Katrin W</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">German</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Ich bin sehr zufrieden mit den Investitionen, die ich bei diesem Unternehmen
                                        getätigt habe. Das Team ist sehr kompetent und die Renditen sind ausgezeichnet.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-6.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Marcos S</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Portuguese</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Eu estou muito satisfeito com os meus investimentos nesta empresa. A equipe é muito
                                        profissional e os retornos são excelentes.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-7.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">佐藤健太郎</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Japanese</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        私はこの会社での投資に非常に満足しています。チームは非常にプロフェッシ
                                        ョナルで、リターンも優れています。
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-8.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Pieter V</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Dutch</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Ik ben erg tevreden over de investeringen die ik bij dit bedrijf heb gedaan. Het
                                        team is zeer deskundig en de rendementen zijn uitstekend
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-9.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Anna L</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Norwegian</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Jeg er veldig fornøyd med investeringene mine i dette selskapet. Teamet er veldig
                                        profesjonelt og avkastningen er utmerket
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="uk-background-contain uk-background-top-left"
                                data-src="{{ asset('front-end/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                                <div class="uk-flex uk-flex-middle">
                                    <div class="uk-margin-right">
                                        <div class="uk-background-primary uk-border-pill">
                                            <img class="uk-align-center uk-border-pill"
                                                src="{{ asset('front-end/img/in-lazy.gif') }}"
                                                data-src="{{ asset('front-end/img/blockit/in-team-5.png') }}"
                                                alt="client-1" width="100" height="100" data-uk-img>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="uk-margin-remove-bottom text-dark">Hoàng A</h5>
                                        <p class="uk-text-muted uk-margin-remove-top">Vietnamese</p>
                                    </div>
                                </div>
                                <blockquote>
                                    <p style="font-size: 18px">
                                        Tôi rất hài lòng với các khoản đầu tư của mình với công ty này. Đội ngũ làm việc rất
                                        chuyên nghiệp và lợi nhuận rất tốt
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                    uk-slider-item="next"></a>

            </div>
        </div>
        <div class="uk-width-1-1@m uk-text-center">
            <a href="{{ route('all_traders') }}" class="uk-button uk-button-text">See more traders stories from all over
                the
                world<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section" id="contact">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center in-contact-6">
                <div class="uk-width-1-2@m">
                    <iframe class="uk-width-1-1 uk-height-medium uk-border-rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10600.5248164368!2d144.95966577016594!3d-37.81707816290683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sid!4v1645280096951!5m2!1sen!2sid">
                    </iframe>

                    <hr class="uk-margin-medium">
                    <div class="uk-grid uk-child-width-1-3@m uk-margin-medium-top uk-text-center" data-uk-grid="">
                        <div>
                            <h5 class="uk-margin-remove-bottom text-dark"><i
                                    class="fas fa-map-marker-alt fa-sm uk-margin-small-right"></i>Address</h5>
                            <p class="uk-margin-small-top">Satrio Tower 16th, Jl. Dr Satrio Kuningan, Jakarta</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom text-dark"><i
                                    class="fas fa-envelope fa-sm uk-margin-small-right"></i>Email</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">hello@company.com</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">for public
                                inquiries</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom text-dark"><i
                                    class="fas fa-phone-alt fa-sm uk-margin-small-right"></i>Call</h5>
                            <p class="uk-margin-small-top uk-margin-remove-bottom">(888)234-5686</p>
                            <p class="uk-text-small uk-text-muted uk-text-uppercase uk-margin-remove-top">Mon - Fri,
                                9am - 5pm</p>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <p class="uk-margin-remove-bottom uk-text-lead uk-text-muted uk-text-center">Have a questions?
                    </p>
                    <h1 class="uk-margin-small-top uk-text-center">Let's <span class="in-highlight">get in
                            touch</span></h1>
                    <form id="contact-form" class="uk-form uk-grid-small uk-margin-medium-top" data-uk-grid="">
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-user fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="name" name="name" type="text"
                                placeholder="Full name">
                        </div>
                        <div class="uk-width-1-2@s uk-inline">
                            <span class="uk-form-icon fas fa-envelope fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="email" name="email" type="email"
                                placeholder="Email address">
                        </div>
                        <div class="uk-width-1-1 uk-inline">
                            <span class="uk-form-icon fas fa-pen fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="subject" name="subject" type="text"
                                placeholder="Subject">
                        </div>
                        <div class="uk-width-1-1">
                            <textarea class="uk-textarea uk-border-rounded" id="message" name="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <div class="uk-width-1-1">
                            <button class="uk-width-1-1 uk-button uk-button-primary uk-border-rounded" id="sendemail"
                                type="submit" name="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section in-equity-5">
        <div class="uk-container uk-margin-remove-bottom">
            <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                <div>
                    <div class="uk-flex uk-flex-left in-award">
                        <div class="uk-margin-small-right">
                            <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                data-src="{{ asset('front-end/img/in-equity-5-award-1.svg') }}" alt="award-1"
                                width="91" height="82" data-uk-img>
                        </div>
                        <div>
                            <h6 class="text-dark">Reliable</h6>
                            <p class="provider">Someone that you can trust</p>
                            <p class="year">100%</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-flex uk-flex-left in-award">
                        <div class="uk-margin-small-right">
                            <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                data-src="{{ asset('front-end/img/in-equity-5-award-2.svg') }}" alt="award-2"
                                width="91" height="82" data-uk-img>
                        </div>
                        <div>
                            <h6 class="text-dark">Transparency</h6>
                            <p class="provider">Open, Communicative, and Accountabile</p>
                            <p class="year">100%</p>
                        </div>
                    </div>
                </div>
                <div class="uk-visible@m">
                    <div class="uk-flex uk-flex-left in-award">
                        <div class="uk-margin-small-right">
                            <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                data-src="{{ asset('front-end/img/in-equity-5-award-3.svg') }}" alt="award-3"
                                width="91" height="82" data-uk-img>
                        </div>
                        <div>
                            <h6 class="text-dark">Secure</h6>
                            <p class="provider">Keeping you safe financially and mentally.</p>
                            <p class="year">100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

    <!-- section content begin -->
    <div class="uk-section uk-section-primary uk-preserve-color in-equity-6 uk-background-contain uk-background-center"
        data-src="{{ asset('front-end/img/in-equity-decor-2.svg') }}" data-uk-img>
        <div class="uk-container uk-margin-small-bottom">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-2xlarge@m uk-text-center">
                    <h1>Ready to get started?</h1>
                    <p class="uk-text-lead">Global access to financial markets from a single account</p>
                </div>
                <div class="uk-width-3-4@m uk-margin-medium-top">
                    <div class="uk-flex uk-flex-center uk-flex-middle button-app">
                        <div>
                            <a href="#" class="uk-button uk-button-secondary uk-border-rounded">Open your
                                account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                        <div class="uk-margin-left uk-margin-right">
                            <p class="uk-margin-remove text-white">And download the app</p>
                        </div>
                        <div class="uk-margin-right">
                            <a href="#"><img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                    data-src="{{ asset('front-end/img/in-app-store.svg') }}" alt="app-store"
                                    width="120" height="40" data-uk-img></a>
                        </div>
                        <div>
                            <a href="#"><img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                    data-src="{{ asset('front-end/img/in-google-play.svg') }}" alt="google-play"
                                    width="135" height="40" data-uk-img></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection
