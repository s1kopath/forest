@extends('back-end.layouts.register')
@section('page_content')
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('back-end/assets/images/login-bg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form action="{{ route('register') }}" method="POST" class="md-float-material form-material">
                        @csrf
                        <div class="text-center">
                            <img src="{{ asset('back-end/img/logo.png') }}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-body">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                {{-- <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <a href="#!"
                                            class="btn btn-facebook m-b-20 btn-block waves-effect waves-light"><i
                                                class="icofont icofont-social-facebook"></i>facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#!"
                                            class="btn btn-twitter m-b-0 btn-block waves-effect waves-light"><i
                                                class="icofont icofont-social-twitter"></i>twitter</a>
                                    </div>
                                </div> --}}
                                <p class="text-muted text-center p-b-5">Sign up with your regular account</p>
                                @if (session('error'))
                                    <div class="alert bg-alert text-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert bg-alert text-danger">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                                <div class="form-group form-primary">
                                    <input type="text" name="name" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Enter Full Name</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Choose Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control" required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required>
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                </span>
                                                <span class="text-inverse">
                                                    I read and accept
                                                    <a href="#">
                                                        Terms &amp; Conditions.
                                                    </a>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                </span>
                                                <span class="text-inverse">
                                                    Send me the
                                                    <a href="#">Newsletter</a>
                                                    weekly.
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @if (session('referer_id'))
                                    <span class="text-danger">
                                        * Referer: {{ session('referer_name') }}
                                    </span>
                                    <input type="hidden" name="referer_id" value="{{ session('referer_id') }}">
                                @endif
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            Sign up now
                                        </button>
                                    </div>
                                </div>
                                <hr />
                                <p class="f-w-600 text-right">Back to <a href="{{ route('auth_login') }}">Login.</a></p>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left">
                                            <a href="/">
                                                <b>Back to website</b>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>
@endsection
