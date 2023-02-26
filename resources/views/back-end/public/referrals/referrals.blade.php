@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/pages/treeview/treeview.css') }}">
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Referrals</h5>
        </div>
        <div class="card-block">
            <h4 class="font-weight-bold">Thank you for joining our Referral program</h4>
            <h5>Below you can find the number of registration and funded accounts</h5>
        </div>
        <div class="card-block">
            <h3 class="font-weight-bold">Referral Link</h3>
            <h5>https://www.facebook.com <i class="fa fa-sticky-note"></i></h5>
        </div>
        <div class="card-block">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h4 class="font-weight-bold">1</h4>
                        <h3 class="font-weight-bold">Registration</h3>
                    </div>
                    <div class="col-md-4 text-center">
                        <h4 class="font-weight-bold">4</h4>
                        <h3 class="font-weight-bold">Active</h3>
                    </div>
                </div>
            <div class="table-responsive mt-4">
                <table class="table table-framed">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Funding</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Came 02</td>
                            <td>Months</td>
                            <td>April</td>
                            <td>Doller</td>
                            <td>House</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('back-end/bower_components/jstree/js/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/pages/treeview/jquery.tree.js') }}"></script>
@endpush
