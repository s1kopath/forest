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
                        <a class="nav-link" data-toggle="tab" href="#changePassword" role="tab">
                            <span class="d-none d-lg-block">Change Password</span>
                            <span class="d-block d-lg-none">Password</span>
                        </a>
                        <div class="slide"></div>
                    </li>
                </ul>

                <div class="tab-content card-block">
                    <div class="tab-pane mt-3 active" id="aboutMe" role="tabpanel">
                        <div class="mb-2">
                            <h4 class="text-primary font-weight-bold">
                                Personal Details:
                                <a href="#" onclick="editdetails()" class="h5">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h4>
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
                            <h4 class="text-primary font-weight-bold">
                                Location:
                                <a href="#" onclick="editlocation()" class="h5">
                                    <i class="far fa-edit text-dark"></i>
                                </a>
                            </h4>
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
                    <div class="tab-pane mt-3" id="verification" role="tabpanel">
                        <div id="identity_verification">
                            <h3 class="text-primary font-weight-bold text-center">
                                <span>Identity Verification:</span>
                            </h3>
                            <div class="row align-items-center">
                                <div class="col-md-4 offset-md-2">
                                    <label for="" class="form-label mb-0 font-weight-bold h4 text-primary">
                                        Select Identity:
                                    </label>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Identity Type</legend>
                                        @if (isset($user->userToUserDetails->kyc_type))
                                            <select class="form-control ms-input" disabled>
                                                <option value="">{{ $user->userToUserDetails->kyc_type }}
                                                </option>
                                            </select>
                                        @else
                                            <select class="form-control form-control-sm ms-input" id="identity-choose">
                                                <option value="">Choose Identity...</option>
                                                <option value="Passport">Passport</option>
                                                <option value="Driving License">Driving License</option>
                                                <option value="National ID">National ID</option>
                                            </select>
                                        @endif
                                    </fieldset>
                                </div>
                            </div>
                            <div class="d-lg-flex justify-content-center">
                                <div class="col-md-4">
                                    @if (isset($user->userToUserDetails->kyc_image_1))
                                        <div class="col-md-12">
                                            <img src="{{ $user->userToUserDetails->kyc_pic_1 }}"
                                                class="w-100 img-fluid rounded">
                                        </div>
                                    @else
                                        <img class="cropper-img" id="image_1">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Front Image</legend>
                                            <input type="file" class="ms-input" name="image_1" id="v1_img_input"
                                                required>
                                            <input type="hidden" name="" id="v1_img_output">
                                        </fieldset>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    @if (isset($user->userToUserDetails->kyc_image_2))
                                        <div class="col-md-12">
                                            <img src="{{ $user->userToUserDetails->kyc_pic_2 }}"
                                                class="w-100 img-fluid rounded">
                                        </div>
                                    @else
                                        <img class="cropper-img" id="image_2">
                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Back Image</legend>
                                            <input type="file" class="ms-input" name="image_2" id="v2_img_input"
                                                required>
                                        </fieldset>
                                    @endif
                                </div>
                            </div>
                            <div class="text-center m-t-20 m-b-20">
                                @if (isset($user->userToUserDetails->kyc_type) ||
                                        isset($user->userToUserDetails->kyc_image_1) ||
                                        isset($user->userToUserDetails->kyc_image_2))
                                    {{-- <button class="btn btn-primary rounded-pill" disabled>
                                        UPDATE & NEXT
                                    </button> --}}
                                @else
                                    <button class="btn btn-primary rounded-pill" id="upload_kyc">
                                        UPDATE & NEXT
                                    </button>
                                @endif
                            </div>
                        </div>

                        <div class="d-none" id="photo_verification">
                            <h3 class="text-primary font-weight-bold text-center">
                                <span>Photo Verification :</span>
                            </h3>
                            <div class="col d-flex justify-content-center">
                                <form action="#" class="">
                                    <div class="">
                                        <img class="cropper-img" id="image_3">
                                        <div class="cropper-preview-1" style="overflow: hidden">
                                            @if (isset($user->userToUserDetails->image))
                                                <img src="{{ $user->userToUserDetails->pic }}"
                                                    class="w-100 img-fluid rounded">
                                            @endif
                                        </div>

                                        <fieldset class="form-group p-2 rounded ms-fieldset">
                                            <legend class="w-auto px-2 ms-legend">Profile Picture</legend>
                                            <input type="file" class="form-control ms-input" name="image_3"
                                                id="v3_img_input" required>
                                        </fieldset>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center m-t-20 m-b-20">
                                <button class="btn btn-primary rounded-pill" id="upload_pic">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane mt-3" id="changePassword" role="tabpanel">
                        <h4 class="text-primary font-weight-bold text-center">
                            <span>Change Password</span>
                        </h4>
                        <form action="{{ route('update_password') }}" class="">
                            <div class="row">
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Old Password</legend>
                                        <input class="form-control ms-input" type="password" name="old_password"
                                            placeholder="Enter Old Password..." required>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">New Password</legend>
                                        <input class="form-control ms-input" type="password" name="new_password"
                                            placeholder="Enter New Password..." required>
                                    </fieldset>
                                </div>
                                <div class="col-md-4">
                                    <fieldset class="form-group p-2 rounded ms-fieldset">
                                        <legend class="w-auto px-2 ms-legend">Confirm Password</legend>
                                        <input class="form-control ms-input" type="password"
                                            name="new_password_confirmation" placeholder="Enter Confirm Password..."
                                            required>
                                    </fieldset>
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

    <script>
        var image_1 = document.getElementById('image_1');
        var image_2 = document.getElementById('image_2');
        var image_3 = document.getElementById('image_3');
        var cropper, reader, file;
        var cropper2, reader2, file2;
        var cropper3, reader3, file3;

        $("#v1_img_input").on("change", function(e) {
            var files = e.target.files;
            var done = function(url) {
                image_1.src = url;
            };

            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }

            cropper = new Cropper(image_1, {
                aspectRatio: NaN,
                viewMode: NaN,
                // preview: '.cropper-preview'
            });
        });
        $("#v2_img_input").on("change", function(e) {
            var files2 = e.target.files;
            var done2 = function(url) {
                image_2.src = url;
            };

            if (files2 && files2.length > 0) {
                file2 = files2[0];

                if (URL) {
                    done2(URL.createObjectURL(file2));
                } else if (FileReader2) {
                    reader2 = new FileReader();
                    reader2.onload = function(e) {
                        done2(reader2.result);
                    };
                    reader2.readAsDataURL(file2);
                }
            }

            cropper2 = new Cropper(image_2, {
                aspectRatio: NaN,
                viewMode: NaN,
                // preview: '.cropper-preview'
            });
        });
        $("#v3_img_input").on("change", function(e) {
            var files3 = e.target.files;
            var done3 = function(url) {
                image_3.src = url;
            };

            if (files3 && files3.length > 0) {
                file3 = files3[0];

                if (URL) {
                    done3(URL.createObjectURL(file3));
                } else if (FileReader2) {
                    reader3 = new FileReader();
                    reader3.onload = function(e) {
                        done3(reader3.result);
                    };
                    reader3.readAsDataURL(file3);
                }
            }

            cropper3 = new Cropper(image_3, {
                aspectRatio: NaN,
                viewMode: NaN,
                preview: '.cropper-preview-1'
            });
        });

        $("#upload_kyc").click(function() {
            var id_choose = $('#identity-choose').val();
            if (id_choose != '') {
                if (cropper && cropper2) {
                    canvas = cropper.getCroppedCanvas({
                        width: NaN,
                        height: NaN,
                    });
                    canvas2 = cropper2.getCroppedCanvas({
                        width: NaN,
                        height: NaN,
                    });

                    canvas.toBlob(function(blob) {
                        url = URL.createObjectURL(blob);
                        var reader = new FileReader();
                        reader.readAsDataURL(blob);
                        reader.onloadend = function() {
                            let base_data_1 = reader.result;

                            canvas2.toBlob(function(blob2) {
                                url2 = URL.createObjectURL(blob2);
                                var reader2 = new FileReader();
                                reader2.readAsDataURL(blob2);
                                reader2.onloadend = function() {
                                    let base_data_2 = reader2.result;

                                    $.ajax({
                                        url: "/user/profile/upload-kyc-picture",
                                        type: "post",
                                        data: {
                                            _token: $('meta[name="_token"]').attr(
                                                'content'),
                                            image_1: base_data_1,
                                            image_2: base_data_2,
                                            identity_type: id_choose
                                        },
                                        success(response) {
                                            // console.log(response);
                                            if (response == 1) {
                                                $('#identity_verification')
                                                    .addClass('d-none');
                                                $('#photo_verification')
                                                    .removeClass('d-none');
                                            } else {
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Something went wrong!',
                                                });
                                            }
                                        }
                                    });
                                }
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Select both images!',
                    });
                }


            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Select identity type!',
                });
            }
        });

        $("#upload_pic").click(function() {
            if (cropper3) {
                canvas3 = cropper3.getCroppedCanvas({
                    width: NaN,
                    height: NaN,
                });

                canvas3.toBlob(function(blob3) {
                    url3 = URL.createObjectURL(blob3);
                    var reader3 = new FileReader();
                    reader3.readAsDataURL(blob3);
                    reader3.onloadend = function() {
                        let base_data_3 = reader3.result;

                        $.ajax({
                            url: "/user/profile/upload-profile-picture",
                            type: "post",
                            data: {
                                _token: $('meta[name="_token"]').attr(
                                    'content'),
                                image: base_data_3
                            },
                            success(response) {
                                // console.log(response);
                                if (response == 1) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Successfully uploaded!',
                                    });
                                    window.location.reload();
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Something went wrong!',
                                    });
                                }
                            }
                        });
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Select both images!',
                });
            }

        });
    </script>
@endpush
