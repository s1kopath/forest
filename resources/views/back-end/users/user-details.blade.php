@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">User Details</h5>
        </div>
        <div class="card-body">

            <form>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Profile Picture :</label>
                    <div class="col-sm-10">
                        <img class="img-fluid" src="{{ asset('back-end/img/customer-service.png') }}" alt="forest"
                            width="150px">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Username :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="{{ $user->username }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Email :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">User Type :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $user->is_verified ? 'Verified' : 'Unverified' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Invite Link :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ env('APP_URL') . '/ref/' . $user->refer_code }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Phone Number :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $user->userToUserDetails->phone_number ?? 'null' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Date of Birth :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $user->userToUserDetails->date_of_birth ?? 'null' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Identity Number :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $user->userToUserDetails->identity_number ?? 'null' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Address :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext"
                            value="{{ $user->userToUserDetails ? $user->userToUserDetails->house_no . ', ' . $user->userToUserDetails->street . ', ' . $user->userToUserDetails->city . ' - ' . $user->userToUserDetails->zip_code . ', ' . $user->userToUserDetails->country : 'null' }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Identity Type :</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="N/A">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticdata" class="col-sm-2 col-form-label font-weight-bold">Identity Copy :</label>
                    <div class="col-sm-10">
                        <img class="img-fluid" src="{{ asset('back-end/img/slider/card1.png') }}" alt="forest"
                            width="100px">
                        <img class="img-fluid" src="{{ asset('back-end/img/slider/card2.png') }}" alt="forest"
                            width="100px">
                    </div>
                </div>


                <div class="text-center mt-4">
                    <a href="{{ route('manage_users') }}" class="btn btn-success btn-round waves-effect waves-light">
                        Go Back
                    </a>
                    @if (!$user->is_verified)
                        <a href="{{ route('verify_user', ['user_id' => $user->id, 1]) }}"
                            class="btn btn-primary btn-round waves-effect waves-light">
                            Verify
                        </a>
                    @endif
                    <a class="btn btn-danger btn-round waves-effect waves-light"
                        href="{{ route('verify_user', ['user_id' => $user->id, 2]) }}">
                        Suspand
                    </a>

                </div>
            </form>

        </div>
    </div>
@endsection

@push('js')
@endpush
