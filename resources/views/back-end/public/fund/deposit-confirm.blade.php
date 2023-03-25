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
                                            23min 23sec
                                        </small>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="col">
                                        <img class="rounded-circle" src="{{ asset('back-end/img/trade/ethereum.png') }}"
                                            alt="flag">
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

                                <div class="col-md-12 text-center">
                                    <a href="{{ route('public_fund') }}" class="btn rounded-pill jss619 shadow text-white">
                                        OKAY
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

            $('#amount-copied').html('✔️ Copied');
        }

        function myFunction2() {
            // Get the text field
            var copyText = $("#wallet-link").text();

            copyText = copyText.trim();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            $('#wallet-copied').html('✔️ Copied');
        }
    </script>
@endpush
