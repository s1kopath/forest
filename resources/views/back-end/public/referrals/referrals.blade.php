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
        <div class="card-block tree-view">
            <div id="basicTree">
                <ul>
                    {{-- <li>Admin
                        <ul>
                            <li data-jstree='{"opened":true}'>Assets
                                <ul>
                                    <li data-jstree='{"type":"file"}'>
                                        Css</li>
                                    <li data-jstree='{"opened":true}'>
                                        Plugins
                                        <ul>
                                            <li data-jstree='{"selected":true,"type":"file"}'>
                                                Plugin one</li>
                                            <li data-jstree='{"type":"file"}'>
                                                Plugin two</li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li data-jstree='{"opened":true}'>Email
                                Template
                                <ul>
                                    <li data-jstree='{"type":"file"}'>
                                        Email one</li>
                                    <li data-jstree='{"type":"file"}'>
                                        Email two</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"zmdi zmdi-view-dashboard"}'>
                                Dashboard</li>
                            <li data-jstree='{"icon":"zmdi zmdi-format-underlined"}'>
                                Typography</li>
                            <li data-jstree='{"opened":true}'>User
                                Interface
                                <ul>
                                    <li data-jstree='{"type":"file"}'>
                                        Buttons</li>
                                    <li data-jstree='{"type":"file"}'>
                                        Cards</li>
                                </ul>
                            </li>
                            <li data-jstree='{"icon":"zmdi zmdi-collection-text"}'>
                                Forms</li>
                            <li data-jstree='{"icon":"zmdi zmdi-view-list"}'>
                                Tables</li>
                        </ul>
                    </li> --}}
                    {{-- @foreach ($children as $child)
                        @if (count($child->children) > 0)
                            <li data-jstree='{"opened":true}'>
                                {{ $child->name }} - {{ email_mask($child->email) }}
                                <ul>
                                    <x-children :children="$child->children" />
                                </ul>
                            </li>
                        @else
                            <li data-jstree='{"type":"file"}'>
                                {{ $child->name }} - {{ email_mask($child->email) }}
                            </li>
                        @endif
                    @endforeach --}}

                    {{-- <li data-jstree='{"type":"file"}'>Frontend</li>
                    @if ($user->children)
                        @foreach ($user->children as $child)
                            @if (count($child->children) > 0)
                                <li data-jstree='{"opened":true}'>
                                    {{ $child->name }} - {{ $child->email }} - 1
                                    <ul>
                                        <x-children :children="$child->children" :level="2"/>
                                    </ul>
                                </li>
                            @else
                                <li data-jstree='{"type":"file"}'>
                                    {{ $child->name }} - {{ $child->email }} - 1
                                </li>
                            @endif
                        @endforeach --}}
                    @endif
                </ul>
            </div>
        </div>
        <div class="card-block">
            <h3 class="font-weight-bold">Referral Link</h3>
            <h5>https://www.facebook.com</h5>
            <button type="button" class="btn btn-primary rounded-pill mb-3 mt-4">
                <i class="far fa-copy"></i>
                Copy
            </button>
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
                        @foreach ($user->children as $child)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $child->username }}</td>
                                <td>{{ $child->name }}</td>
                                <td>{{ $child->email }}</td>
                                <td>{{ $child->referer_id }}</td>
                                <td>???</td>
                            </tr>
                        @endforeach
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
