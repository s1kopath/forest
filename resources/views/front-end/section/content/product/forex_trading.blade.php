@extends('front-end.master')
@section('title')
    Forex Trading
@endsection

@push('page-style')
    <style>
        .uk-grid-small,
        .uk-grid-column-small {
            margin-left: 0px;
        }
    </style>
@endpush

@section('breadcrumb')
    @include('front-end.breadcrumb')
@endsection

@section('content')
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m uk-text-center">
                        <h1 class="uk-margin-remove-bottom">Forex Trading</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top">Access 1,200+ listed options across the
                            highest level of liquidity, which means even large orders
                            of currency trades are easily filled efficiently without any large price deviations.</p>
                    </div>
                </div>
                <div class="uk-width-1-1 mt-2">
                    <div class="uk-text-center">
                        <img src="{{ asset('front-end/content/forex-trading.jpg') }}">
                    </div>
                </div>
                <div class="uk-width-1-1 uk-text-center">
                    <p class="uk-margin-small-top">Foreign exchange trading—also commonly called forex trading or FX—is the
                        global market for exchanging foreign currencies. Forex is the largest market in the world, and the
                        trades that happen in it affect everything from the price of clothing imported from China to the
                        amount you pay for a margarita while vacationing in Mexico.</p>

                </div>
            </div>
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-1@m in-content-11" data-uk-grid>
                        <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-expand@m in-margin-top-10@s">
                                    <h4 class="uk-margin-small-bottom font-weight-bold"><i
                                            class="fas fa-chart-bar fa-sm"></i>&nbsp&nbsp What Is Forex Trading?</h4>
                                    <p class="uk-text-medium uk-margin-remove-bottom">At its simplest, forex trading is
                                        similar to the currency exchange you may do while traveling abroad: A trader buys
                                        one currency and sells another, and the exchange rate constantly fluctuates based on
                                        supply and demand.
                                        <br>
                                        <br>
                                        Currencies are traded in the foreign exchange market, a global marketplace that’s
                                        open 24 hours a day Monday through Friday. All forex trading is conducted over the
                                        counter (OTC), meaning there’s no physical exchange (as there is for stocks) and a
                                        global network of banks and other financial institutions oversee the market (instead
                                        of a central exchange, like the New York Stock Exchange).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-expand@m in-margin-top-10@s">
                                    <h4 class="uk-margin-small-bottom font-weight-bold"><i
                                            class="fas fa-chart-bar fa-sm"></i>&nbsp&nbsp How Currencies Are Traded</h4>
                                    <p class="uk-text-medium uk-margin-remove-bottom">All currencies are assigned a
                                        three-letter code much like a stock’s ticker symbol. While there are more than 170
                                        currencies worldwide, the U.S. dollar is involved in a vast majority of forex
                                        trading, so it’s especially helpful to know its code: USD. The second most popular
                                        currency in the forex market is the euro, the currency accepted in 19 countries in
                                        the European Union (code: EUR).
                                        <br>
                                        <br>
                                        Other major currencies, in order of popularity, are: the Japanese yen (JPY), the
                                        British pound (GBP), the Australian dollar (AUD), the Canadian dollar (CAD), the
                                        Swiss franc (CHF) and the New Zealand dollar (NZD).
                                        <br>
                                        <br>
                                        All forex trading is expressed as a combination of the two currencies being
                                        exchanged. The following seven currency pairs—what are known as the majors—account
                                        for about 75% of trading in the forex market:
                                        <br>
                                        <br>
                                        •&nbsp&nbsp EUR/USD <br>
                                        •&nbsp&nbsp USD/JPY <br>
                                        •&nbsp&nbsp GBP/USD <br>
                                        •&nbsp&nbsp AUD/USD <br>
                                        •&nbsp&nbsp USD/CAD <br>
                                        •&nbsp&nbsp USD/CHF <br>
                                        •&nbsp&nbsp NZD/USD
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-expand@m in-margin-top-10@s">
                                    <h4 class="uk-margin-small-bottom font-weight-bold"><i
                                            class="fas fa-chart-bar fa-sm"></i>&nbsp&nbsp Three Ways to Trade Forex</h4>
                                    <p class="uk-text-medium uk-margin-remove-bottom">Most forex trades aren’t made for the
                                        purpose of exchanging currencies (as you might at a currency exchange while
                                        traveling) but rather to speculate about future price movements, much like you would
                                        with stock trading. Similar to stock traders, forex traders are attempting to buy
                                        currencies whose values they think will increase relative to other currencies or to
                                        get rid of currencies whose purchasing power they anticipate will decrease.
                                        <br>
                                        <br>
                                        There are three different ways to trade forex, which will accommodate traders with
                                        varying goals:
                                        <br>
                                        <br>
                                        <strong> The spot market.</strong> This is the primary forex market where those
                                        currency pairs are swapped and exchange rates are determined in real-time, based on
                                        supply and demand. <br>
                                        <strong>The forward market.</strong> Instead of executing a trade now, forex traders
                                        can also enter into a binding (private) contract with another trader and lock in an
                                        exchange rate for an agreed upon amount of currency on a future date. <br>
                                        <strong>The futures market.</strong> Similarly, traders can opt for a standardized
                                        contract to buy or sell a predetermined amount of a currency at a specific exchange
                                        rate at a date in the future. This is done on an exchange rather than privately,
                                        like the forwards market.
                                        The forward and futures markets are primarily used by forex traders who want to
                                        speculate or hedge against future price changes in a currency. The exchange rates in
                                        these markets are based on what’s happening in the spot market, which is the largest
                                        of the forex markets and is where a majority of forex trades are executed.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-expand@m in-margin-top-10@s">
                                    <h4 class="uk-margin-small-bottom font-weight-bold"><i
                                            class="fas fa-chart-bar fa-sm"></i>&nbsp&nbsp What Moves the Forex Market?</h4>
                                    <p class="uk-text-medium uk-margin-remove-bottom">Like any other market, currency prices
                                        are set by the supply and demand of sellers and buyers. However, there are other
                                        macro forces at play in this market. Demand for particular currencies can also be
                                        influenced by interest rates, central bank policy, the pace of economic growth and
                                        the political environment in the country in question.
                                        <br>
                                        <br>
                                        The forex market is open 24 hours a day, five days a week, which gives traders in
                                        this market the opportunity to react to news that might not affect the stock market
                                        until much later. Because so much of currency trading focuses on speculation or
                                        hedging, it’s important for traders to be up to speed on the dynamics that could
                                        cause sharp spikes in currencies.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card uk-card-small uk-card-default uk-card-body uk-border-rounded uk-display-block">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-expand@m in-margin-top-10@s">
                                    <h4 class="uk-margin-small-bottom font-weight-bold"><i
                                            class="fas fa-chart-bar fa-sm"></i>&nbsp&nbsp Risks of Forex Trading</h4>
                                    <p class="uk-text-medium uk-margin-remove-bottom">Because forex trading requires
                                        leverage and traders use margin, there are additional risks to forex trading than
                                        other types of assets. Currency prices are constantly fluctuating, but at very small
                                        amounts, which means traders need to execute large trades (using leverage) to make
                                        money.
                                        <br>
                                        <br>
                                        This leverage is great if a trader makes a winning bet because it can magnify
                                        profits. However, it can also magnify losses, even exceeding the initial amount
                                        borrowed. In addition, if a currency falls too much in value, leverage users open
                                        themselves up to margin calls, which may force them to sell their securities
                                        purchased with borrowed funds at a loss. Outside of possible losses, transaction
                                        costs can also add up and possibly eat into what was a profitable trade.
                                        <br>
                                        <br>
                                        On top of all that, you should keep in mind that those who trade foreign currencies
                                        are little fish swimming in a pond of skilled, professional traders—and the
                                        Securities and Exchange Commission warns about potential fraud or information that
                                        could be confusing to new traders.
                                        <br>
                                        <br>
                                        Perhaps it’s a good thing then that forex trading isn’t so common among individual
                                        investors. In fact, retail trading (a.k.a. trading by non-professionals) accounts
                                        for just 5.5% of the entire global market, figures from DailyForex show, and some of
                                        the major online brokers don’t even offer forex trading.
                                        <br>
                                        <br>
                                        What’s more, of the few retailer traders who engage in forex trading, most struggle
                                        to turn a profit with forex. CompareForexBrokers found that, on average, 71% of
                                        retail FX traders lost money. This makes forex trading a strategy often best left to
                                        the professionals.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection

@push('page-script')
@endpush
