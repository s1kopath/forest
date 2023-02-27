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
                                <a href="#" id="editdetails" class="h3">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <div class="form-group row m-0">
                                <label for="name" class="col-sm-2 col-form-label">Name :</label>
                                <div class="col-sm-10">
                                    {{$user->name}}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="username" class="col-sm-2 col-form-label">Username :</label>
                                <div class="col-sm-10">
                                    {{$user->username}}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="email" class="col-sm-2 col-form-label">Email :</label>
                                <div class="col-sm-10">
                                    {{$user->email}}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number :</label>
                                <div class="col-sm-10">
                                @if (isset($userDetail->phone_number))
                                    {{$userDetail->phone_number}}
                                @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="dateOfBirth" class="col-sm-2 col-form-label">Date of birth :</label>
                                <div class="col-sm-10">
                                @if (isset($userDetail->date_of_birth))
                                    {{$userDetail->date_of_birth}}
                                @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="identityNumber" class="col-sm-2 col-form-label">Identity Number :</label>
                                <div class="col-sm-10">
                                @if (isset($userDetail->identity_number))
                                    {{$userDetail->identity_number}}
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="mb-2" id="location">
                            <h3 class="text-primary font-weight-bold">
                                Location:
                                <a href="#" id="editlocation" class="h3">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <div class="form-group row m-0">
                                <label for="houseArea" class="col-sm-2 col-form-label">House/Area :</label>
                                <div class="col-sm-10">
                                @if (isset($userDetail->house_no))
                                    {{$userDetail->house_no}}
                                @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="street" class="col-sm-2 col-form-label">Street :</label>
                                <div class="col-sm-10">
                                @if (isset($userDetail->street))
                                    {{$userDetail->street}}
                                @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="city" class="col-sm-2 col-form-label">City :</label>
                                <div class="col-sm-10">
                                @if (isset($userDetail->city))
                                    {{$userDetail->city}}
                                @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="zipCode" class="col-sm-2 col-form-label">Zip Code :</label>
                                <div class="col-sm-10">
                                @if (isset($userDetail->zip_code))
                                    {{$userDetail->zip_code}}
                                @endif
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="country" class="col-sm-2 col-form-label">Country :</label>
                                <div class="col-sm-10">
                                @if (@isset($userDetail->country))
                                    {{$userDetail->country}}
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
                        <form action="#" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                        <div class="text-center m-t-20">
                            <button class="btn btn-primary rounded-pill" id="photoverify" disabled>
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
                            <button class="btn btn-primary rounded-pill" disabled>
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
        });
    </script>
    <script>
        var _editdetails =`
        <div>
            <h3 class="font-weight-bold mb-3">
                Personal Details
            </h3>
            <div class="container">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="username">UserName</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="phonenumber">Phone Number</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="dateofbirth">Date of Birth</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="identitynumber">Identity Number</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="">
                    </div>
                </div>
            </div>

            <div class="text-center m-t-20">
                <button class="btn btn-primary rounded-pill mb-3" disabled>
                    update
                </button>
            </div>
        </div>`;

        var _editlocation =`
        <div>
            <h3 class="font-weight-bold mb-3">
                Location
            </h3>
            <div class="container">
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="house/area">House/Area</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="street">Street</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="city">City</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="zipcode">Zip Code</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="country">Country</label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>

            <div class="text-center m-t-20">
                <button class="btn btn-primary rounded-pill" disabled>
                    update
                </button>
            </div>
        </div>`;

        $("#editdetails").click(function()
        {
            $("#details").html(_editdetails);
        });

        $("#editlocation").click(function()
        {
            $("#location").html(_editlocation);
        });

        var _photoverify=`
        <div id="photoverify">
            <h3 class="text-primary font-weight-bold text-center">
                <span>Photo Verification:</span>
            </h3>
            <div class="col-sm-4">
                <form action="#" class="dropzone">
                    <div class="fallback text-center">
                        <input name="file" type="file"/>
                    </div>
                </form>
            </div>
            <div class="text-center m-t-20">
                <button class="btn btn-primary rounded-pill" disabled>
                    UPDATE
                </button>
            </div>
        </div>`;
        $("#photoverify").click(function()
        {
            $("#verification").html(_photoverify);
        });
    </script>
@endpush
