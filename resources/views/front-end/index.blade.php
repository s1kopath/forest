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
                                    data-src="{{ asset('front-end/img/in-equity-slide-1.png') }}" alt="image-slide"
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
                                    data-src="{{ asset('front-end/img/in-equity-slide-1.png') }}" alt="image-slide"
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
                                    data-src="{{ asset('front-end/img/in-equity-slide-1.png') }}" alt="image-slide"
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
                                    data-src="{{ asset('front-end/img/in-equity-slide-1.png') }}" alt="image-slide"
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
                            <h5 class="uk-margin-remove">Staking</h5>
                        </div>
                        <p>Access 19,000+ Staking across core and emerging markets on 40+ exchanges worldwide.</p>
                        <a href="#"
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
                        <p>Access 1,200+ listed options across the highest level of liquidity, which means even large orders
                            of currency trades are easily filled efficiently without any large price deviations.</p>
                        <a href="#"
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
                        <p>Access 300+ futures covering businesses with the tools and services they need to buy and sell
                            products and services over the Internet and manage their online enterprises.
                        </p>
                        <a href="#"
                            class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                        <div class="uk-flex uk-flex-middle">
                            <span class="in-product-name">RS</span>
                            <h5 class="uk-margin-remove">Real Estate</h5>
                        </div>
                        <p>Explore the full range of buying, selling and renting of commercial and residential properties or
                            land.</p>
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

                <div class="row shadow-lg">
                    <div class="col-md-4 rounded px-5 py-3">
                        <table>
                            <thead>
                                <th colspan="3" class="text-center">New Registration</th>
                            </thead>
                            <tbody>
                                {{--  @for ($i = 0; $i < 5; $i++)  --}}
                                <tr>
                                    <td style="width: 50px">&#127988</td>
                                    <td style="width: 100px" id="username">fr*****e0</td>
                                    <td style="width: 280px" class="text-right" id="fullname">Mr Frankie</td>
                                </tr>
                                {{--  @endfor  --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 rounded px-5 py-3">
                        <table>
                            <thead>
                                <th colspan="3" class="text-center">Deposit</th>
                            </thead>
                            <tbody>
                                {{--  @for ($i = 0; $i < 5; $i++)  --}}
                                    <tr>
                                        <td style="width: 50px">&#12798</td>
                                        <td style="width: 280px" id="name">Mr Frankie</td>
                                        <td style="width: 100px" class="text-right" id="number"></td>
                                    </tr>
                                {{--  @endfor  --}}
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4 rounded px-5 py-3">
                        <table>
                            <thead>
                                <th colspan="3" class="text-center">Withdrawal</th>
                            </thead>
                            <tbody>
                                {{--  @for ($i = 0; $i < 5; $i++)  --}}
                                    <tr>
                                        <td style="width: 50px">&#128681</td>
                                        <td style="width: 280px" id="Name">Mr Donkey</td>
                                        <td style="width: 100px" class="text-right"></td>
                                    </tr>
                                {{--  @endfor  --}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="uk-width-3-4@m uk-margin-medium-top">

                    {{-- section --}}

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
                    <h1 class="uk-margin-small-bottom">Tight spreads and <span class="in-highlight">ultra-fast</span>
                        execution</h1>
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
                                        data-src="{{ asset('front-end/img/blockit/in-team-1.png') }}" alt="client-1"
                                        width="100" height="100" data-uk-img>
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
                                        data-src="{{ asset('front-end/img/blockit/in-team-8.png') }}" alt="client-2"
                                        width="100" height="100" data-uk-img>
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
                            <h6>Reliable</h6>
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
                            <h6>Transparency</h6>
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
                            <h6>Secure</h6>
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
@endsection

@section('page-script')
    <script>
        const url = ' https://randomuser.me/api/ ';

        let fullname = document.getElementById('fullname');
        let username = document.getElementById('username');
        let name = document.getElementById('name');
        let number = document.getElementById('number');
        let Name = document.getElementById('Name');
        function customuser() {
            fetch(url)
                .then(handleErrors)
                .then(parseJSON)
                .then(updateProfile)
                .catch(printError)
        }

        function handleErrors(res) {
            if (!res.ok) {
                throw error(res.status);
            }
            return res;
        }

        function parseJSON(res) {
            return res.json();
        }

        function updateProfile(profile) {
            fullname.innerHTML = profile.results[0].name.first + " " + profile.results[0].name.last;
            username.innerHTML = profile.results[0].login.username;
            name.innerHTML = profile.results[0].name.first + " " + profile.results[0].name.last;
            number.innerHTML = profile.results[0].number;
            Name.innerHTML = profile.results[0].name.first + " " + profile.results[0].name.last;

            return 1;
        }

        function printError(error) {
            console.log(error);
        }

        setInterval(customuser, 2000);
    </script>

@endsection
