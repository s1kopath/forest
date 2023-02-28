@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">My Profile</h5>
        </div>
        <div class="card-block">
            <div class="col-lg-12 col-xl-12">
                <ul class="nav nav-tabs md-tabs" role="tablist" id="tab-list">
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
                        <div class="mb-2" id="details">
                            <h3 class="text-primary font-weight-bold">
                                Personal Details:
                                <a href="#" onclick="editdetails()" class="h3">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <div class="form-group row m-0">
                                <label for="name" class="col-sm-2 col-form-label">Name :</label>
                                <div class="col-sm-10 mt-1">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="username" class="col-sm-2 col-form-label">Username :</label>
                                <div class="col-sm-10 mt-1">
                                    {{ $user->username }}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="email" class="col-sm-2 col-form-label">Email :</label>
                                <div class="col-sm-10 mt-1">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (isset($user->userToUserDetails->phone_number))
                                        {{ $user->userToUserDetails->phone_number }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="dateOfBirth" class="col-sm-2 col-form-label">Date of birth :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (isset($user->userToUserDetails->date_of_birth))
                                        {{ $user->userToUserDetails->date_of_birth }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="identityNumber" class="col-sm-2 col-form-label">Identity Number :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (isset($user->userToUserDetails->identity_number))
                                        {{ $user->userToUserDetails->identity_number }}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mb-2" id="location">
                            <h3 class="text-primary font-weight-bold">
                                Location:
                                <a href="#" onclick="editlocation()" class="h3">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <div class="form-group row m-0">
                                <label for="houseArea" class="col-sm-2 col-form-label">House/Area :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (isset($user->userToUserDetails->house_no))
                                        {{ $user->userToUserDetails->house_no }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="street" class="col-sm-2 col-form-label">Street :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (isset($user->userToUserDetails->street))
                                        {{ $user->userToUserDetails->street }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="city" class="col-sm-2 col-form-label">City :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (isset($user->userToUserDetails->city))
                                        {{ $user->userToUserDetails->city }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="zipCode" class="col-sm-2 col-form-label">Zip Code :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (isset($user->userToUserDetails->zip_code))
                                        {{ $user->userToUserDetails->zip_code }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="country" class="col-sm-2 col-form-label">Country :</label>
                                <div class="col-sm-10 mt-1">
                                    @if (@isset($user->userToUserDetails->country))
                                        {{ $user->userToUserDetails->country }}
                                    @endif
                                </div>
                            </div>
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
                                <div class="col-md-6">
                                    <select name="identity-type" class="form-control form-select" required>
                                        <option value="">Choose Identity...</option>
                                        <option value="Passport">Passport</option>
                                        <option value="Driving License">Driving License</option>
                                        <option value="National ID">National ID</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="post">
                            <div class="form-group">
                                <div class="col d-flex justify-content-center">
                                    <div class="col-sm-4 dropzone">
                                        <input type="file" class="dropify"
                                            data-max-file-size="1M" name="image1">
                                    </div>
                                    <div class="col-sm-4 dropzone ml-3">
                                        <input type="file" class="dropify"
                                            data-max-file-size="1M" name="image2">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center m-t-20">
                            <button class="btn btn-primary rounded-pill" id="photoverify">
                                UPDATE & NEXT
                            </button>
                        </div>
                    </div>
                    <div class="tab-pane" id="changePassword" role="tabpanel">

                        <h3 class="text-primary font-weight-bold text-center">
                            <span>Change Password</span>
                        </h3>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col-md-2 offset-md-2">
                                    <label for="oldPassword" class="form-label mb-0 font-weight-bold">
                                        Old Password:
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Enter Old Password..."
                                        name="old_password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col-md-2 offset-md-2">
                                    <label for="newPassword" class="form-label mb-0 font-weight-bold">
                                        New Password:
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Enter New Password..."
                                        name="new_password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <div class="col-md-2 offset-md-2">
                                    <label for="confirmPassword" class="form-label mb-0 font-weight-bold">
                                        Confirm Password:
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Enter Confirm Password..."
                                        name="confirm_password" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center m-t-20">
                            <button class="btn btn-primary rounded-pill">
                                Update Password
                            </button>
                        </div>
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
        var _editdetails = `
        <div id="editdetail">
            <h3 class="text-primary font-weight-bold">
                Personal Details:
            </h3>
            <form action="{{ route('update_public_profile') }}" method="post">
                @csrf
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="name" class="col-form-label">Name :</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $user->name }}" name="name" required>
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="username" class="col-form-label">Username :</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{ $user->username }}" name="username" readonly>
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="email" class="col-form-label">Email :</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" value="{{ $user->email }}" name="email" required>
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="phoneNumber" class="col-form-label">Phone Number :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->phone_number))
                                <input type="number" class="form-control" value="{{ $user->userToUserDetails->phone_number }}" name="phone_number">
                            @else
                                <input type="number" class="form-control" value="" name="phone_number">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="dateOfBirth" class="col-form-label">Date of birth :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->date_of_birth))
                                <input type="date" class="form-control" value="{{ $user->userToUserDetails->date_of_birth }}" name="date_of_birth">
                            @else
                                <input type="date" class="form-control" value="" name="date_of_birth">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="identitynumber" class="col-form-label">Identity Number :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->identity_number))
                                <input type="number" class="form-control" value="{{ $user->userToUserDetails->identity_number }}" name="identity_number">
                            @else
                                <input type="number" class="form-control" value="" name="identity_number">
                            @endif
                        </div>
                    </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-secondary rounded-pill" onclick="closeDetails()">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-primary rounded-pill">
                        Update
                    </button>

                </div>
            </form>
        </div>`;

        var _editlocation = `
        <div id="editlocation">
            <h3 class="text-primary font-weight-bold">
                Location:
            </h3>
            <form action="{{ route('edit_location') }}" method="post">
                @csrf
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="house/area">House/Area :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->house_no))
                                <input type="text" class="form-control" value="{{ $user->userToUserDetails->house_no }}" name="house_no">
                            @else
                                <input type="text" class="form-control" value="" name="house_no">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="street">Street :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->street))
                                <input type="text" class="form-control" value="{{ $user->userToUserDetails->street }}" name="street">
                            @else
                                <input type="text" class="form-control" value="" name="street">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="city">City :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->city))
                                <input type="text" class="form-control" value="{{ $user->userToUserDetails->city }}" name="city">
                            @else
                                <input type="text" class="form-control" value="" name="city">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="zipcode">Zip Code :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->zip_code))
                                <input type="number" class="form-control" value="{{ $user->userToUserDetails->zip_code }}" name="zip_code">
                            @else
                                <input type="number" class="form-control" value="" name="zip_code">
                            @endif
                        </div>
                    </div>
                    <div class="form-group row m-0">
                        <div class="col-sm-2">
                            <label for="country">Country :</label>
                        </div>
                        <div class="col-sm-10">
                            @if (@isset($user->userToUserDetails->country))
                                <input type="text" class="form-control" value="{{ $user->userToUserDetails->country }}" name="country">
                            @else
                                <input type="text" class="form-control" value="" name="country">
                            @endif
                        </div>
                    </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-secondary rounded-pill" onclick="closeLocation()">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-primary rounded-pill">
                        Update
                    </button>

                </div>
            </form>
        </div>`;

        function editdetails() {
            $("#details").html(_editdetails);
        };
        function editlocation(){
            $("#location").html(_editlocation);
        };

        var _returndetails = `
        <div class="mb-2">
            <h3 class="text-primary font-weight-bold">
                Personal Details:
                <a href="#" onclick="editdetails()" class="h3">
                    <i class="far fa-edit text-dark"></i>
                </a>
            </h3>
            <div class="form-group row m-0">
                <label for="name" class="col-sm-2 col-form-label">Name :</label>
                <div class="col-sm-10 mt-1">
                    {{ $user->name }}
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="username" class="col-sm-2 col-form-label">Username :</label>
                <div class="col-sm-10 mt-1">
                    {{ $user->username }}
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="email" class="col-sm-2 col-form-label">Email :</label>
                <div class="col-sm-10 mt-1">
                    {{ $user->email }}
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number :</label>
                <div class="col-sm-10 mt-1">
                    @if (isset($user->userToUserDetails->phone_number))
                        {{ $user->userToUserDetails->phone_number }}
                    @endif
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="dateOfBirth" class="col-sm-2 col-form-label">Date of birth :</label>
                <div class="col-sm-10 mt-1">
                    @if (isset($user->userToUserDetails->date_of_birth))
                        {{ $user->userToUserDetails->date_of_birth }}
                    @endif
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="identityNumber" class="col-sm-2 col-form-label">Identity Number :</label>
                <div class="col-sm-10 mt-1">
                    @if (isset($user->userToUserDetails->identity_number))
                        {{ $user->userToUserDetails->identity_number }}
                    @endif
                </div>
            </div>
        </div>`;

        var _returnlocation=`
        <div class="mb-2">
            <h3 class="text-primary font-weight-bold">
                Location:
                <a href="#" onclick="editlocation()" class="h3">
                    <i class="far fa-edit text-dark"></i>
                </a>
            </h3>
            <div class="form-group row m-0">
                <label for="houseArea" class="col-sm-2 col-form-label">House/Area :</label>
                <div class="col-sm-10">
                    @if (isset($user->userToUserDetails->house_no))
                        {{ $user->userToUserDetails->house_no }}
                    @endif
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="street" class="col-sm-2 col-form-label">Street :</label>
                <div class="col-sm-10">
                    @if (isset($user->userToUserDetails->street))
                        {{ $user->userToUserDetails->street }}
                    @endif
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="city" class="col-sm-2 col-form-label">City :</label>
                <div class="col-sm-10">
                    @if (isset($user->userToUserDetails->city))
                        {{ $user->userToUserDetails->city }}
                    @endif
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="zipCode" class="col-sm-2 col-form-label">Zip Code :</label>
                <div class="col-sm-10">
                    @if (isset($user->userToUserDetails->zip_code))
                        {{ $user->userToUserDetails->zip_code }}
                    @endif
                </div>
            </div>
            <div class="form-group row m-0">
                <label for="country" class="col-sm-2 col-form-label">Country :</label>
                <div class="col-sm-10">
                    @if (@isset($user->userToUserDetails->country))
                        {{ $user->userToUserDetails->country }}
                    @endif
                </div>
            </div>
        </div>`;

        function closeDetails() {
            $("#editdetail").html(_returndetails);
        }
        function closeLocation(){
            $("#editlocation").html(_returnlocation);
        }


        var _photoverify = `
        <div id="photoverify">
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
            <div class="text-center m-t-20">
                <button class="btn btn-primary rounded-pill">
                    UPDATE
                </button>
            </div>
        </div>`;
        $("#photoverify").click(function() {
            $("#verification").html(_photoverify);
        });
    </script>
@endpush
