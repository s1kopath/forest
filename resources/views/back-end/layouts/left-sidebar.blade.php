@section('left-sidebar')
    @php
        $route_name = request()
            ->route()
            ->getName();
        
        $url = url()->current();
        $urlArray = explode('-', $url);
        $lastElement = end($urlArray);
    @endphp

    @if (auth()->user()->user_type == 'admin')
        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    <div class="d-flex justify-content-between">
                        <div class="col-4">
                            <img class="profile-header-avatar shadow" src="{{ asset('back-end/assets/images/avatar-4.jpg') }}"
                                alt="Reeve Capital">
                        </div>
                        <div class="col-8 text-white" style="overflow-wrap: break-word">
                            <span class="font-weight-bold">Hello, {{ auth()->user()->username }}</span>
                            <br>
                            <small>{{ auth()->user()->email }}</small>
                            <br>
                            <span class="font-weight-bold text-danger">Admin Account</span>
                        </div>
                    </div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'dashboard' ? 'active' : '' }}">
                            <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">Users</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'users' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Users & IB</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'manage_users' ? 'active' : '' }}">
                                    <a href="{{ route('manage_users') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Users</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_ib' ? 'active' : '' }}">
                                    <a href="{{ route('manage_ib') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage IB</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu {{ $lastElement == 'deposit' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">User Deposits</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'manage_deposits' ? 'active' : '' }}">
                                    <a href="{{ route('manage_deposits') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Deposits</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu {{ $lastElement == 'withdraw' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">User Withdraw</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'manage_withdraw' ? 'active' : '' }}">
                                    <a href="{{ route('manage_withdraw') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Withdraw</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>


                    <div class="pcoded-navigation-label">ROI</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'rois' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Stacking ROI</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_stacking_rois' ? 'active' : '' }}">
                                    <a href="{{ route('add_stacking_rois') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Stacking ROI</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_stacking_rois' ? 'active' : '' }}">
                                    <a href="{{ route('manage_stacking_rois') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Stacking ROI</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="pcoded-navigation-label">ROYALITY</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'royality' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Ib Royalty</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_ib_royality' ? 'active' : '' }}">
                                    <a href="{{ route('add_ib_royality') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Ib Royalty</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_ib_royality' ? 'active' : '' }}">
                                    <a href="{{ route('manage_ib_royality') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Ib Royalty</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="pcoded-navigation-label">GIFT</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'gift' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Gift</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_gift' ? 'active' : '' }}">
                                    <a href="{{ route('add_gift') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Gift</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_gift' ? 'active' : '' }}">
                                    <a href="{{ route('manage_gift') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Gift</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="pcoded-navigation-label">CONTEST</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'contest' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">Monthly Contest</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_monthly_contest' ? 'active' : '' }}">
                                    <a href="{{ route('add_monthly_contest') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Contest</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_monthly_contest' ? 'active' : '' }}">
                                    <a href="{{ route('manage_monthly_contest') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Contest</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="pcoded-navigation-label">SETTINGS</div>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $lastElement == 'banner' ? 'active pcoded-trigger' : '' }}">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <i class="feather icon-clipboard"></i>
                                </span>
                                <span class="pcoded-mtext">User Dashboard Banner</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="{{ $route_name == 'add_banner' ? 'active' : '' }}">
                                    <a href="{{ route('add_banner') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Add Banner</span>
                                    </a>
                                </li>
                                <li class="{{ $route_name == 'manage_banner' ? 'active' : '' }}">
                                    <a href="{{ route('manage_banner') }}" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Manage Banner</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item d-none">
                        <li class="pcoded-hasmenu {{ $route_name == 'manage_notice' ? 'active' : '' }}">
                            <a href="{{ route('manage_notice') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="pcoded-mtext">Dashboard Header Notice</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="{{ route('logout') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="pcoded-mtext">Logout</span>
                            </a>
                        </li>
                    </ul>

                    {{-- <div class="pcoded-navigation-label">Forms</div>
                    <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-clipboard"></i>
                            </span>
                            <span class="pcoded-mtext">Form</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" ">
                                <a href="form-elements-component.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Components</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="form-elements-add-on.html" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Add-On</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="form-select.html" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-feather"></i>
                            </span>
                            <span class="pcoded-mtext">Form Select</span>
                        </a>
                    </li>
                </ul>  --}}
                </div>
            </div>
        </nav>
    @endif

    @if (auth()->user()->user_type == 'public')
        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">
                    {{-- user details section is hidden in sidebar on mobile and showen on desktop  --}}
                    <div class="d-none d-lg-block">
                        <div class="d-flex justify-content-between pt-2">
                            <div class="col-4">
                                @if (isset(auth()->user()->userToRank->rankToRankReward->title))
                                    <style>
                                        .profile-header-avatar {
                                            margin: 3px 0 0 21px;
                                        }
                                    </style>
                                @endif
                                <img class="profile-header-avatar" src="{{ auth()->user()->userToUserDetails->pic }}"
                                    data-toggle="modal" data-target="#exampleModal" id="myImg" alt="Reeve Capital"
                                    type="button">
                            </div>

                            <div class="col-8 text-white" style="overflow-wrap: break-word">
                                <span class="font-weight-bold">
                                    Hello, {{ auth()->user()->username }}
                                    @if (auth()->user()->is_verified)
                                        <i class="fas fa-check-circle text-success"></i>
                                    @else
                                        <i class="fas fa-ban text-danger"></i>
                                    @endif
                                </span>
                                <br>
                                <small>{{ auth()->user()->email }}</small>
                                {{-- <br>
                                <span class="font-weight-bold text-primary">
                                    {{ auth()->user()->is_verified ? 'Verified Account' : 'Unverified' }}
                                </span> --}}
                                @if (isset(auth()->user()->userToRank->rankToRankReward->title))
                                    <br>
                                    <span>
                                        {{ auth()->user()->userToRank->rankToRankReward->title }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_dashboard' ? 'active' : '' }}">
                            <a href="{{ route('public_dashboard') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_profile' ? 'active' : '' }}">
                            <a href="{{ route('public_profile') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-cog"></i></span>
                                <span class="pcoded-mtext">Profile</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_fund' ? 'active' : '' }}">
                            <a href="{{ route('public_fund') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-briefcase"></i></span>
                                <span class="pcoded-mtext">Funds</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'stake' ? 'active' : '' }}">
                            <a href="{{ route('stake') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <img class="img-fluid" width="20" style="opacity: 0.8;"
                                        src="{{ asset('front-end/img/icons/Staking Sidebar.png') }}" alt="REEVE">
                                </span>
                                <span class="pcoded-mtext">Staking</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_history' ? 'active' : '' }}">
                            <a href="{{ route('public_history') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-history"></i></span>
                                <span class="pcoded-mtext">History</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_referrals' ? 'active' : '' }}">
                            <a href="{{ route('public_referrals') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                <span class="pcoded-mtext">Referrals</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_downloads' ? 'active' : '' }}">
                            <a href="{{ route('public_downloads') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-cloud-download-alt"></i></span>
                                <span class="pcoded-mtext">Downloads</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu {{ $route_name == 'public_become_an_ib' ? 'active' : '' }}">
                            <a href="{{ route('public_become_an_ib') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
                                    <img class="img-fluid" width="20" style="opacity: 0.8;"
                                        src="{{ asset('front-end/img/icons/Become IB.png') }}" alt="REEVE">
                                </span>
                                <span class="pcoded-mtext">Become an IB</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="pcoded-item pcoded-left-item">
                        <li class="pcoded-hasmenu">
                            <a href="{{ route('logout') }}" class="waves-effect waves-dark">
                                <span class="pcoded-micon"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="pcoded-mtext">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload Profile Picture</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="" class="col-form-label">Profile Picture:</label>
                            <img class="cropper-img" id="image">
                            <div class="cropper-preview"></div>
                            <input type="file" class="form-control" name="image" id="imageInput">
                        </div>
                        <button type="button" class="btn btn-primary" id="upload" data-dismiss="modal">
                            Upload
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    @endif
@endsection

@push('js')
    @if (auth()->user()->user_type == 'public')
        <script>
            $("#myImg").click(function() {
                $("#myModal").modal();
            });

            var bs_modal = $('#examplModal');
            var image = document.getElementById('image');
            var cropper, reader, file;


            $("body").on("change", '#imageInput', function(e) {
                var files = e.target.files;
                var done = function(url) {
                    image.src = url;
                    // bs_modal.modal('show');
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

                cropper = new Cropper(image, {
                    aspectRatio: NaN,
                    viewMode: NaN,
                    preview: '.cropper-preview'
                });
            });

            $("#upload").click(function() {
                canvas = cropper.getCroppedCanvas({
                    width: 100,
                    height: 100,
                });

                canvas.toBlob(function(blob) {
                    url = URL.createObjectURL(blob);
                    var reader = new FileReader();
                    reader.readAsDataURL(blob);
                    reader.onloadend = function() {
                        var base64data = reader.result;

                        $.ajax({
                            type: "POST",
                            url: "/user/profile/upload-profile-picture",
                            data: {
                                _token: $('meta[name="_token"]').attr('content'),
                                image: base64data
                            },
                            success: function(response) {
                                // console.log(response);
                                if (response == 1) {
                                    cropper.destroy();
                                    cropper = null;

                                    $('#image').attr('src', '');

                                    // alert('Successfully updated!');

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
            });
        </script>
    @endif
@endpush
