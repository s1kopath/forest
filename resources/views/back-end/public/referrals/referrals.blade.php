@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
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
@endpush
