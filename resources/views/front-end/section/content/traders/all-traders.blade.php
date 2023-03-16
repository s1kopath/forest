@extends('front-end.master')
@section('title')
    All Traders
@endsection

@section('page-style')
<style>
    .in-testimonial-7 .uk-card {
        padding-top: 0px;
        padding-bottom: 0px;
    }
.uk-card-body {
    display: flow-root;
    padding: 0px 30px;
}
</style>
@endsection

@section('breadcrumb')
    @include('front-end.breadcrumb')
@endsection

@section('content')
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-3-4@m">
                    <div data-uk-grid>
                        <div class="uk-width-1-2@s">
                            <h1 class="uk-margin-remove">Our All Traders.
                            </h1>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">To engage traders so their
                                companies can grow</p>
                            <p>Traders buy and sell financial instruments traded in the stock markets, derivatives markets and commodity markets, comprising the stock exchanges, derivatives exchanges, and the commodities exchanges.</p>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="uk-margin-large" data-uk-grid>
                                <div class="uk-width-1-3@m">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="3356">0</span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4>In All Traders</h4>
                                    <p>A trader is a person, firm, or entity in finance who buys and sells financial instruments, such as forex, cryptocurrencies, stocks.</p>
                                </div>
                            </div>
                            <div class="uk-margin-large" data-uk-grid>
                                <div class="uk-width-1-3@m">
                                    <h1 class="uk-text-primary uk-text-right@m">
                                        <span class="count" data-counter-end="10238">0</span>
                                    </h1>
                                    <hr class="uk-divider-small uk-text-right@m">
                                </div>
                                <div class="uk-width-expand@m">
                                    <h4>Business Launch</h4>
                                    <p>At vero eos et accusamus iusto dignissimos ducimus qui blanditiis praesentium
                                        voluta deleniti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-top">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-1-2@s uk-child-width-1-4@m in-testimonial-7" data-uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-1.png') }}" alt="client-logo"
                            width="150" >
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Really love the product! It saves so much time and helps a lot in organize our
                                    feedback. Very huge potential.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo"
                            width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>This is my one stop shop for sending all Updates to investors, board of directors
                                    .</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Melvin Cortez<br><cite>Cloud Architect at stormpath</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-3.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Has been a great tool for me on monthly updates & helps to communicate to the team.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Franklin Clark<br><cite>Sales Analyst at eventbrite</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-4.png') }}" alt="client-logo"
                            width="150" >
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Really love the product! It saves so much time and helps a lot in organize our
                                    feedback. Very huge potential.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-5.png') }}" alt="client-logo"
                            width="150" >
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Really love the product! It saves so much time and helps a lot in organize our
                                    feedback. Very huge potential.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-6.png') }}" alt="client-logo"
                            width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>This is my one stop shop for sending all Updates to investors, board of directors
                                    .</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Melvin Cortez<br><cite>Cloud Architect at stormpath</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-7.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Has been a great tool for me on monthly updates & helps to communicate to the team.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Franklin Clark<br><cite>Sales Analyst at eventbrite</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-8.png') }}" alt="client-logo"
                            width="150" >
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Really love the product! It saves so much time and helps a lot in organize our
                                    feedback. Very huge potential.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-9.png') }}" alt="client-logo"
                            width="150" >
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Really love the product! It saves so much time and helps a lot in organize our
                                    feedback. Very huge potential.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-2.png') }}" alt="client-logo"
                            width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>This is my one stop shop for sending all Updates to investors, board of directors
                                    .</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Melvin Cortez<br><cite>Cloud Architect at stormpath</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-3.png') }}" alt="client-logo"
                                width="150">
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Has been a great tool for me on monthly updates & helps to communicate to the team.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Franklin Clark<br><cite>Sales Analyst at eventbrite</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
                        <div class="uk-card-header uk-text-center">
                            <img src="{{ asset('front-end/img/blockit/in-team-4.png') }}" alt="client-logo"
                            width="150" >
                        </div>
                        <div class="uk-card-body">
                            <blockquote>
                                <p>Really love the product! It saves so much time and helps a lot in organize our
                                    feedback. Very huge potential.</p>
                            </blockquote>
                        </div>
                        <div class="uk-card-footer">
                            <blockquote>
                                <footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
                            </blockquote>
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
