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
            <div class="card-block tree-view">
                <div id="basicTree">
                    <ul>
                        <li>Admin
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
                        </li>
                        <li data-jstree='{"type":"file"}'>Frontend</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script type="text/javascript" src="{{ asset('back-end/bower_components/jstree/js/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/pages/treeview/jquery.tree.js') }}"></script>
@endpush
