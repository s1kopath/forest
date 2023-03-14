@extends('front-end.master')
@section('title')
    Markets
@endsection

@section('page-style')
@endsection

@section('breadcrumb')
    @include('front-end.breadcrumb')
@endsection

@section('content')
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-match uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                <div class="uk-width-1-1">
                    <h1 class="uk-margin-remove">A <span class="in-highlight">relationship</span> on your terms.
                    </h1>
                    <p class="uk-text-lead uk-text-muted uk-margin-small-top">Work with us the way you want.</p>
                    <p>Some believe you must choose between an online broker and a wealth management firm. At our
                        Company, you don’t need to compromise. Whether you invest on your own, with an advisor, or a
                        little of both — we can support you.</p>
                </div>
                <div style="width: 25%">
                    <div
                        class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-green">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fa-solid fa-coins fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('staking') }}">Staking<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Access 19,000+ Staking across core and emerging markets on 40+ exchanges worldwide.</p>
                    </div>
                </div>
                <div style="width: 25%">
                    <div
                        class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-blue">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fas fa-chart-bar fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('forex_trading') }}">Forex Trading<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Access 1,200+ listed options across the highest level of liquidity, which means even large orders
                            of currency trades are easily filled efficiently without any large price deviations.</p>
                    </div>
                </div>
                <div style="width: 25%">
                    <div
                        class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-purple">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fas fa-user-tie fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('forex_broker') }}">Forex Broker<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>A forex broker is a financial services company that provides traders access to a platform for buying and selling foreign currencies.</p>
                    </div>
                </div>
                <div style="width: 25%">
                    <div
                        class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded uk-light in-card-navy">
                        <div class="in-icon-wrap uk-margin-bottom">
                            <i class="fa-solid fa-business-time fa-lg"></i>
                        </div>
                        <h4 class="uk-margin-top">
                            <a href="{{ route('e_commerce') }}">E-Commerce<i class="fas fa-chevron-right uk-float-right"></i></a>
                        </h4>
                        <hr>
                        <p>Access 300+ futures covering businesses with the tools and services they need to buy and sell
                            products and services over the Internet and manage their online enterprises.</p>
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
                <div class="uk-width-2-3@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="in-icon-wrap large primary-color uk-margin-right">
                                <i class="fas fa-money-bill-wave fa-2x"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3>Why trade with our Company?</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation repudiandae ullamco.</p>
                            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                                <div>
                                    <ul class="uk-list in-list-check">
                                        <li>Direct Market Access (DMA)</li>
                                        <li>Leverage up to 1:500</li>
                                        <li>T+0 settlement</li>
                                        <li>Dividends paid in cash</li>
                                    </ul>
                                </div>
                                <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                    <ul class="uk-list in-list-check">
                                        <li>Free from UK Stamp Duty</li>
                                        <li>Short selling available</li>
                                        <li>Commissions from 0.08%</li>
                                        <li>Access to 1500 global shares</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m">
                    <h3>Our Shares offer</h3>
                    <table class="uk-table uk-table-striped uk-text-small uk-text-center">
                        <thead>
                            <tr>
                                <th class="uk-text-center">Name</th>
                                <th class="uk-text-center">Initial Deposit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Apple Inc CFD</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>Alibaba CFD</td>
                                <td>10%</td>
                            </tr>
                            <tr>
                                <td>Facebook CFD</td>
                                <td>10%</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="uk-button uk-button-text" href="#">See Full Shares Table<i
                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-card-16">
                    <div class="uk-card uk-card-default uk-card-body uk-box-shadow-small uk-border-rounded">
                        <div class="uk-grid uk-flex-middle" data-uk-grid>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <h3>Get up to $600 plus 60 days of commission-free stocks & forex trades</h3>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('register') }}">Open an Account<i
                                        class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection

@section('page-script')
@endsection
