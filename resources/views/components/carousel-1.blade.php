<style>
    .carousel-indicators>li {
        border-radius: 50%;
        background-clip: initial;
        width: 19px;
        height: 1px;
    }

    .carousel-indicators .active {
        background-color: #091b65;
        opacity: 80%;
    }
</style>
<div class="bd-dark">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{ route('staking') }}">
                    <img src="{{ asset('front-end/img/slider/01 Staking-01.png') }}" class="d-block w-100"
                        alt="Reeve Capital">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('forex_trading') }}">
                    <img src="{{ asset('front-end/img/slider/02 Forex Trading-01.png') }}" class="d-block w-100"
                        alt="Reeve Capital">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('forex_broker') }}">
                    <img src="{{ asset('front-end/img/slider/03 Forex Broker-01.png') }}" class="d-block w-100"
                        alt="Reeve Capital">
                </a>
            </div>
            <div class="carousel-item">
                <a href="{{ route('e_commerce') }}">
                    <img src="{{ asset('front-end/img/slider/04 E-Commerce-01.png') }}" class="d-block w-100"
                        alt="Reeve Capital">
                </a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
