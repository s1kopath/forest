@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .card-1 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgba(23, 103, 191, 1) 15%, rgba(4, 157, 127, 1) 40%, rgb(232, 205, 246, 1) 90%);
        }

        .card-2 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgba(13, 151, 133, 1) 15%, rgba(61, 93, 202, 1) 40%, rgb(233, 197, 107, 1) 90%);
        }

        .card-3 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgb(3, 164, 132, 1) 15%, rgb(1, 191, 199, 1) 40%, rgb(243, 208, 98, 1) 90%);
        }

        .card-4 {
            background: rgb(58, 89, 180);
            background: linear-gradient(50deg, rgb(199, 225, 114, 1) 15%, rgb(13, 197, 197, 1) 40%, rgb(77, 139, 186, 1) 90%);
        }

        .prod-p-card {
            border-radius: 25px;
        }
    </style>
@endpush

@section('page-content')
    <div class="row">
        <div class="col-md-12 mb-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style=" width:100%; max-height: 200px !important;">
                    <div class="carousel-item active">
                        <img src="{{ asset('back-end/img/slider/1.jpg') }}" class="rounded d-block w-100" alt="forest">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('back-end/img/slider/2.jpg') }}" class="rounded d-block w-100" alt="forest">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('back-end/img/slider/3.jpg') }}" class="rounded d-block w-100" alt="forest">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-1">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt bg-dribbble text-white f-18"></i>
                        </div>
                        <div class="col">
                            <h3 class="m-b-0 f-w-700 text-white">$500.00</h3>
                            <h6 class="m-b-5 text-white">Current Wallet</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-database bg-dribbble text-white f-18"></i>
                        </div>
                        <div class="col">
                            <h3 class="m-b-0 f-w-700 text-white">$5000.00</h3>
                            <h6 class="m-b-5 text-white">Total Staking</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign bg-dribbble text-white f-18"></i>
                        </div>
                        <div class="col">
                            <h3 class="m-b-0 f-w-700 text-white">$700.00</h3>
                            <h6 class="m-b-5 text-white">Invitation Gift</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card card-4">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-tags bg-dribbble text-white f-18"></i>
                        </div>
                        <div class="col">
                            <h3 class="m-b-0 f-w-700 text-white">$2000.00</h3>
                            <h6 class="m-b-5 text-white">Total Income</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <input type="text" class="form-control bg-white" value="Referral Link" readonly>
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control bg-white" id="referral-link"
                        value="{{ env('APP_URL') . '/ref/' . auth()->user()->refer_code }}" readonly>
                </div>
                <div class="col-md-2">
                    <input type="button" class="form-control" value="Copy Link" onclick="myFunction()">
                </div>
            </div>
        </div> --}}


        <div class="col-md-12">
            <div class="d-card bg-white rounded mt-3">
                <fieldset class="text-center m-3" style="border: 2px solid #060606;">
                    <legend style="width: 50%;">Invite Link</legend>
                    <p>
                        You need to verify your account.
                    </p>
                    <a href="#" class="btn btn-primary rounded-pill mb-3">
                        Verify
                    </a>
                </fieldset>
                <div class="pt-1">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("referral-link");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endpush
