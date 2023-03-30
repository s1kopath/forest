@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Funds')

@section('page-content')
    <div class="card">
        <div class="card-block">
            <div class="col-lg-12 col-xl-12">
                <div class="card-block">
                    <div class="d-flex justify-content-center">
                        <div class="card col-md-6">
                            <div class="card-body">
                                <div class="row my-3 py-3" style="background-color: #feefc6">
                                    <div class="col-8">
                                        <img class="rounded-circle" src="https://i.gifer.com/ZZ5H.gif" width="20px"
                                            alt="flag">
                                        <span class="font-weight-bold">
                                            Awaiting Payment
                                        </span>
                                    </div>
                                    <div class="col-4 text-right">
                                        <small class="font-weight-bold">
                                            <span id="minutes"></span>
                                            <span id="seconds"></span>
                                        </small>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <img class="rounded-circle" src="{{ $coinImg }}" alt="flag">
                                        <span class="font-weight-bold">
                                            {{ $coin }}
                                        </span>
                                        <small class="text-secondary">
                                            {{ $network }}
                                        </small>
                                    </div>
                                    <div class="col text-right">
                                        <span class="text-secondary">
                                            {{ $depositDetails->amount }} {{ $depositDetails->currency }}
                                        </span>
                                    </div>
                                </div>
                                <hr>
                                <p>
                                    Please send only {{ $coin }} coins to this address on the {{ $network }}
                                    network.
                                </p>
                                <div class="text-center my-5">
                                    <img class="img-fluid" src="{{ $barcode }}" alt="flag">
                                </div>
                                <div class="col-md-12">
                                    <small class="text-muted">Amount</small>
                                    <div class="row border rounded p-2" style="background-color: #fcfcfc">
                                        <div class="col" id="amount-link">
                                            {{ $depositDetails->amount }}
                                        </div>
                                        <div class="col text-right" id="amount-copied">
                                            <i class="far fa-copy" type="button" onclick="myFunction()"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <small class="text-muted">{{ $network }} wallet address</small>
                                    <div class="row border rounded p-2" style="background-color: #fcfcfc">
                                        <div class="col" id="wallet-link">
                                            {{ $walletAddress }}
                                        </div>
                                        <div class="col text-right" id="wallet-copied">
                                            <i class="far fa-copy" type="button" onclick="myFunction2()"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-1">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Transaction Hash</legend>
                                        <input class="form-control ms-input" type="text" name="transaction_hash"
                                            placeholder="Enter Transaction Hash..." required>
                                    </fieldset>
                                </div>

                                <div class="col-md-12 text-center">
                                    <a href="{{ route('public_fund') }}" class="btn rounded-pill jss619 shadow text-white">
                                        CONFIRM
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function myFunction() {
            // Get the text field
            var copyText = $("#amount-link").text();

            copyText = copyText.trim();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            $('#amount-copied').html('✔️');
        }

        function myFunction2() {
            // Get the text field
            var copyText = $("#wallet-link").text();

            copyText = copyText.trim();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            $('#wallet-copied').html('✔️');
        }
    </script>

    <script>
        var date = new Date();
        var target = date.setTime(date.getTime() + (30 * 60 * 1000));

        var myfunc = setInterval(function() {
            var now = new Date().getTime();
            var distance = target - now;

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("minutes").innerText = minutes + "min";
            document.getElementById("seconds").innerText = seconds + "sec";

            if (distance < 0) {
                document.getElementById("minutes").innerText = "Time";
                document.getElementById("seconds").innerText = "Up";
                clearInterval(myfunc);
            }
        }, 1000);
    </script>
@endpush
