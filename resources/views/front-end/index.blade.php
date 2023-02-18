<!doctype html>
<html lang="en">

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
    <link rel="preload" href="{{ asset('front-end/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2">
    <link rel="preload" href="{{ asset('front-end/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2">
    <!-- font preload -->
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-regular.woff2') }}" as="font"
        type="font/woff2">
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-300.woff2') }}" as="font"
        type="font/woff2">
    <link rel="preload" href="{{ asset('front-end/fonts/archivo-v9-latin-700.woff2') }}" as="font"
        type="font/woff2">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('front-end/img/favicon-32x32.png') }}" type="image/x-icon">
    <!-- Touch icon -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front-end/img/apple-touch-icon.png') }}">
    <title>{{ env('APP_NAME') }}</title>
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
    <header>
        <div class="uk-section uk-padding-remove-vertical">
            <nav class="uk-navbar-container uk-navbar-transparent"
                data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
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
                                <li><a href="markets.html">Markets</a>
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
    <!-- header end -->
    <main>
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
                                    <h1 class="uk-heading-small">The world's most <span
                                            class="in-highlight">powerful</span> trade app.</h1>
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
                                                    <h6 class="uk-margin-remove">TSLA<span
                                                            class="uk-text-small">-1.47%</span></h6>
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
                                                    <h6 class="uk-margin-remove">GOOGL<span
                                                            class="uk-text-small">1.32%</span></h6>
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
                                                    <h6 class="uk-margin-remove">AAPL<span
                                                            class="uk-text-small">3.68%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$129.62</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-slide-img">
                                    <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                        data-src="{{ asset('front-end/img/in-equity-slide-1.png') }}"
                                        alt="image-slide" width="652" height="746" data-uk-img>
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
                                    <h1 class="uk-heading-small">Reach out to new trading <span
                                            class="in-highlight">experience</span>.</h1>
                                    <p class="uk-text-lead uk-visible@m">Bring your trading ventures go around the
                                        world, way beyond the space of your trading account.</p>
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
                                                    <h6 class="uk-margin-remove">MCD<span
                                                            class="uk-text-small">-1.29%</span></h6>
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
                                                    <h6 class="uk-margin-remove">AMZN<span
                                                            class="uk-text-small">3.56%</span></h6>
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
                                                    <h6 class="uk-margin-remove">MSFT<span
                                                            class="uk-text-small">-1.18%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$224.93</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-slide-img">
                                    <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                        data-src="{{ asset('front-end/img/in-equity-slide-1.png') }}"
                                        alt="image-slide" width="652" height="746" data-uk-img>
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
        <div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h4>Popular products</h4>
                    </div>
                </div>
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom"
                    data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name red">EQ</span>
                                <h5 class="uk-margin-remove">Stocks</h5>
                            </div>
                            <p>Access 19,000+ stocks across core and emerging markets on 40+ exchanges worldwide.</p>
                            <a href="#"
                                class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name green">LQ</span>
                                <h5 class="uk-margin-remove">Listed Options</h5>
                            </div>
                            <p>Access 1,200+ listed options across equities, indices, interest rates, energy, metals and
                                more.</p>
                            <a href="#"
                                class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name blue">FU</span>
                                <h5 class="uk-margin-remove">Futures</h5>
                            </div>
                            <p>Access 300+ futures covering equity indices, energy, metals, agriculture, rates and more.
                            </p>
                            <a href="#"
                                class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name"><i class="fas fa-ellipsis-h fa-xs"></i></span>
                                <h5 class="uk-margin-remove">More products</h5>
                            </div>
                            <p>Explore the full range of cash and leveraged products</p>
                            <a href="#"
                                class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-2 uk-background-contain uk-background-center"
            data-src="{{ asset('front-end/img/in-equity-2-bg.png') }}" data-uk-img>
            <div class="uk-container uk-margin-top">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-2xlarge@m uk-text-center">
                        <span class="uk-label uk-label-warning">Fast execution, low latency<i
                                class="fas fa-arrow-right fa-xs uk-margin-small-left"></i></span>
                        <h1 class="uk-margin-top">Your premium choice for trading currencies & stocks online</h1>
                        <p class="uk-text-lead uk-margin-medium-top">Harness the power of technology to make a quicker,
                            smarter and more precise decision on CFD currency pairs, stocks, commodities and more</p>
                    </div>
                    <div class="uk-width-3-4@m uk-margin-medium-top">
                        <img class="uk-align-center" src="{{ asset('front-end/img/in-lazy.gif') }}"
                            data-src="{{ asset('front-end/img/in-equity-2-img.png') }}" alt="image"
                            width="758" height="334" data-uk-img>
                    </div>
                    <div class="uk-width-2xlarge@m uk-margin-medium-top">
                        <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-4@s uk-text-center in-feature-box"
                            data-uk-grid>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                        data-src="{{ asset('front-end/img/in-equity-2-icon-1.svg') }}" alt="icon-1"
                                        width="35" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Trading calculators</p>
                            </a>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                        data-src="{{ asset('front-end/img/in-equity-2-icon-2.svg') }}" alt="icon-2"
                                        width="38" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Market analysis</p>
                            </a>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                        data-src="{{ asset('front-end/img/in-equity-2-icon-3.svg') }}" alt="icon-3"
                                        width="42" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Market reviews</p>
                            </a>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('front-end/img/in-lazy.gif') }}"
                                        data-src="{{ asset('front-end/img/in-equity-2-icon-4.svg') }}" alt="icon-4"
                                        width="42" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Trading academy</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-3 in-offset-top-20">
            <div class="uk-container uk-margin-large-bottom">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-expand@m">
                        <h1 class="uk-margin-small-bottom">Tight spreads and <span
                                class="in-highlight">ultra-fast</span> execution</h1>
                        <h3 class="uk-margin-top uk-text-warning">Best market prices available so you can receive
                            excellent conditions.</h3>
                        <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                        <ul class="uk-list in-list-check">
                            <li>Negative balance protection</li>
                            <li>Segregated and supervised client funds</li>
                            <li>Instant deposit & fast withdrawal</li>
                        </ul>
                    </div>
                    <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
                            <div id="tradingview-widget"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-4">
            <div class="uk-container uk-margin-top uk-margin-medium-bottom">
                <div class="uk-grid uk-child-width-1-2@m in-testimonial-2" data-uk-grid>
                    <div class="uk-width-1-1@m uk-text-center">
                        <h1>More than <span class="in-highlight">23,000</span> traders joined</h1>
                    </div>
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
                                    <h5 class="uk-margin-remove-bottom">Angela Nannenhorn</h5>
                                    <p class="uk-text-muted uk-margin-remove-top">from United Kingdom</p>
                                </div>
                            </div>
                            <blockquote>
                                <p>Very convenience for trader, spread for gold is relatively low compare to other
                                    broker</p>
                            </blockquote>
                        </div>
                    </div>
                    <div>
                        <div class="uk-background-contain uk-background-top-left"
                            data-src="{{ asset('front-end/img/in-equity-4-blob-2.svg') }}" data-uk-img>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <div class="uk-background-primary uk-border-pill">
                                        <img class="uk-align-center uk-border-pill"
                                            src="{{ asset('front-end/img/in-lazy.gif') }}"
                                            data-src="{{ asset('front-end/img/blockit/in-team-8.png') }}"
                                            alt="client-2" width="100" height="100" data-uk-img>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove-bottom">Wade Palmer</h5>
                                    <p class="uk-text-muted uk-margin-remove-top">from Germany</p>
                                </div>
                            </div>
                            <blockquote>
                                <p>One of the best FX brokers, I have been using! their trading conditions are excellent
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="uk-width-1-1@m uk-text-center">
                        <a href="#" class="uk-button uk-button-text">See more traders stories from all over the
                            world<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
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
                                <h6>Best Mobile Trading App</h6>
                                <p class="provider">European CEO Magazine</p>
                                <p class="year">2019</p>
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
                                <h6>Best Forex Ecn Broker</h6>
                                <p class="provider">UK Forex awards</p>
                                <p class="year">2020</p>
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
                                <h6>Best Trading Conditions</h6>
                                <p class="provider">Forex report magazine</p>
                                <p class="year">2021</p>
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
                                <p class="uk-margin-remove">And download the app</p>
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
    </main>
    <!-- footer begin -->
    <footer>
        <div class="uk-section">
            <div class="uk-container uk-margin-top">
                <div class="uk-grid">
                    <div class="uk-width-2-3@m">
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid="">
                            <div>
                                <h5>Instruments</h5>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Stock</a></li>
                                    <li><a href="#">Indexes</a></li>
                                    <li><a href="#">Currencies</a></li>
                                    <li><a href="#">Metals<span
                                                class="uk-label uk-margin-small-left in-label-small">Popular</span></a>
                                    </li>
                                    <li><a href="#">Oil and gas</a></li>
                                    <li><a href="#">Cryptocurrencies<span
                                                class="uk-label uk-margin-small-left in-label-small">Popular</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5>Analytics</h5>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">World Markets</a></li>
                                    <li><a href="#">Trading Central<span
                                                class="uk-label uk-margin-small-left in-label-small">New</span></a>
                                    </li>
                                    <li><a href="#">Forex charts online</a></li>
                                    <li><a href="#">Market calendar</a></li>
                                    <li><a href="#">Central banks<span
                                                class="uk-label uk-margin-small-left in-label-small">New</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="in-margin-top-60@s">
                                <h5>Education</h5>
                                <ul class="uk-list uk-link-text">
                                    <li><a href="#">Basic course</a></li>
                                    <li><a href="#">Introductory webinar</a></li>
                                    <li><a href="#">About academy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m uk-flex uk-flex-right@m">
                        <!-- social media begin -->
                        <div class="uk-flex uk-flex-column social-media-list">
                            <div><a href="https://www.facebook.com/indonez"
                                    class="color-facebook text-decoration-none"><i class="fab fa-facebook-square"></i>
                                    Facebook</a></div>
                            <div><a href="https://twitter.com/indonez_tw"
                                    class="color-twitter text-decoration-none"><i class="fab fa-twitter"></i>
                                    Twitter</a></div>
                            <div><a href="https://www.instagram.com/indonez_ig"
                                    class="color-instagram text-decoration-none"><i class="fab fa-instagram"></i>
                                    Instagram</a></div>
                            <div><a href="#some-link" class="color-telegram text-decoration-none"><i
                                        class="fab fa-telegram"></i> Telegram</a></div>
                            <div><a href="#some-link" class="color-youtube text-decoration-none"><i
                                        class="fab fa-youtube"></i> Youtube</a></div>
                        </div>
                        <!-- social media end -->
                    </div>
                </div>
            </div>
            <hr class="uk-margin-large">
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
                        <p class="copyright-text">©2021 Equity Markets Incorporated. All Rights Reserved.</p>
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
            </div>
        </div>
    </footer>
    <!-- footer end -->
    <!-- to top begin -->
    <a class="to-top uk-visible@m" data-uk-scroll>
        <i class="fas fa-chevron-up"></i>
    </a>
    <!-- to top end -->
    <!-- javascript -->
    <script src="{{ asset('front-end/js/vendors/uikit.min.js') }}"></script>
    <script src="{{ asset('front-end/js/vendors/tradingview-widget.min.js') }}"></script>
    <script src="{{ asset('front-end/js/vendors/particles.min.js') }}"></script>
    <script src="{{ asset('front-end/js/config-particles.js') }}"></script>
    <script src="{{ asset('front-end/js/utilities.min.js') }}"></script>
    <script src="{{ asset('front-end/js/config-theme.js') }}"></script>
</body>

</html>
