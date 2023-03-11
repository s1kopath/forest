@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'My Profile')

@section('page-content')
    <div class="card">
        <div class="card-block">
            <div class="col-lg-12 col-xl-12">
                <ul class="nav nav-tabs md-tabs d-flex" role="tablist" id="tab-list">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#aboutMe" role="tab">About Me</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#verification" role="tab">Verification</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#changePassword" role="tab">Change Password</a>
                        <div class="slide"></div>
                    </li>
                </ul>

                <div class="tab-content card-block">
                    <div class="tab-pane active" id="aboutMe" role="tabpanel">
                        <div class="mb-2">
                            <h3 class="text-primary font-weight-bold">
                                Personal Details:
                                <a href="#" onclick="editdetails()" class="h5">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <form action="{{ route('update_public_profile') }}" method="post" id="details_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Name</legend>
                                            <input class="form-control ms-input" type="text" name="name"
                                                value="{{ $user->name }}" readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Username</legend>
                                            <input class="form-control ms-input" type="text" name="username"
                                                value="{{ $user->username }}" readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Email</legend>
                                            <input class="form-control ms-input" type="email" name="email"
                                                value="{{ $user->email }}" readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Phone Number</legend>
                                            <input class="form-control ms-input" type="text" name="phone_number"
                                                value="{{ isset($user->userToUserDetails->phone_number) ? $user->userToUserDetails->phone_number : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Date of birth</legend>
                                            <input class="form-control ms-input" type="date" name="date_of_birth"
                                                value="{{ isset($user->userToUserDetails->date_of_birth) ? $user->userToUserDetails->date_of_birth : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Identity Number</legend>
                                            <input class="form-control ms-input" type="text" name="identity_number"
                                                value="{{ isset($user->userToUserDetails->identity_number) ? $user->userToUserDetails->identity_number : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="text-center mt-3 d-none" id="details_submit">
                                    <button type="button" class="btn btn-secondary rounded-pill" onclick="closeDetails()">
                                        Cancel
                                    </button>

                                    <button type="submit" class="btn btn-primary rounded-pill">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="mb-2">
                            <h3 class="text-primary font-weight-bold">
                                Location:
                                <a href="#" onclick="editlocation()" class="h5">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <form action="{{ route('edit_location') }}" method="post" id="location_form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">House/Area</legend>
                                            <input class="form-control ms-input" type="text" name="house_no"
                                                value="{{ isset($user->userToUserDetails->house_no) ? $user->userToUserDetails->house_no : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Street</legend>
                                            <input class="form-control ms-input" type="text" name="street"
                                                value="{{ isset($user->userToUserDetails->street) ? $user->userToUserDetails->street : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">City</legend>
                                            <input class="form-control ms-input" type="text" name="city"
                                                value="{{ isset($user->userToUserDetails->city) ? $user->userToUserDetails->city : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Zip Code</legend>
                                            <input class="form-control ms-input" type="text" name="zip_code"
                                                value="{{ isset($user->userToUserDetails->zip_code) ? $user->userToUserDetails->zip_code : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Country</legend>
                                            <input class="form-control ms-input" type="text" name="country"
                                                value="{{ isset($user->userToUserDetails->country) ? $user->userToUserDetails->country : '' }}"
                                                readonly>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="text-center mt-3 d-none" id="location_submit">
                                    <button type="button" class="btn btn-secondary rounded-pill"
                                        onclick="closeLocation()">
                                        Cancel
                                    </button>

                                    <button type="submit" class="btn btn-primary rounded-pill">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" id="verification" role="tabpanel">
                        <h3 class="text-primary font-weight-bold text-center">
                            <span>Identity Verification:</span>
                        </h3>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col-md-4 offset-md-2">
                                    <label for="" class="form-label mb-0 font-weight-bold h3 text-primary">Select
                                        Identity:</label>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Account Nickname</legend>
                                        <select class="form-control ms-input">
                                            <option value="">Choose Identity...</option>
                                            <option value="Passport">Passport</option>
                                            <option value="Driving License">Driving License</option>
                                            <option value="National ID">National ID</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="post">
                            <div class="d-lg-flex justify-content-center">
                                <div class="col-md-4 dropzone m-1">
                                    <input type="file" class="dropify" data-max-file-size="1M" name="image1">
                                </div>
                                <div class="col-md-4 dropzone m-1">
                                    <input type="file" class="dropify" data-max-file-size="1M" name="image2">
                                </div>
                            </div>
                        </form>
                        <div class="text-center m-t-20 m-b-20">
                            <button class="btn btn-primary rounded-pill">
                                UPDATE & NEXT
                            </button>
                        </div>

                        <div>
                            <h3 class="text-primary font-weight-bold text-center">
                                <span>Photo Verification :</span>
                            </h3>

                            <div class="col d-flex justify-content-center">
                                <form action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" class="dropify" />
                                    </div>
                                </form>
                            </div>
                            <div class="text-center m-t-20 m-b-20">
                                <button class="btn btn-primary rounded-pill">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="changePassword" role="tabpanel">
                        <h3 class="text-primary font-weight-bold text-center">
                            <span>Change Password</span>
                        </h3>
                        <form action="{{ route('update_password') }}" class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Old Password</legend>
                                        <input class="form-control ms-input" type="password" name="old_password"
                                            placeholder="Enter Old Password..." required>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">New Password</legend>
                                        <input class="form-control ms-input" type="password" name="new_password"
                                            placeholder="Enter New Password..." required>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Confirm Password</legend>
                                        <input class="form-control ms-input" type="password"
                                            name="new_password_confirmation" placeholder="Enter Confirm Password..."
                                            required>
                                </div>
                            </div>

                            <div class="text-center m-t-20 m-b-20">
                                <button class="btn btn-primary rounded-pill">
                                    Update Password
                                </button>
                            </div>
                        </form>
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
            $('.dropify').dropify();
        });
    </script>

    <script>
        function editdetails() {
            $("#details_form :input").prop('readonly', false);
            $('#details_submit').removeClass('d-none');
        };

        function closeDetails() {
            $("#details_form :input").prop('readonly', true);
            $('#details_submit').addClass('d-none');
        }

        function editlocation() {
            $("#location_form :input").prop('readonly', false);
            $('#location_submit').removeClass('d-none');
        };

        function closeLocation() {
            $("#location_form :input").prop('readonly', true);
            $('#location_submit').addClass('d-none');
        }
    </script>
@endpush
