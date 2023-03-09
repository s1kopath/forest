@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/assets/pages/treeview/treeview.css') }}">
    @push('css')
        <style>
            .btn:hover {
                background: linear-gradient(#152B40, #152B40);
            }

            .btn:focus {
                background: linear-gradient(#152B40, #152B40);
            }

            .button-container button {
                display: inline-block;
                margin-right: 10px;
                padding: 5px 10px;
            }

            @media only screen and (max-width: 768px) {
                .shihab-btn-mbl-scroll {
                    overflow-x: scroll;
                    width: 100%;
                    display: flex;
                    position: relative;
                }

                .shihab-btn-mbl-scroll button {
                    display: inline-block;
                    position: relative;
                    padding: 6px 15px !important;
                    white-space: pre;
                }
            }
        </style>
    @endpush
@endpush

@section('page-title', 'Referrals')

@section('page-content')
    <div class="card">
        <div class="card-body">
            <h4 class="font-weight-bold">Thank you for joining our Referral program</h4>
            <h5>Below you can find the number of registration and funded accounts</h5>
        </div>
        {{-- <div class="card-block tree-view">
            <div id="basicTree">
                <ul>
                    @if ($user->children)
                        @foreach ($user->children as $child)
                            @if (count($child->children) > 0)
                                <li data-jstree='{"opened":true}'>
                                    {{ $child->name }} - {{ $child->email }} - 1
                                    <ul>
                                        <x-children :children="$child->children" :level="2" />
                                    </ul>
                                </li>
                            @else
                                <li data-jstree='{"type":"file"}'>
                                    {{ $child->name }} - {{ $child->email }} - 1
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
        </div> --}}
        <div class="card-body">
            <h3 class="font-weight-bold">Referral Link</h3>
            <h5 id="referral-link">
                {{ env('APP_URL') . '/ref/' . $user->username }}
            </h5>
            <button type="button" class="btn btn-primary rounded-pill mb-3 mt-2" onclick="myFunction()" id="copied">
                <i class="far fa-copy"></i>
                Copy
            </button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h4 class="font-weight-bold">{{ count($user->direct_team) }}</h4>
                    <h3 class="font-weight-bold">Registration</h3>
                </div>
                <div class="col-md-4 text-center">
                    <h4 class="font-weight-bold">{{ count($user->total_team) }}</h4>
                    <h3 class="font-weight-bold">Active</h3>
                </div>
            </div>

            <div class="card-block shihab-btn-mbl-scroll mt-4">
                <button type="button" class="btn btn-success rounded-pill mx-1">Direct</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">IB</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">Pro-IB</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">Master-IB</button>
                <button type="button" class="btn btn-success rounded-pill mx-1">Corporate-IB</button>
            </div>
            <div class="table-responsive mt-4">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            {{-- <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">Register</h4>
                                <h6>$10000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">IB</h4>
                                <h6>$1000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">Master IB</h4>
                                <h6>$1000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <h4 style="font-weight:bold">Danial001</h4>
                                <h6>Diana Joshep Padex</h6>
                            </td>
                            <td>
                                <h4 style="font-weight:bold">Pro IB</h4>
                                <h6>$1000</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
                        <x-refered-users-table :children="$user->children" :level="1" :sl="1" />
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('back-end/bower_components/jstree/js/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/pages/treeview/jquery.tree.js') }}"></script>
    <script>
        function myFunction() {
            // Get the text field
            var copyText = $("#referral-link").text();

            copyText = copyText.trim();

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText);

            $('#copied').html('✔️ Copied');
        }
    </script>
    <script>
        function focusMe(button) {
            document.getElementsByClassName("button-selected")[0].className = "";
            button.className = "button-selected";
        }
    </script>
@endpush
