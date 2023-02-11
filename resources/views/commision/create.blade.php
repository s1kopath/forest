@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="pcoded-content">
        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-shield bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Forms Masking</h5>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="../index-2.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#!">Forms Masking</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-lg-12 col-xl-9">
                                <div class="card">
                                    @if (session()->has('message'))
                                        <div class="alert bg-info">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div class="alert bg-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="card-header">
                                        <h5>Create Package</h5>
                                        <span>Add class of <code>.date</code> with <code>data-mask</code> attribute</span>
                                    </div>
                                    <div class="card-block">
                                        <form action="#" method="POST">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label class="col-form-label"></label>
                                                    <input type="text" name="percentage" class="form-control date" data-mask="99/99/9999">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-12">
                                                    <select name="person_type" class="form-control form-control-info fill">
                                                        <option value=" ">Select Duration</option>
                                                        <option value="1">Affiliate</option>
                                                        <option value="2">IB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-12 text-center">
                                                  <button class="btn btn-primary btn-round waves-effect waves-light" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
