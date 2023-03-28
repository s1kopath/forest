@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .coin-type[type="radio"]:checked+label {
            background-color: #ececec;
            border-radius: 5px;
        }

        #deposit-section,
        #deposit-next-section {
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .overlay {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999;
            background: rgba(255, 255, 255, 0.8) url("{{ asset('back-end/img/loading-spinner.gif') }}") center no-repeat;
        }

        /* Turn off scrollbar when body element has the loading class */
        body.loading {
            overflow: hidden;
        }

        /* Make spinner image visible when body element has the loading class */
        body.loading .overlay {
            display: block;
        }
    </style>
@endpush

@section('page-title', 'Funds')

@section('page-content')
    <div class="overlay"></div>
    <div class="card">
        <div class="card-block">
            <div class="col-lg-12 col-xl-12">
                <ul class="nav nav-tabs md-tabs d-flex" role="tablist" id="tab-list">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#deposit" role="tab">Deposit</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#withdrawal" role="tab">Withdrawal</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#setMethod" role="tab">Set Method</a>
                        <div class="slide"></div>
                    </li>
                </ul>

                <div class="tab-content card-block">
                    {{-- deposit tab --}}
                    <div class="tab-pane mt-3 active" id="deposit" role="tabpanel">
                        <h4 class="text-primary font-weight-bold d-flex justify-content-between">
                            <span>Deposit:</span>
                            <span>User ID: {{ $user->username }}</span>
                        </h4>

                        <div class="d-flex justify-content-center overflow-auto pb-3">
                            <img type="button" class="img-fluid rounded mx-1 shadow-sm border" style="width: 100px"
                                src="{{ asset('front-end/img/deposit/1.png') }}" alt="forest">
                            <img type="button" class="img-fluid rounded mx-1 shadow-sm border" style="width: 100px"
                                src="{{ asset('front-end/img/deposit/5.png') }}" alt="forest">
                            <img type="button" class="img-fluid rounded mx-1 shadow-sm border" style="width: 100px"
                                src="{{ asset('front-end/img/deposit/6.png') }}" alt="forest">
                        </div>

                        <p class="text-center h3">
                            <span>HOW WOULD YOU LIKE TO PAY?</span>
                        </p>

                        <form action="{{ route('new_deposit') }}" method="post" id="deposit-form">
                            @csrf
                            <div class="d-flex justify-content-center" id="deposit-section">
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Currency</legend>
                                            <select class="form-control form-control-sm ms-input" name="currency">
                                                <option value="">Choose Currency</option>
                                                <option value="USD" selected>USD</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Amount</legend>
                                            <input class="form-control ms-input" type="number" name="amount"
                                                placeholder="Amount">
                                        </fieldset>
                                        <p>
                                            <span class="text-danger">*</span> Min-Max Amounts
                                            <br>
                                            &nbsp; 20 USD - 50000 USD
                                        </p>
                                        <div class="col-md-12 text-center">
                                            <button class="btn jss619 shadow" type="button" onclick="deposit()">
                                                DEPOSIT
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none justify-content-center" id="deposit-next-section">
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <div class="container rounded p-1 mb-2" style="background-color: #f5f5f5">
                                            <div class="row m-1">
                                                <div class="col">
                                                    <span class="font-weight-bold" id="currency-lvl-2-1">NULL</span>
                                                </div>
                                                <div class="col text-right">
                                                    <span id="amount-after">00</span>
                                                    <span class="text-muted" id="currency-lvl-2-2">NULL</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <input type="text" class="form-control" placeholder="🔎 Search coin">
                                        </div>
                                        <div class="row my-3">
                                            <div class="col">
                                                <input class="d-none coin-type" type="radio" name="coin_type"
                                                    id="usdt" value="USDT Tether">
                                                <label for="usdt" type="button">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('back-end/img/trade/tether.png') }}" alt="flag">
                                                    <span class="font-weight-bold">USDT</span>
                                                    <small class="text-secondary">Tether</small>
                                                </label>
                                            </div>
                                            <div class="col text-right">
                                                <span class="text-secondary" id="usdt-usd"> </span>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col">
                                                <input class="d-none coin-type" type="radio" name="coin_type"
                                                    id="btc" value="BTC Bitcoin">
                                                <label for="btc" type="button">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('back-end/img/trade/bitcoin.png') }}"
                                                        alt="flag">
                                                    <span class="font-weight-bold">BTC</span>
                                                    <small class="text-secondary">Bitcoin</small>
                                                </label>
                                            </div>
                                            <div class="col text-right">
                                                <span class="text-secondary" id="btc-usd"> </span>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col">
                                                <input class="d-none coin-type" type="radio" name="coin_type"
                                                    id="eth" value="ETH Ethereum">
                                                <label for="eth" type="button">
                                                    <img class="rounded-circle"
                                                        src="{{ asset('back-end/img/trade/ethereum.png') }}"
                                                        alt="flag">
                                                    <span class="font-weight-bold">ETH</span>
                                                    <small class="text-secondary">Ethereum</small>
                                                </label>
                                            </div>
                                            <div class="col text-right">
                                                <span class="text-secondary" id="eth-usd"> </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-outline-dark shadow" type="button" onclick="back1()">
                                                BACK
                                            </button>
                                            <button class="btn btn-cus-jss619 shadow" type="button"
                                                onclick="depositNext()">
                                                NEXT
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none justify-content-center" id="deposit-after-section">
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <p class="font-weight-bold">Choose network for <span
                                                id="network-title">NULL</span></p>
                                        <div class="form-check my-2">
                                            <input class="form-check-input" type="radio" name="network_type"
                                                id="ERC20" value="Ethereum network (ERC20)">
                                            <label class="form-check-label" style="cursor: pointer;" for="ERC20">
                                                ETH <small class="text-muted">Ethereum network (ERC20)</small>
                                            </label>
                                        </div>
                                        <div class="form-check my-2">
                                            <input class="form-check-input" type="radio" name="network_type"
                                                id="TRC" value="TRON network (TRC)">
                                            <label class="form-check-label" style="cursor: pointer;" for="TRC">
                                                TRX <small class="text-muted">TRON network (TRC)</small>
                                            </label>
                                        </div>
                                        <div class="form-check my-2">
                                            <input class="form-check-input" type="radio" name="network_type"
                                                id="BEP" value="BNB Smart Chain network (BEP)">
                                            <label class="form-check-label" style="cursor: pointer;" for="BEP">
                                                BSC <small class="text-muted">BNB Smart Chain network (BEP)</small>
                                            </label>
                                        </div>
                                        <p class="text-info">Not sure what to use?</p>
                                        <div class="p-2"></div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-outline-dark shadow" type="button" onclick="back2()">
                                                BACK
                                            </button>
                                            <button class="btn btn-cus-jss619 shadow" type="button"
                                                onclick="depositAfterNext()">
                                                NEXT
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none justify-content-center" id="deposit-final-section">
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <p class="font-weight-bold">Would you like to proceed?</p>
                                        <p>
                                            Coin selected: <img class="rounded-circle" id="final-coin-src"
                                                src="{{ asset('back-end/img/trade/tether.png') }}" alt="flag">
                                            <span class="font-weight-bold" id="final-coin-title">NULL</span>
                                            <small class="text-secondary" id="final-coin-title-2">NULL</small>
                                        </p>
                                        <p>
                                            Blockchain:
                                            <span class="font-weight-bold" id="network-prefix">NULL</span>
                                            <small class="text-secondary" id="network-suffix">NULL</small>
                                        </p>

                                        <div class="p-4"></div>

                                        <p>
                                            By proceeding with this deposit, you are agreeing with our
                                            <a href="#" class="text-primary">
                                                <u>Terms and Conditions</u>
                                            </a>
                                        </p>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-outline-dark shadow" type="button" onclick="back3()">
                                                BACK
                                            </button>
                                            <button class="btn btn-cus-jss619 shadow" type="button"
                                                onclick="submitDeposit()">
                                                YES, PROCEED
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @if ($user->total_deposit > 0)
                            <div id="table_data">

                            </div>
                        @endif
                    </div>
                    {{-- withdrawal tab --}}
                    <div class="tab-pane mt-3" id="withdrawal" role="tabpanel">
                        <h4 class="text-primary font-weight-bold text-center">
                            <span>Select Method:</span>
                        </h4>
                        <div class="d-flex justify-content-center form-group">
                            <div class="form-check m-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id=""
                                    value="option1" checked>
                                <label class="form-check-label" for="">
                                    Visa/Master Card
                                </label>
                            </div>
                            <div class="form-check m-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Bank
                                </label>
                            </div>
                            <div class="form-check m-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3"
                                    value="option3">
                                <label class="form-check-label" for="exampleRadios3">
                                    Crypto
                                </label>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Account</legend>
                                        <select class="form-control form-control-sm ms-input" name="payment_pethod">
                                            <option value="">Choose Account...</option>
                                            <option value="01245698741222">01245698741222</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Amount of Money</legend>
                                        <input class="form-control ms-input" type="number" name="amount"
                                            placeholder="Enter Amount" required>
                                    </fieldset>
                                </div>

                                <div class="col-md-3">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Charge</legend>
                                        <input class="form-control ms-input" type="number" step="0.01"
                                            name="charge" placeholder="0.00" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-3">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Net Amount</legend>
                                        <input class="form-control ms-input" type="number" step="0.01"
                                            name="net_amount" placeholder="0.00" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">One Time Password</legend>
                                        <div class="text-right" style="margin-bottom: -25px;">
                                            <button class="btn btn-primary btn-sm p-1" type="button"
                                                id="button-addon2">Send OTP</button>
                                        </div>
                                        <input class="form-control ms-input" type="text" name="otp"
                                            placeholder="Enter 6 digit OTP" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="text-center m-t-20 m-b-20">
                                <button class="btn btn-primary rounded-pill">
                                    REQUEST WITHDRAWAL
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- withdrawal method tab --}}
                    <div class="tab-pane mt-3" id="setMethod" role="tabpanel">
                        <h4 class="font-weight-bold text-center">
                            <u>Visa/master Card</u>
                        </h4>
                        <form action="{{ route('update_visa') }}" method="post">
                            @csrf
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Card Holder's Name</legend>
                                            <input class="form-control ms-input" type="text" name="card_holder_name"
                                                placeholder="Enter Card Holder's Name"
                                                value="{{ $user->visaData->card_holder_name ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Card Number</legend>
                                            <input class="form-control ms-input" type="text" name="card_number"
                                                placeholder="Enter Card Number"
                                                value="{{ $user->visaData->card_number ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            @if (!$user->visaData)
                                <div class="text-center m-t-20 m-b-20">
                                    <button class="btn btn-primary rounded-pill">
                                        update
                                    </button>
                                </div>
                            @endif
                        </form>
                        <hr>
                        <h4 class="font-weight-bold text-center">
                            <u>Bank</u>
                        </h4>
                        <form action="{{ route('update_bank') }}" method="post">
                            @csrf
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Bank Name</legend>
                                            <input class="form-control ms-input" type="text" name="bank_name"
                                                placeholder="Enter Bank Name"
                                                value="{{ $user->bankData->bank_name ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Branch Name</legend>
                                            <input class="form-control ms-input" type="text" name="branch_name"
                                                placeholder="Enter Branch Name"
                                                value="{{ $user->bankData->branch_name ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Account Name</legend>
                                            <input class="form-control ms-input" type="text" name="account_name"
                                                placeholder="Enter Account Name"
                                                value="{{ $user->bankData->account_name ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Account Number</legend>
                                            <input class="form-control ms-input" type="text" name="account_number"
                                                placeholder="Enter Account Number"
                                                value="{{ $user->bankData->account_number ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-2">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Country</legend>
                                            <input class="form-control ms-input" type="text" name="country"
                                                placeholder="Enter Country" value="{{ $user->bankData->country ?? '' }}"
                                                required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-2">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">State</legend>
                                            <input class="form-control ms-input" type="text" name="state"
                                                placeholder="Enter State" value="{{ $user->bankData->state ?? '' }}"
                                                required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Swiftcode</legend>
                                            <input class="form-control ms-input" type="text" name="swift_code"
                                                placeholder="Enter Swiftcode"
                                                value="{{ $user->bankData->swift_code ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Routing Number</legend>
                                            <input class="form-control ms-input" type="text" name="routing_number"
                                                placeholder="Enter Routing Number"
                                                value="{{ $user->bankData->routing_number ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            @if (!$user->bankData)
                                <div class="text-center m-t-20 m-b-20">
                                    <button class="btn btn-primary rounded-pill">
                                        update
                                    </button>
                                </div>
                            @endif
                        </form>
                        <hr>
                        <h4 class="font-weight-bold text-center">
                            <u>Crypto</u>
                        </h4>
                        <form action="{{ route('update_crypto') }}" method="post">
                            @csrf
                            <div class="container">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Network (USDT)</legend>
                                            <input class="form-control ms-input" type="text" name="network"
                                                placeholder="Enter Network" value="Tron (Trc20)" readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Wallet Address</legend>
                                            <input class="form-control ms-input" type="text" name="wallet_address"
                                                placeholder="Enter Wallet Address"
                                                value="{{ $user->cryptoData->wallet_address ?? '' }}" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            @if (!$user->cryptoData)
                                <div class="text-center m-t-20 m-b-20">
                                    <button class="btn btn-primary rounded-pill">
                                        update
                                    </button>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('js')
        <script>
            // function to stay at same tab after refresh
            $(document).ready(function() {
                $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                    localStorage.setItem('activeTab', $(e.target).attr('href'));
                });
                var activeTab = localStorage.getItem('activeTab');
                if (activeTab) {
                    $('#tab-list a[href="' + activeTab + '"]').tab('show');
                }
            });
        </script>

        <script>
            var _currency = $('[name="currency"]');
            var _amount = $('[name="amount"]');
            var _currency_2_1 = $('#currency-lvl-2-1');
            var _currency_2_2 = $('#currency-lvl-2-2');
            var _amount_after = $('#amount-after');

            function loader() {
                $("body").addClass("loading");
                setTimeout(function() {
                    $("body").removeClass("loading")
                }, 100);
            }

            var cryptoCurrencies = ["bitcoin", "ethereum", "tether"];

            function fetchCryptosCurrencies2(amount) {
                cryptoCurrencies.forEach(element => {
                    var api = "https://api.coingecko.com/api/v3/coins/" + element + "?localization=false";
                    fetch(api)
                        .then(response => {
                            return response.json();
                        })
                        .then(coin => {
                            displauCryptoCurrencies2(coin, amount);
                        })

                });
            }

            function displauCryptoCurrencies2(coin, amount) {
                var price_usd = coin.market_data.current_price.usd * amount;

                if (coin.name == "Bitcoin") {
                    document.getElementById("btc-usd").innerHTML = "~" + price_usd + " BTC";
                }
                if (coin.name == "Ethereum") {
                    document.getElementById("eth-usd").innerHTML = "~" + price_usd + " ETH";
                }
                if (coin.name == "Tether") {
                    document.getElementById("usdt-usd").innerHTML = "~" + price_usd + " USDT";
                }
            }

            function deposit() {
                if (_currency.val() != '' && _amount.val() != '') {
                    _currency_2_1.html(_currency.val());
                    _currency_2_2.html(_currency.val());
                    _amount_after.html(_amount.val());

                    $("#deposit-section").toggleClass("d-flex d-none");
                    $("#deposit-next-section").toggleClass("d-flex d-none");

                    fetchCryptosCurrencies2(_amount.val());

                    loader();
                } else {
                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        position: 'top-end',
                        title: 'Select currency and enter amount!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }

            function depositNext() {
                var select_coin = $("input[name='coin_type']:checked");
                var select_coin_type = select_coin.val();
                if (select_coin_type) {
                    var id_val = select_coin.attr("id");
                    var img_src = $("label[for='" + id_val + "']").find('img').attr('src');
                    var strSplit = select_coin_type.split(" ");

                    $("#network-title").html(strSplit[0]);
                    $("#final-coin-title").html(strSplit[0]);
                    $("#final-coin-title-2").html(strSplit[1]);
                    $("#final-coin-src").attr('src', img_src);

                    $("#deposit-next-section").toggleClass("d-flex d-none");
                    $("#deposit-after-section").toggleClass("d-flex d-none");

                    loader();
                } else {
                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        position: 'top-end',
                        title: 'Select a coin type!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }

            function depositAfterNext() {
                var _select_network_type = $("input[name='network_type']:checked").val();
                if (_select_network_type) {

                    var network_prefix = _select_network_type.substring(0, 3);
                    var network_suffix = _select_network_type.substring(4, _select_network_type.length);

                    $("#network-prefix").html(network_prefix);
                    $("#network-suffix").html(network_suffix);

                    $("#deposit-after-section").toggleClass("d-flex d-none");
                    $("#deposit-final-section").toggleClass("d-flex d-none");

                    loader();
                } else {
                    Swal.fire({
                        toast: true,
                        icon: 'error',
                        position: 'top-end',
                        title: 'Select a network type!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }

            function back1() {
                $("#deposit-section").toggleClass("d-flex d-none");
                $("#deposit-next-section").toggleClass("d-flex d-none");

                loader();
            }

            function back2() {
                $("#deposit-next-section").toggleClass("d-flex d-none");
                $("#deposit-after-section").toggleClass("d-flex d-none");

                loader();
            }

            function back3() {
                $("#deposit-after-section").toggleClass("d-flex d-none");
                $("#deposit-final-section").toggleClass("d-flex d-none");

                loader();
            }

            function submitDeposit() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You wont to deposit!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#742DCE',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'YES, DEPOSIT!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $("#deposit-form").submit();
                    }
                })
            }
        </script>

        <script>
            $(document).ready(function() {
                fetch_data(1);
            });

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/user/profile/deposit-history/fetch-data?page=" + page,
                    success(response) {
                        $('#table_data').html(response);
                    }
                });
            }
        </script>
    @endpush
