@extends('front-end.master')
@section('title')
    Staking
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
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-2-3@m">
                    <div class="in-blog-1" data-uk-grid>
                        <div class="in-stretch">
                            <h3>
                                <a href="#"
                                    class="text-decoration-none font-weight-bold" style="color:black; font-size:50px">What is staking?</a>
                            </h3>
                            <article class="uk-card uk-card-default uk-border-rounded mt-3">
                                <div class="uk-card-media-top">
                                    <img src="{{ asset('front-end/content/staking.jpeg') }}" width="800px" >
                                </div>
                                <div class="uk-card-body">

                                    <p>Like a lot of things in crypto, staking can be a complicated idea or a simple one depending on how many levels of understanding you want to unlock. For a lot of crypto users, knowing that staking is a way of earning rewards while holding onto certain cryptocurrencies is the key takeaway. But even if you’re just looking to earn some staking rewards, it’s useful to understand at least a little bit about how and why it works the way it does.</p>

                                </div>

                            </article>
                        </div>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded">
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">How does staking work?</a>
                                    </h3>
                                    <p>If you own a cryptocurrency that uses a proof of stake blockchain, you are eligible to stake your tokens.
                                        <br>
                                        <br>
                                        Staking locks up your assets to participate and help maintain the security of that network’s blockchain. In exchange for locking up your assets and participating in the network validation, validators receive rewards in that cryptocurrency known as staking rewards.
                                        <br>
                                        <br>
                                        Many leading crypto exchanges, like Binance.US, Coinbase and Kraken, offer staking rewards. “A more passive or novice user can just stake their cryptos directly on the exchange for slightly more convenience, in return for the exchange taking a portion of the staking yields,” says Trakulhoon.</p>

                                </div>

                            </article>
                        </div>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded">
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">What is Proof of Stake?</a>
                                    </h3>
                                    <p>A newer consensus mechanism called Proof of Stake has emerged — with the idea of  increasing speed and efficiency while lowering fees. A major way Proof of Stake reduces costs is by not requiring all those miners to churn through math problems, which is an energy-intensive process. Instead, transactions are validated by people who stake their tokens.
                                    <br>
                                    <br>
                                    •&nbsp&nbsp Staking serves a similar function to mining, in that it’s the process by which a network participant gets selected to add the latest batch of transactions to the blockchain and earn some crypto in exchange. Stakers also help establish which blocks are valid.
                                    <br>
                                    <br>
                                    •&nbsp&nbsp The exact implementations vary from project to project, but in essence, users vote their tokens to ensure the security of the blockchain. Their staked tokens act as a guarantee that they are acting in good faith and as a disincentive to violating the protocol rules.</p>
                                </div>
                            </article>
                        </div>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded">
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">What are the advantages of staking?</a>
                                    </h3>
                                    <p>Many long-term crypto holders look at staking as a way of making their assets work for them by generating rewards, rather than collecting dust in their crypto wallets.
                                    <br>
                                    <br>
                                    Staking is also a way to contribute to the security and efficiency of the blockchain projects you support. By staking some of your funds, you make the blockchain more resistant to attacks and strengthen its ability to process transactions.</p>
                                </div>
                            </article>
                        </div>
                        <div class="in-stretch">
                            <article class="uk-card uk-card-default uk-border-rounded">
                                <div class="uk-card-body">
                                    <h3>
                                        <a href="#" class="link-primary text-decoration-none">What are some staking risks?</a>
                                    </h3>
                                    <p>Staking often requires a lockup or “vesting” period, where your crypto can’t be transferred for a certain period of time. This can be a drawback, as you won’t be able to trade staked tokens during this period even if prices shift. Before staking, it is important to research the specific staking requirements and rules for each project you are looking to get involved with.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="uk-width-expand@m mt-5">
                    <div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded mt-5">

                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-margin-remove-bottom">How does staking work?</h5>
                            <ul class="uk-list uk-list-divider uk-list-large widget-latest"></ul>
                        </div>
                    </aside>

                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-margin-remove-bottom">What is Proof of Stake?</h5>

                        </div>
                    </aside>
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-margin-remove-bottom">What are the advantages of staking?</h5>

                        </div>
                    </aside>
                    <aside class="uk-margin-medium-bottom">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <h5 class="uk-heading-bullet uk-margin-remove-bottom">What are some staking risks?</h5>

                        </div>
                    </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->

@endsection

@section('page-script')
@endsection
