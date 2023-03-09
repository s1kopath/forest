@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .btn:hover {
            background: linear-gradient(#152B40, #152B40);
        }

        .btn:focus {
            background: linear-gradient(#152B40, #152B40);
        }

        .button-container button {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
        }

        @media only screen and (max-width: 768px) {
            .shihab-btn-mbl-scroll {
                overflow-x: scroll;
                width: 100%;
                display: flex;
                position: relative;
            }

            .shihab-btn-mbl-scroll button {
                display: inline-block;
                position: relative;
                padding: 6px 15px !important;
                white-space: pre;
            }
        }

        .circle {
            background: #626ef2;
            width: 30px;
            height: 5px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            text-align: center;
            color: aliceblue;
            margin: 40%;
        }

        .t-data {
            font-weight: bold;
            padding-left: 5%;
        }
    </style>
@endpush

@section('page-title', 'Referrals')

@section('page-content')
    <div class="card">
        <div class="card-body">
            <h4 class="font-weight-bold">Hello, {{ auth()->user()->username }}</h4>
            <h5>Thank you for joining our Referral program</h5>
        </div>
        <div class="card-body">
            <h3 class="font-weight-bold">Invite Link</h3>
            @if (auth()->user()->is_verified)
                <h5 id="referral-link">
                    {{ env('APP_URL') . '/ref/' . $user->username }}
                </h5>
                <button type="button" class="btn btn-primary rounded-pill mb-3 mt-2" onclick="myFunction()" id="copied">
                    <i class="far fa-copy"></i>
                    Copy
                </button>
            @else
                <h5>
                    You need to verify your account.
                </h5>
                <a href="{{ route('public_profile') }}" class="btn btn-primary rounded-pill mb-3 mt-2">
                    Verify
                </a>
            @endif
        </div>
        <div class="card-block">
            <div class="d-flex justify-content-center">
                <div class="col-md-4 text-center">
                    <h4 class="font-weight-bold">{{ count($user->total_team) }}</h4>
                    <h3 class="font-weight-bold">Registration</h3>
                </div>
                <div class="col-md-4 text-center">
                    <h4 class="font-weight-bold">{{ $staked_user }}</h4>
                    <h3 class="font-weight-bold">Staking</h3>
                </div>
            </div>

            <div class="card-block shihab-btn-mbl-scroll mt-4">
                <button type="button" class="btn btn-success rounded-pill mx-1">Direct</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">IB</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">Pro-IB</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">Master-IB</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">Corporate-IB</button>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-responsive">
                    <thead>
                        <tr>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="circle">1</td>
                            <td>
                                <h4 class="t-data">Danial001</h4>
                                <h6 class="t-data">Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 class="t-data">Register</h4>
                                <h6 class="t-data">$10000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="circle">2</td>
                            <td>
                                <h4 class="t-data">Danial001</h4>
                                <h6 class="t-data">Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 class="t-data">IB</h4>
                                <h6 class="t-data">$1000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="circle">3</td>
                            <td>
                                <h4 class="t-data">Danial001</h4>
                                <h6 class="t-data">Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 class="t-data">Master IB</h4>
                                <h6 class="t-data">$1000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="circle">4</td>
                            <td>
                                <h4 class="t-data">Danial001</h4>
                                <h6 class="t-data">Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 class="t-data">Pro IB</h4>
                                <h6 class="t-data">$1000</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-framed">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Staking</th>
                        </tr>
                    </thead>
                    <tbody>
                        <x-refered-users-table :children="$user->children" :level="1" :sl="1" />
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function myFunction() {
            // Get the text field
            var copyText = $("#referral-link").text();

            copyText = copyText.trim();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            $('#copied').html('✔️ Copied');
        }
    </script>
    <script>
        function focusMe(button) {
            document.getElementsByClassName("button-selected")[0].className = "";
            button.className = "button-selected";
        }
    </script>
@endpush
