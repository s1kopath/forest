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
                        <div class="mb-2">
                            <h3 class="text-primary font-weight-bold">
                                Personal Details:
                                <a href="#" class="h3">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <div class="form-group row m-0">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    : {{ $user->name }}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    : {{ $user->username }}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    : {{ $user->email }}
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    : +39 ......
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="dateOfBirth" class="col-sm-2 col-form-label">Date of birth</label>
                                <div class="col-sm-10">
                                    : 1st March 1989
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="identityNumber" class="col-sm-2 col-form-label">Identity Number</label>
                                <div class="col-sm-10">
                                    : fN/A
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <h3 class="text-primary font-weight-bold">
                                Location:
                                <a href="#" class="h3">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h3>
                            <div class="form-group row m-0">
                                <label for="houseArea" class="col-sm-2 col-form-label">House/Area</label>
                                <div class="col-sm-10">
                                    : ia Campi flagrai 35
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="street" class="col-sm-2 col-form-label">Street</label>
                                <div class="col-sm-10">
                                    : Serra
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    : Serra
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="zipCode" class="col-sm-2 col-form-label">Zip Code</label>
                                <div class="col-sm-10">
                                    : 83030
                                </div>
                            </div>
                            <div class="form-group row m-0">
                                <label for="country" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    : Italy
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
                            <button class="btn btn-primary rounded-pill">
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
        });
    </script>
@endpush
