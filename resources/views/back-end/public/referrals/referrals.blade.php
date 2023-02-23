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
                        @if ($user->children)
                            @foreach ($user->children as $child)
                                @if (count($child->children) > 0)
                                    <li data-jstree='{"opened":true}'>
                                        {{ $child->name }} - {{ $child->email }}
                                        <ul>
                                            <x-children :children="$child->children" />
                                        </ul>
                                    </li>
                                @else
                                    <li data-jstree='{"type":"file"}'>
                                        {{ $child->name }} - {{ $child->email }}
                                    </li>
                                @endif
                            @endforeach
                        @endif
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
