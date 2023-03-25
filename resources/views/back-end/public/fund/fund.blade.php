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
            background: rgba(255, 255, 255, 0.8) url("https://mir-s3-cdn-cf.behance.net/project_modules/disp/afb8cb36197347.5713616457ee5.gif") center no-repeat;
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
                    <div class="tab-pane active" id="deposit" role="tabpanel">
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
                                                <span class="text-secondary">
                                                    ~199800200 USDT
                                                </span>
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
                                                <span class="text-secondary">
                                                    ~0.0007215 BTC
                                                </span>
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
                                                <span class="text-secondary">
                                                    ~199800200 ETH
                                                </span>
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

                                        <p>By proceeding with this deposit, you are agreeing with our
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
                    </div>
                    <div class="tab-pane" id="withdrawal" role="tabpanel">
                        <h3 class="text-primary font-weight-bold text-center">
                            <span>Select Method:</span>
                        </h3>
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
                                    Paypal
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
                                <div class="col-md-6 form-group">
                                    <label for="accountNickname" class="form-label mb-0 font-weight-bold">
                                        Account Nickname
                                    </label>
                                    <select name="rank" class="form-control form-select">
                                        <option value="">Choose account...</option>
                                        <option value="Demo 1">Demo 1</option>
                                        <option value="Demo 2">Demo 2</option>
                                        <option value="Demo 3">Demo 3</option>
                                        <option value="Demo 4">Demo 4</option>
                                        <option value="Demo 5">Demo 5</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="amountOfMoney" class="form-label mb-0 font-weight-bold">
                                        Amount of Money
                                    </label>
                                    <input type="number" step="0.01" class="form-control" placeholder="0.01"
                                        name="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="miningFree" class="form-label mb-0 font-weight-bold">
                                        Mining Fee
                                    </label>
                                    <input type="number" step="0.01" class="form-control" placeholder="0.01"
                                        name="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="netAmount" class="form-label mb-0 font-weight-bold">
                                        Net Amount
                                    </label>
                                    <input type="number" step="0.01" class="form-control" placeholder="0.01"
                                        name="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputOtp" class="col-sm-6 col-form-label">One Time Password</label>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Enter"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <style>
                                                .rounded-right {
                                                    border-top-right-radius: 100px !important;
                                                    border-bottom-right-radius: 100px !important;
                                                }
                                            </style>
                                            <button class="btn btn-primary rounded-right" type="button"
                                                id="button-addon2">Send OTP</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center m-t-20 m-b-20">
                            <button class="btn btn-primary rounded-pill">
                                REQUEST WITHDRAWAL
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane" id="setMethod" role="tabpanel">
                        <h3 class="font-weight-bold">
                            <span>
                                <i class="fas fa-circle fa-1x text-primary"></i>
                                Visa/master Card
                            </span>
                        </h3>
                        <div class="container">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="cardHolderName">Card Holder's Name</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="cardNumber">Card Number</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <h3 class="font-weight-bold">
                            <span>
                                <i class="fas fa-circle fa-1x text-primary"></i>
                                Paypal
                            </span>
                        </h3>
                        <div class="container">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="email">Email attached to PayPal wallet</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <h3 class="font-weight-bold">
                            <span>
                                <i class="fas fa-circle fa-1x text-primary"></i>
                                Crypto
                            </span>
                        </h3>
                        <div class="container">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="networkName">Network (USDT)</label>
                                </div>
                                <div class="col-sm-6">
                                    <span>Tron (Trc20)</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="address">Wallet Address</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="text-center m-t-20 m-b-20">
                            <button class="btn btn-primary rounded-pill">
                                update
                            </button>
                        </div>
                    </div>
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

        function deposit() {
            if (_currency.val() != '' && _amount.val() != '') {
                _currency_2_1.html(_currency.val());
                _currency_2_2.html(_currency.val());
                _amount_after.html(_amount.val());

                $("#deposit-section").toggleClass("d-flex d-none");
                $("#deposit-next-section").toggleClass("d-flex d-none");

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
@endpush
