@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .button-container button {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
        }

        .cus-btn {
            background-color: #05093a !important;
            border-color: #05093a !important;
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
                padding: 5px 3px !important;
            }
        }

        .t-circle {
            background: #626ef2;
            width: 35px;
            height: 5px;
            border-radius: 100%;
            display: flex;
            align-items: center;
            color: white;
            margin: 50% 20%;
            font-weight: bold;
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
                    {{ env('APP_URL') . '/ref/' . auth()->user()->username }}
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
                    <h4 class="font-weight-bold">{{ count(auth()->user()->total_team) }}</h4>
                    <h3 class="font-weight-bold">Registration</h3>
                </div>
                <div class="col-md-4 text-center">
                    <h4 class="font-weight-bold">{{ $staked_user }}</h4>
                    <h3 class="font-weight-bold">Staking</h3>
                </div>
            </div>

            <div class="card-block shihab-btn-mbl-scroll mt-4">
                <a href="{{ route('public_referrals') }}?rank=null">
                    <button type="button"
                        class="btn btn-success {{ isset($_GET['rank']) && $_GET['rank'] == 'null' ? 'cus-btn' : '' }} rounded-pill mx-1">
                        Direct
                    </button>
                </a>
                <a href="{{ route('public_referrals') }}?rank=1">
                    <button type="button"
                        class="btn btn-success {{ isset($_GET['rank']) && $_GET['rank'] == '1' ? 'cus-btn' : '' }} rounded-pill mx-1">
                        IB
                    </button>
                </a>
                <a href="{{ route('public_referrals') }}?rank=2">
                    <button type="button"
                        class="btn btn-success {{ isset($_GET['rank']) && $_GET['rank'] == '2' ? 'cus-btn' : '' }} rounded-pill mx-1">
                        Pro-IB
                    </button>
                </a>
                <a href="{{ route('public_referrals') }}?rank=3">
                    <button type="button"
                        class="btn btn-success {{ isset($_GET['rank']) && $_GET['rank'] == '3' ? 'cus-btn' : '' }} rounded-pill mx-1">
                        Master-IB
                    </button>
                </a>

                <a href="{{ route('public_referrals') }}?rank=4">
                    <button
                        class="btn btn-success {{ isset($_GET['rank']) && $_GET['rank'] == '4' ? 'cus-btn' : '' }} rounded-pill mx-1">
                        Corporate-IB
                    </button>
                </a>
            </div>
            <div class="table-responsive mt-4 d-block d-lg-none">
                <table class="table">
                    <tbody>
                        @foreach ($user_list as $key => $child)
                            <tr>
                                <td class="t-circle">{{ $key + 1 }}</td>
                                <td>
                                    <h4 class="t-data">{{ $child->username }}</h4>
                                    <h6 class="t-data">{{ $child->name }}</h6>
                                </td>
                                <td class="text-right">
                                    <h4 class="t-data">
                                        {{ isset($child->userToRank->rank_id) ? $child->userToRank->rankToRankReward->title : 'Register' }}
                                    </h4>
                                    <h6 class="t-data">${{ $child->total_investment }}</h6>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="table-responsive mt-4 d-none d-lg-block">
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
                        @foreach ($user_list as $key => $child)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $child->username }}</td>
                                <td>{{ $child->name }}</td>
                                <td>
                                    {{ isset($child->userToRank->rank_id) ? $child->userToRank->rankToRankReward->title : 'Register' }}
                                </td>
                                <td>{{ $child->total_investment }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12 mb-3">
                {{ $user_list->links() }}
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
