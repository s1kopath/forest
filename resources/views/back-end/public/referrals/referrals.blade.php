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
                <a href="{{ route('public_referrals') }}?rank=null" class="btn btn-success rounded-pill mx-1">Direct</a>
                <a href="{{ route('public_referrals') }}?rank=1" class="btn btn-success rounded-pill mx-1">IB</a>
                <a href="{{ route('public_referrals') }}?rank=2" class="btn btn-success rounded-pill mx-1">Pro-IB</a>
                <a href="{{ route('public_referrals') }}?rank=3" class="btn btn-success rounded-pill mx-1">Master-IB</a>
                <a href="{{ route('public_referrals') }}?rank=4" class="btn btn-success rounded-pill mx-1">Corporate-IB</a>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-responsive">
                    <thead>
                        <tr>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">Register</h4>
                                <h6>$10000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">IB</h4>
                                <h6>$1000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">Master IB</h4>
                                <h6>$1000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">Pro IB</h4>
                                <h6>$1000</h6>
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
