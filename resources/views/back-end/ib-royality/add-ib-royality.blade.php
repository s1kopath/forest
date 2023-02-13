@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')
@section('page-content')
    <div class="pcoded-content">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header bg bg-info">
                                <h2 class="text-center">Add Royality</h5>
                            </div>
                            <div class="col-12 py-3">
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
                            </div>
                            <div class="card-block">
                                <form action="{{ route('add_ib_royality') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 offset-md-2">
                                                <label for="" class="form-label mb-0 font-weight-bold">Rank:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="rank" class="form-control form-select" required>
                                                    <option value="">Choose Rank...</option>
                                                    <option value="IB">IB</option>
                                                    <option value="Pro-IB">Pro-IB</option>
                                                    <option value="Master IB">Master IB</option>
                                                    <option value="Corporate IB">Corporate IB</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 offset-md-2">
                                                <label for=""
                                                    class="form-label mb-0 font-weight-bold">Percentage:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" step="0.01" class="form-control"
                                                    placeholder="Enter Percentage..." name="percentage" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            {{-- <div class="col-md-2 offset-md-2">
                                                <label for="" class="form-label mb-0 font-weight-bold">Status:</label>
                                            </div> --}}
                                            {{-- <div class="col-md-6">
                                                <span class="switchery switchery-default" style="background-color: rgb(64, 153, 255); border-color: rgb(64, 153, 255); box-shadow:
                                                rgb(64, 153, 255) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>

                                            </div> --}}
                                            <div class="col-md-2 offset-md-2">
                                                <label for=""
                                                    class="form-label mb-0 font-weight-bold">Status:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="status" class="form-control form-select" required>
                                                    <option value="">Choose status...</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit"
                                            class="btn btn-success btn-round waves-effect waves-light">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
