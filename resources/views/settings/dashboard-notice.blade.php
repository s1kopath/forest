@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">        
        <div class="card-body">
            @livewire('notice')
        </div>
    </div>
@endsection

@push('js')
@endpush

