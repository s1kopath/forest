@extends('back-end.layouts.auth')
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
                    <form action="{{ route('auth_login') }}" method="POST" class="md-float-material form-material">
                        @csrf
                        <div class="text-center">
                            <img class="rounded" src="{{ asset('back-end/img/logo.png') }}" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-body">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <div class="row m-b-20">
                                    {{-- <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20 btn-block"><i
                                                class="icofont icofont-social-facebook"></i>facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20 btn-block"><i
                                                class="icofont icofont-social-twitter"></i>
                                            twitter
                                        </button>
                                    </div> --}}
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
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
                                    <input type="text" name="login" class="form-control"
                                        placeholder="Enter Username or Email" required="">
                                    <span class="form-bar"></span>
                                    {{-- <label class="float-label">Username</label> --}}
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter Your Password" required="">
                                    <span class="form-bar"></span>
                                    {{-- <label class="float-label">Password</label> --}}
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="remember_me" value="true">
                                                <span class="cr">
                                                    <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                </span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            <a href="{{ route('forget_password') }}" class="text-right f-w-600">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                            LOGIN
                                        </button>
                                    </div>
                                </div>
                                <p class="text-inverse text-left">
                                    Don't have an account?
                                    <a href="{{ route('register') }}">
                                        <b>Register here </b>
                                    </a>
                                    for free!
                                </p>
                                <div class="row">
                                    <div class="col-md-10">
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
        </div>
    </section>
@endsection
