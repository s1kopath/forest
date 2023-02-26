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
                            <span>User ID: {{ $user->username }}</span>
                        </h3>
                        <p class="text-center h3">
                            <span>HOW WOULD YOU LIKE TO PAY?</span>
                        </p>
                        <div class="container">
                            <div class="text-center row" type="button" data-toggle="modal" data-target="#stripeModal">
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
                        </div>

                        <!-- payment Modal -->
                        <div class="modal fade" id="stripeModal" tabindex="-1" role="dialog"
                            aria-labelledby="stripeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="stripeModalLabel">Deposit Amount</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="my-2">
                                            <img class="img-fluid rounded"
                                                src="{{ asset('back-end/img/stripe-payment-card-logo.png') }}"
                                                alt="forest">
                                        </div>

                                        <div id="stripe_amount_div">
                                            <div class="container my-3">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="amount">Amount: </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="number" class="form-control"
                                                            placeholder="Enter Deposit Amount" id="deposit_stripe_amount">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center m-t-20">
                                                <button type="button" class="btn btn-primary rounded-pill"
                                                    onclick="proceedToStripe()">
                                                    Proceed
                                                </button>
                                            </div>
                                        </div>

                                        <div class="d-none" id="stripe_payment_div">
                                            <form role="form" action="{{ route('stripe.post') }}" method="post"
                                                class="require-validation" data-cc-on-file="false"
                                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                                @csrf
                                                <div class="container">
                                                    {{-- <h3>Payment Details</h3> --}}
                                                    <div class="row text-left">
                                                        <div class='col-md-6 form-group required'>
                                                            <label class='control-label'>Card Name</label>
                                                            <input class='form-control' size='4' type='text'
                                                                value="{{ auth()->user()->name }}">
                                                        </div>

                                                        <div class='col-md-6 form-group required'>
                                                            <label class='control-label'>Card Number</label>
                                                            <input autocomplete='off' class='form-control card-number'
                                                                size='20' type='text' value="4242424242424242">
                                                        </div>
                                                    </div>

                                                    <div class="row text-left">
                                                        <div class='col-md-4 form-group cvc required'>
                                                            <label class='control-label'>CVC</label>
                                                            <input autocomplete='off' class='form-control card-cvc'
                                                                placeholder='ex. 311' size='4' type='text'
                                                                value="311">
                                                        </div>
                                                        <div class='col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Month</label>
                                                            <input class='form-control card-expiry-month' placeholder='MM'
                                                                size='2' type='text' value="12">
                                                        </div>
                                                        <div class='col-md-4 form-group expiration required'>
                                                            <label class='control-label'>Expiration Year</label>
                                                            <input class='form-control card-expiry-year'
                                                                placeholder='YYYY' size='4' type='text'
                                                                value="2028">
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="amount" id="_stripe_amount"
                                                        value="0">

                                                    <div class='form-row row'>
                                                        <div class='col-md-12 error form-group d-none'>
                                                            <div class='alert-danger alert'>
                                                                Please correct the errors and try again.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center m-t-20">
                                                    <button type="submit" class="btn btn-primary rounded-pill">
                                                        Confirm Payment
                                                    </button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <p class="text-center h3 d-none">
                            <span>PAY WITH CRYPTO</span>
                        </p>
                        <div class="container d-none">
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
                            <span>My Wallet: $ {{ $wallet->main_amount }} ({{ $wallet->bonus_amount }})</span>
                        </h3>
                        <form action="{{ route('stake') }}" method="post" role="form" id="stakeForm">
                            @csrf
                            <div class="text-center row">
                                @foreach ($staking as $stake)
                                    <div class="col-md-4">
                                        <div type="button" class="rounded-pill bg-secondary m-1">
                                            <input class="form-check-input mt-4" type="radio" name="staking_package"
                                                id="exampleRadios1" value="{{ $stake->id }}" required>
                                            <label class="form-check-label" for="durationRadio">
                                                <div class="p-2">
                                                    <h5 class="text-white">
                                                        <span id="stake_duration_{{ $stake->id }}">
                                                            {{ $stake->duration }}
                                                        </span>
                                                        Months
                                                    </h5>
                                                    <span class="text-dark">
                                                        <span id="stake_percentage_{{ $stake->id }}">
                                                            {{ $stake->percentage }}
                                                        </span>
                                                        %/month
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-8 m-3">
                                    <label class="stakingAmount">
                                        Staking Amount
                                    </label>
                                    <div class="input-group">
                                        <input type="number" step="0.01" min="50" name="amount"
                                            class="form-control rounded-pill" placeholder="$ 5000" required>
                                        <span class="input-group-append" style="z-index: 100; margin-left: -2em">
                                            <label class="input-group-text h5 rounded-pill px-4">Max</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" required>
                                    <label class="border-checkbox-label" for="checkbox1">
                                        I have read and agree to the company staking terms & agreement
                                    </label>
                                </div>
                            </div>
                            <div class="text-center m-t-20">
                                <button type="submit" class="btn btn-primary rounded-pill">
                                    Stake Now
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="stakeModal" tabindex="-1" role="dialog"
                                aria-labelledby="stakeModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="stakeModalLabel">Summary</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <h3 class="text-center">
                                                <span>Summary</span>
                                            </h3> --}}
                                            <div class="container my-3">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="duration">♦ Duration</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span id="duration_value">: 0 Months</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="monthlyRoi">♦ Monthly ROI</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span id="percent_value">: 0.0% (max)</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="stakeDate">♦ Stake Date</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span id="start_date">: N/A </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <label for="endDate">♦ End Date</label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <span id="end_date">: N/A </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <h3>Auto Staking</h3>
                                                <div class="row">
                                                    <p class="col-md-10">
                                                        To automatically retake an expired package to it's pravious stake
                                                        immediately, enable
                                                        auto-staking.
                                                    </p>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" class="js-default" checked=""
                                                            data-switchery="true" style="display: none;">
                                                        <span class="switchery switchery-default"
                                                            style="background-color: rgb(214, 214, 214); border-color: rgb(214, 214, 214); box-shadow: rgb(214, 214, 214) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;">
                                                            <small
                                                                style="left: 20px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center m-t-20">
                                                <button type="button" class="btn btn-primary rounded-pill"
                                                    onclick="confirmSubmitForm()">
                                                    Confirm
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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


        var is_submit = 0;

        $('#stakeForm').submit(function(e) {
            if (is_submit == 0) {
                e.preventDefault();
            }

            var _radioValue = $("input[name='staking_package']:checked").val();
            if (_radioValue) {
                var _duration = $('#stake_duration_' + _radioValue).html().trim();
                var _percentage = $('#stake_percentage_' + _radioValue).html().trim();

                $('#duration_value').html(": " + _duration + " Months");
                $('#percent_value').html(": " + _percentage + "%");

                const monthNames = ["January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                ];

                var _day = new Date();

                $('#start_date').html(": " + _day.getDate() + " " + monthNames[_day.getMonth()] + ", " + _day
                    .getFullYear());

                var _end_day = addMonths(_day, _duration).toString();
                var _end = new Date(_end_day);


                $('#end_date').html(": " + _end.getDate() + " " + monthNames[_end.getMonth()] + ", " + _end
                    .getFullYear());
            }

            $('#stakeModal').modal('show');

        });

        function confirmSubmitForm() {
            is_submit = 1;
            $('#stakeForm').submit();
        }

        function addMonths(date, months) {
            var d = date.getDate();
            date.setMonth(date.getMonth() + +months);
            if (date.getDate() != d) {
                date.setDate(0);
            }
            return date;
        }
    </script>

    <script>
        function proceedToStripe() {
            var _amount = $('#deposit_stripe_amount').val();
            if (_amount != '') {
                $('#_stripe_amount').val(_amount);
                $('#stripe_amount_div').addClass('d-none');
                $('#stripe_payment_div').removeClass('d-none');
            } else {
                alert('Please enter an amount');
            }
        }
    </script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('d-none');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('d-none');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('d-none')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
@endpush
