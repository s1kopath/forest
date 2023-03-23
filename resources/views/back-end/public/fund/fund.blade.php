@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Funds')

@section('page-content')
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
                        <h3 class="text-primary font-weight-bold d-flex justify-content-between">
                            <span>Personal Details:</span>
                            <span>User ID: {{ $user->username }}</span>
                        </h3>

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

                        <form action="{{ route('new_deposit') }}" method="post">
                            @csrf
                            <div class="d-flex justify-content-center">
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Currency</legend>
                                            <select class="form-control form-control-sm ms-input" required name="currency">
                                                <option value="">Choose Currency</option>
                                                <option value="USD" selected>USD</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Amount</legend>
                                            <input class="form-control ms-input" type="number" name="amount"
                                                placeholder="Amount" required>
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
                            <hr>
                            <div class="d-flex justify-content-center">
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
                                            <style>
                                                .coin-type[type="radio"]:checked+label {
                                                    background-color: #ececec;
                                                    border-radius: 5px;
                                                }
                                            </style>
                                            <div class="col">
                                                <input class="d-none coin-type" type="radio" name="coin-type"
                                                    id="usdt" value="option1" required>
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
                                                <input class="d-none coin-type" type="radio" name="coin-type"
                                                    id="btc" value="option2" required>
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
                                                <input class="d-none coin-type" type="radio" name="coin-type"
                                                    id="eth" value="option3" required>
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
                                            <button class="btn btn-outline-dark shadow" type="button">
                                                CANCEL
                                            </button>
                                            <button class="btn btn-cus-jss619 shadow" type="button"
                                                onclick="depositNext()">
                                                NEXT
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <p class="font-weight-bold">Choose network for USDT</p>
                                        <div class="form-check my-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="eth" value="option1">
                                            <label class="form-check-label" style="cursor: pointer;" for="eth">
                                                ETH <small class="text-muted">Ethereum network (ERC20)</small>
                                            </label>
                                        </div>
                                        <div class="form-check my-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="trx" value="option2">
                                            <label class="form-check-label" style="cursor: pointer;" for="trx">
                                                TRX <small class="text-muted">TRON network (TRC)</small>
                                            </label>
                                        </div>
                                        <div class="form-check my-2">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="rsc" value="option3">
                                            <label class="form-check-label" style="cursor: pointer;" for="rsc">
                                                BSC <small class="text-muted">BNB Smart Chain network (BEP)</small>
                                            </label>
                                        </div>
                                        <p class="text-info">Not sure what to use?</p>
                                        <div class="p-2"></div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-outline-dark shadow" type="button">
                                                CANCEL
                                            </button>
                                            <button class="btn btn-cus-jss619 shadow" type="button" data-toggle="modal"
                                                data-target="#stripeModal">
                                                NEXT
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <p class="font-weight-bold">Would you like to proceed?</p>
                                        <p>
                                            Coin selected: <img class="rounded-circle"
                                                src="{{ asset('back-end/img/trade/tether.png') }}" alt="flag">
                                            <span class="font-weight-bold">USDT</span>
                                            <small class="text-secondary">Tether</small>
                                        </p>
                                        <p>
                                            Blockchain:
                                            <span class="font-weight-bold">TRX</span>
                                            <small class="text-secondary">TRON Network (TRC20)</small>
                                        </p>
                                        <div class="p-4"></div>
                                        <p>By proceeding with this deposit, you are agreeing with our
                                            <a href="#" class="text-primary">
                                                <u>Terms and Conditions</u>
                                            </a>
                                        </p>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-outline-dark shadow" type="button">
                                                BACK
                                            </button>
                                            <button class="btn btn-cus-jss619 shadow" type="button" data-toggle="modal"
                                                data-target="#stripeModal">
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
                                    <select name="rank" class="form-control form-select" required>
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
                                        name="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="miningFree" class="form-label mb-0 font-weight-bold">
                                        Mining Fee
                                    </label>
                                    <input type="number" step="0.01" class="form-control" placeholder="0.01"
                                        name="" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="netAmount" class="form-label mb-0 font-weight-bold">
                                        Net Amount
                                    </label>
                                    <input type="number" step="0.01" class="form-control" placeholder="0.01"
                                        name="" required>
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
        var _coin_type = $('[name="coin-type"]');

        function deposit() {
            if (_currency.val() != '' && _amount.val() != '') {
                _currency_2_1.html(_currency.val());
                _currency_2_2.html(_currency.val());
                _amount_after.html(_amount.val());
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Select currency and enter amount!',
                });
            }
        }

        function depositNext() {
            console.log(_coin_type.find(":checked"));
        }
    </script>
@endpush
