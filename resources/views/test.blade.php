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

                    <div class="d-flex justify-content-between">
                        <div class="d-flex justify-content-between">
                            <div>
                                <img class="rounded-circle border" src="https://s3-symbol-logo.tradingview.com/country/US.svg"
                                    alt="flag">
                                <img class="rounded-circle border ml-n3"
                                    src="https://s3-symbol-logo.tradingview.com/country/EU.svg" alt="flag">
                            </div>
                            <div>
                                <span>
                                    EURUSD
                                </span>
                                <br>
                                <small>Euro / U.S. Dollar</small>
                            </div>
                        </div>
                        <div>
                            <div class="row text-right">
                                <div class="col">
                                    1.06641
                                </div>
                                <div class="col text-success">
                                    +0.53%
                                    <br>
                                    +0.00559
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>
    </div>

    <div class="crypto-ticker"></div>

    <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
        <div id="tradingview-widget">
            <div style="width: 100%; height: 361px;">

                <iframe scrolling="no" allowtransparency="true" frameborder="0"
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
