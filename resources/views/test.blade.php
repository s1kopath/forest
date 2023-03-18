@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush
@section('page-content')
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Employee
                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Fist Name</th>
                                <th>Last Name</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                                <td>
                                    <button class="btn btn-default btn-xs">
                                        <span class="glyphicon glyphicon-eye-open"></span>
                                    </button>
                                </td>
                                <td>Carlos</td>
                                <td>Mathias</td>
                                <td>Leme</td>
                                <td>SP</td>
                                <td>new</td>
                            </tr>

                            <tr>
                                <td colspan="12" class="hiddenRow">
                                    <div class="accordian-body collapse" id="demo1">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="info">
                                                    <th>Job</th>
                                                    <th>Company</th>
                                                    <th>Salary</th>
                                                    <th>Date On</th>
                                                    <th>Date off</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr data-toggle="collapse" class="accordion-toggle" data-target="#demo10">
                                                    <td> <a href="#">Enginner Software</a></td>
                                                    <td>Google</td>
                                                    <td>U$8.00000 </td>
                                                    <td> 2016/09/27</td>
                                                    <td> 2017/09/27</td>
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-sm">
                                                            <i class="glyphicon glyphicon-cog"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td colspan="12" class="hiddenRow">
                                                        <div class="accordian-body collapse" id="demo10">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <td><a href="#"> XPTO 1</a></td>
                                                                        <td>XPTO 2</td>
                                                                        <td>Obs</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>item 1</th>
                                                                        <th>item 2</th>
                                                                        <th>item 3 </th>
                                                                        <th>item 4</th>
                                                                        <th>item 5</th>
                                                                        <th>Actions</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>item 1</td>
                                                                        <td>item 2</td>
                                                                        <td>item 3</td>
                                                                        <td>item 4</td>
                                                                        <td>item 5</td>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="btn btn-default btn-sm">
                                                                                <i class="glyphicon glyphicon-cog"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Scrum Master</td>
                                                    <td>Google</td>
                                                    <td>U$8.00000 </td>
                                                    <td> 2016/09/27</td>
                                                    <td> 2017/09/27</td>
                                                    <td> <a href="#" class="btn btn-default btn-sm">
                                                            <i class="glyphicon glyphicon-cog"></i>
                                                        </a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Back-end</td>
                                                    <td>Google</td>
                                                    <td>U$8.00000 </td>
                                                    <td> 2016/09/27</td>
                                                    <td> 2017/09/27</td>
                                                    <td> <a href="#" class="btn btn-default btn-sm">
                                                            <i class="glyphicon glyphicon-cog"></i>
                                                        </a>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Front-end</td>
                                                    <td>Google</td>
                                                    <td>U$8.00000 </td>
                                                    <td> 2016/09/27</td>
                                                    <td> 2017/09/27</td>
                                                    <td> <a href="#" class="btn btn-default btn-sm">
                                                            <i class="glyphicon glyphicon-cog"></i>
                                                        </a>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>



                            <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                                <td><button class="btn btn-default btn-xs"><span
                                            class="glyphicon glyphicon-eye-open"></span></button></td>
                                <td>Silvio</td>
                                <td>Santos</td>
                                <td>São Paulo</td>
                                <td>SP</td>
                                <td> new</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="hiddenRow">
                                    <div id="demo2" class="accordian-body collapse">Demo2</div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

    {{-- <style>
        @import url("https://fonts.googleapis.com/css?family=Orbitron");

        html {
            box-sizing: border-box;
        }

        *,
        *::after,
        *::before {
            box-sizing: inherit;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
            outline: none;
        }

        body {
            margin: 0;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            /*            height: 100vh;*/
            background-color: black;
            font-family: "Orbitron", sans-serif;
        }

        .panel {
            width: 100%;
            height: 50%;
            background-color: #999;
        }

        .tbl-ticker {
            width: 100%;
            height: 100%;
            color: white;
            margin: 0 auto;
            border-spacing: 0;
            border-collapse: collapse;
            border-right: 3px solid transparent;
        }

        .tbl-ticker>tbody>tr>td:first-child {
            text-align: center;
            font-size: 2.5em;
            width: 200px;
            background-color: rgba(0, 0, 0, 0.5);
            border-right: 3px transparent solid;
            border-left: 3px transparent solid;
        }

        .tbl-ticker>tbody>tr>td:nth-child(2) {
            text-align: center;
            font-size: 2.5em;
            width: 120px;
        }

        .box {
            width: 100%;
            text-align: right;
            padding: 20px 100px 0 20px;
            font-size: 2.5em;
        }

        .box span {
            position: relative;
            align-items: center;
            justify-content: center;
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.9);
            line-height: 1.75;
        }

        .percent-change {
            width: 100%;
            text-align: right;
            padding-right: 100px;
            padding-bottom: 20px;
            font-size: 1.5em;
            text-shadow: 0 0 15px rgba(255, 255, 255, 0.9);
        }

        .price-up {
            background-color: #008000;
        }

        .price-down {
            background-color: #cc0000;
        }

        .dir-up,
        .dir-down {
            display: none;
        }
    </style> --}}
    <div class="crypto-ticker"></div>

    <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
        <div id="tradingview-widget">
            <div style="width: 100%; height: 361px;">
                <style>
                    .tradingview-widget-copyright {
                        font-size: 13px !important;
                        line-height: 32px !important;
                        text-align: center !important;
                        vertical-align: middle !important;
                        /* @mixin sf-pro-display-font; */
                        font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright .blue-text {
                        color: #2962FF !important;
                    }

                    .tradingview-widget-copyright a {
                        text-decoration: none !important;
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:visited {
                        color: #9db2bd !important;
                    }

                    .tradingview-widget-copyright a:hover .blue-text {
                        color: #1E53E5 !important;
                    }

                    .tradingview-widget-copyright a:active .blue-text {
                        color: #1848CC !important;
                    }

                    .tradingview-widget-copyright a:visited .blue-text {
                        color: #2962FF !important;
                    }
                    .logoWrap-wAvQLR3C{
                        display: none !important;
                    }
                </style><iframe scrolling="no" allowtransparency="true" frameborder="0"
                    src="https://s.tradingview.com/embed-widget/market-overview/?locale=en#%7B%22colorTheme%22%3A%22light%22%2C%22dateRange%22%3A%221D%22%2C%22showChart%22%3Afalse%2C%22width%22%3A%22100%25%22%2C%22height%22%3A361%2C%22largeChartUrl%22%3A%22%22%2C%22isTransparent%22%3Atrue%2C%22showSymbolLogo%22%3Atrue%2C%22showFloatingTooltip%22%3Afalse%2C%22plotLineColorGrowing%22%3A%22rgba(41%2C%2098%2C%20255%2C%201)%22%2C%22plotLineColorFalling%22%3A%22rgba(41%2C%2098%2C%20255%2C%201)%22%2C%22gridLineColor%22%3A%22rgba(240%2C%20243%2C%20250%2C%200)%22%2C%22scaleFontColor%22%3A%22rgba(120%2C%20123%2C%20134%2C%201)%22%2C%22belowLineFillColorGrowing%22%3A%22rgba(41%2C%2098%2C%20255%2C%200.12)%22%2C%22belowLineFillColorFalling%22%3A%22rgba(41%2C%2098%2C%20255%2C%200.12)%22%2C%22belowLineFillColorGrowingBottom%22%3A%22rgba(41%2C%2098%2C%20255%2C%200)%22%2C%22belowLineFillColorFallingBottom%22%3A%22rgba(41%2C%2098%2C%20255%2C%200)%22%2C%22symbolActiveColor%22%3A%22rgba(41%2C%2098%2C%20255%2C%200.10)%22%2C%22tabs%22%3A%5B%7B%22title%22%3A%22Instruments%22%2C%22symbols%22%3A%5B%7B%22s%22%3A%22FX%3AEURUSD%22%7D%2C%7B%22s%22%3A%22FX%3AGBPUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDJPY%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCHF%22%7D%2C%7B%22s%22%3A%22FX%3AAUDUSD%22%7D%2C%7B%22s%22%3A%22FX%3AUSDCAD%22%7D%5D%2C%22originalTitle%22%3A%22Instruments%22%7D%5D%2C%22utm_source%22%3A%22127.0.0.2%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22market-overview%22%2C%22page-uri%22%3A%22127.0.0.2%3A8000%2F%22%7D"
                    style="box-sizing: border-box; display: block; height: 361px; width: 100%;"
                    __idm_id__="827393"></iframe>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        /**
         * BTC - bitcoin
         * ETH - ethereum
         * XLM - stellar
         * XMR - monero
         * ZEC - zcash
         */

        var cryptoCurrencies = ["bitcoin", "ethereum", "stellar", "monero", "zcash"];

        var cryptoTicker = document.querySelector(".crypto-ticker");

        fetchCryptosCurrencies();

        var top100 = [];

        function fetchCryptosCurrencies() {
            var api = "https://api.coingecko.com/api/v3/coins/";
            var uris = cryptoCurrencies.map((c) => api + c + "?localization=false");

            Promise.all(
                    uris.map((url) =>
                        fetch(url)
                        .then(checkStatus) // check the response of our APIs
                        .then(parseJSON) // parse it to Json
                        .catch((error) => console.log("There was a problem!", error))
                    )
                )
                .then((data) => top100.push(...data))
                .then(displauCryptoCurrencies)
                .then(updateTrend);
        }

        function checkStatus(response) {
            if (response.ok) {
                return Promise.resolve(response);
            } else {
                return Promise.reject(new Error(response.statusText));
            }
        }

        function parseJSON(response) {
            return response.json();
        }

        function displauCryptoCurrencies() {
            const html = top100
                // .filter(coin => cryptoCurrencies.includes(coin.id))
                .map((coin) => {
                    const id = coin.id;
                    const name = coin.name;
                    const symbol = coin.symbol;
                    const rank = coin.rank;
                    // const price_usd = coin.price_usd;
                    const price_usd = coin.market_data.current_price.usd;
                    const price_btc = coin.price_btc;
                    const twentyfourh_volume_usd = coin["24h_volume_usd"];
                    const market_cap_usd = coin.market_cap_usd;
                    const available_supply = coin.available_supply;
                    const total_supply = coin.total_supply;
                    const max_supply = coin.max_supply;
                    // const percent_change_1h = coin.percent_change_1h;
                    const percent_change_1h =
                        coin.market_data.price_change_percentage_1h_in_currency.usd;
                    const percent_change_24h = coin.percent_change_24h;
                    const percent_change_7d = coin.percent_change_7d;
                    const last_updated = coin.last_updated;
                    return `
      <div class="${id}-panel panel">
          <table class="tbl-ticker">
              <tr>
                  <td><img src="https://www.xriva.xyz/crypto-icons/${symbol.toLowerCase()}.png" alt="${name}"> <span>${symbol.toUpperCase()}</span>
                  </td>
                  <td>
                      <i class="fa fa-caret-up dir-up"></i>
                      <i class="fa fa-caret-down dir-down"></i>
                  </td>
                  <td>
                      <div class="box">
                          <span class="price" data-percent-change-last-hour="${percent_change_1h}">$ ${price_usd}</span>
                      </div>
                      <div class="percent-change">
                        ${parseFloat(percent_change_1h).toFixed(2)}%
                      </div>
                  </td>
              </tr>
          </table>
      </div>
      `;
                })
                .join("");
            cryptoTicker.innerHTML = html;
        }

        function updateTrend() {
            var ticker = document.querySelector(".crypto-ticker");
            var panel = ticker.querySelectorAll(".panel");
            var html = Array.prototype.map.call(panel, function(panel) {
                var percentChange1h = panel.querySelector(".price").dataset
                    .percentChangeLastHour;
                var trendUp = panel.querySelector(".dir-up");
                var trendDown = panel.querySelector(".dir-down");
                if (percentChange1h < 0) {
                    panel.classList.add("price-down");
                    panel.classList.remove("price-up");
                    trendDown.style.display = "block";
                    trendUp.style.display = "none";
                } else if (percentChange1h > 0) {
                    panel.classList.add("price-up");
                    panel.classList.remove("price-down");
                    trendDown.style.display = "none";
                    trendUp.style.display = "block";
                }
                return html;
            });
        }
    </script>
@endpush
