@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Support Ticket')

@section('page-content')
    <div class="text-right m-1">
        <a href="{{ route('create_user_support_ticket') }}" class="uk-button uk-button-primary">
            Create New
        </a>
    </div>

    @foreach ($tickets as $key => $ticket)
        <a href="{{ route('user_reply_ticket', $ticket->id) }}">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="font-weight-bold">
                        {{ $ticket->subject }}
                    </h5>
                    <small>
                        {{ $ticket->created_at->diffForHumans() }}
                    </small>
                </div>
                <div class="card-body">
                    <p>
                        {{ substr($ticket->description, 0, 250) }}...
                    </p>
                </div>
                <div class="card-footer">
                    <span class="badge badge-pill badge-secondary">
                        #{{ $ticket->ticket_number }}
                    </span>
                    @if ($ticket->status == 0)
                        <span class="badge badge-pill badge-warning">Pending</span>
                    @elseif($ticket->status == 1)
                        <span class="badge badge-pill badge-primary">Open</span>
                    @elseif($ticket->status == 2)
                        <span class="badge badge-pill badge-success">Resolved</span>
                    @elseif($ticket->status == 3)
                        <span class="badge badge-pill badge-danger">Expired</span>
                    @endif
                    <span>
                        <i class="far fa-comment"></i>
                        {{ $ticket->replies->count() }}
                    </span>
                </div>
            </div>
        </a>
    @endforeach
@endsection

@push('js')
@endpush
