@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .custom-btn {
            min-width: 120px;
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
        }

        .active-btn {
            background-color: #05093a !important;
            border-color: #05093a !important;
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
            <div class="card-block d-flex overflow-auto mt-2 pb-2">
                <a href="{{ route('public_referrals') }}?rank=null"
                    class="btn btn-success custom-btn {{ isset($_GET['rank']) && $_GET['rank'] == 'null' ? 'active-btn' : '' }} rounded-pill mx-1">
                    Direct
                </a>
                <a href="{{ route('public_referrals') }}?rank=1"
                    class="btn btn-success custom-btn {{ isset($_GET['rank']) && $_GET['rank'] == '1' ? 'active-btn' : '' }} rounded-pill mx-1">
                    IB
                </a>
                <a href="{{ route('public_referrals') }}?rank=2"
                    class="btn btn-success custom-btn {{ isset($_GET['rank']) && $_GET['rank'] == '2' ? 'active-btn' : '' }} rounded-pill mx-1">
                    Pro-IB
                </a>
                <a href="{{ route('public_referrals') }}?rank=3"
                    class="btn btn-success custom-btn {{ isset($_GET['rank']) && $_GET['rank'] == '3' ? 'active-btn' : '' }} rounded-pill mx-1">
                    Master-IB
                </a>
                <a href="{{ route('public_referrals') }}?rank=4"
                    class="btn btn-success custom-btn {{ isset($_GET['rank']) && $_GET['rank'] == '4' ? 'active-btn' : '' }} rounded-pill mx-1">
                    Corporate-IB
                </a>
            </div>
            <div class="table-responsive mt-4 d-block d-lg-none">
                <table class="table">
                    <tbody>
                        @foreach ($user_list as $key => $child)
                            <tr>
                                <td>
                                    <span class="font-weight-bold rounded-circle text-white py-1 px-2"
                                        style="background-color: #0548ac;">
                                        {{ $key + 1 }}
                                    </span>
                                </td>
                                <td>
                                    <h4 class="font-weight-bold">{{ $child->username }}</h4>
                                    <h6 class="font-weight-bold">{{ $child->name }}</h6>
                                </td>
                                <td class="text-right">
                                    <h4 class="font-weight-bold">
                                        {{ isset($child->userToRank->rank_id) ? $child->userToRank->rankToRankReward->title : 'Register' }}
                                    </h4>
                                    <h6 class="font-weight-bold">${{ $child->total_investment }}</h6>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4 d-none d-lg-block">
                <table class="table">
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
