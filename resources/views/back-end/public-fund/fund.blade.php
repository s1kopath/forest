@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Funds</h5>
        </div>
        <div class="card-block">
            <div class="col-lg-12 col-xl-12">
                <ul class="nav nav-tabs md-tabs" role="tablist" id="tab-list">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#deposit" role="tab">Deposit</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#withdrawal" role="tab">Withdrawal</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#staking" role="tab">Staking</a>
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
                            <span>user ID: jenifar001</span>
                        </h3>
                        <p class="text-center h3">
                            <span>HOW WOULD YOU LIKE TO PAY?</span>
                        </p>
                        <div class="text-center row">
                            <div class="col-6 col-md-4 p-1">
                                <img class="img-fluid rounded" src="{{ asset('front-end/img/deposit/1.png') }}"
                                    alt="forest">
                            </div>
                            <div class="col-6 col-md-4 p-1">
                                <img class="img-fluid rounded" src="{{ asset('front-end/img/deposit/2.png') }}"
                                    alt="forest">
                            </div>
                            <div class="col-6 col-md-4 p-1">
                                <img class="img-fluid rounded" src="{{ asset('front-end/img/deposit/3.png') }}"
                                    alt="forest">
                            </div>
                            <div class="col-6 col-md-4 p-1">
                                <img class="img-fluid rounded" src="{{ asset('front-end/img/deposit/4.png') }}"
                                    alt="forest">
                            </div>
                            <div class="col-6 col-md-4 p-1">
                                <img class="img-fluid rounded" src="{{ asset('front-end/img/deposit/5.png') }}"
                                    alt="forest">
                            </div>
                            <div class="col-6 col-md-4 p-1">
                                <img class="img-fluid rounded" src="{{ asset('front-end/img/deposit/6.png') }}"
                                    alt="forest">
                            </div>
                        </div>

                        <hr>
                        <p class="text-center h3">
                            <span>PAY WITH CRYPTO</span>
                        </p>
                        <div class="container">
                            <div class="row">
                                <label for="miningFree" class="form-label col-md-6">
                                    Currency :
                                </label>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" placeholder="USD ($)" name=""
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="netAmount" class="form-label col-md-6">
                                    Amount :
                                </label>
                                <div class="col-md-6 form-group">
                                    <input type="number" step="0.01" class="form-control" placeholder="$ 1000"
                                        name="" required>
                                </div>
                            </div>
                            <small class="text-danger">* Min 20 USD - Max 50000 USD</small>
                            <div class="text-center m-t-20">
                                <button class="btn btn-primary rounded-pill">
                                    DEPOSIT
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="withdrawal" role="tabpanel">
                        <h3 class="text-primary font-weight-bold text-center">
                            <span>Select Method:</span>
                        </h3>
                        <div class="d-flex justify-content-center form-group">
                            <div class="form-check m-2">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
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
                        <div class="text-center m-t-20">
                            <button class="btn btn-primary rounded-pill">
                                REQUEST WITHDRAWAL
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane" id="staking" role="tabpanel">
                        <h3 class="text-primary font-weight-bold text-center">
                            <span>My Wallet: $ 5000.00</span>
                        </h3>
                        <div class="text-center d-md-flex justify-content-center">
                            <div type="button" class="col-md-3 m-1 rounded-pill bg-secondary">
                                <div class="p-2">
                                    <h5 class="text-white">3 Months</h5>
                                    <span class="text-dark">
                                        2.5%/month
                                    </span>
                                </div>
                            </div>
                            <div type="button" class="col-md-3 m-1 rounded-pill bg-secondary">
                                <div class="p-2">
                                    <h5 class="text-white">6 Months</h5>
                                    <span class="text-dark">
                                        3.0%/month
                                    </span>
                                </div>
                            </div>
                            <div type="button" class="col-md-3 m-1 rounded-pill bg-secondary">
                                <div class="p-2">
                                    <h5 class="text-white">12 Months</h5>
                                    <span class="text-dark">
                                        4.0%/month
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 m-3">
                                <label class="">
                                    Staking Amount
                                </label>
                                <div class="input-group">
                                    <input type="number" step="0.01" min="50"
                                        class="form-control rounded-pill" placeholder="$ 5000">
                                    <span class="input-group-append" style="z-index: 100; margin-left: -2em">
                                        <label class="input-group-text h5 rounded-pill px-4">Max</label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="checkbox1">
                                <label class="border-checkbox-label" for="checkbox1">
                                    I have read and agree to the company staking terms & agreement
                                </label>
                            </div>
                        </div>
                        <div class="text-center m-t-20">
                            <button class="btn btn-primary rounded-pill">
                                Stake Now
                            </button>
                        </div>

                        <hr>
                        <h3 class="text-center">
                            <span>Summary</span>
                        </h3>
                        <div class="container my-3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="duration">♦ Duration</label>
                                </div>
                                <div class="col-sm-6">
                                    <span>: 6 Months</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="monthlyRoi">♦ Monthly ROI</label>
                                </div>
                                <div class="col-sm-6">
                                    <span>: 3.0% (max)</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="stakeDate">♦ Stake Date</label>
                                </div>
                                <div class="col-sm-6">
                                    <span>: 16/02/2023 </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="endDate">♦ End Date</label>
                                </div>
                                <div class="col-sm-6">
                                    <span>: 16/05/2023 </span>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <h3>Auto Staking</h3>
                            <div class="row">
                                <p class="col-md-10">
                                    To automatically retake an expired package to it's pravious stake immediately, enable
                                    auto-staking.
                                </p>
                                <div class="col-md-2">
                                    <input type="checkbox" class="js-default" checked="" data-switchery="true"
                                        style="display: none;">
                                    <span class="switchery switchery-default"
                                        style="background-color: rgb(214, 214, 214); border-color: rgb(214, 214, 214); box-shadow: rgb(214, 214, 214) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;">
                                        <small
                                            style="left: 20px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="text-center m-t-20">
                            <button class="btn btn-primary rounded-pill">
                                Confirm
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

                        <div class="text-center m-t-20">
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
@endpush
