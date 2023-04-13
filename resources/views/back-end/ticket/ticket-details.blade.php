@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Support Ticket')

@section('page-content')
    <div class="card">
        <div class="card-header row">
            <h4 class="col font-weight-bold">
                Replay Ticket - {{ $ticket->ticket_number }}
            </h4>
            <div class="col text-right">
                <a href="{{ route('manage_tickets') }}" class="btn btn-danger btn-round waves-effect waves-light">
                    <i class="fas fa-arrow-circle-left"></i>
                    Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5>
                    Subject: {{ $ticket->subject }}
                </h5>
                <div>
                    Created: {{ $ticket->created_at->diffForHumans() }}
                    <br>
                    Ticket:
                    @if ($ticket->status == 0)
                        <span class="badge badge-pill badge-warning">Pending</span>
                    @elseif($ticket->status == 1)
                        <span class="badge badge-pill badge-primary">Open</span>
                    @elseif($ticket->status == 2)
                        <span class="badge badge-pill badge-success">Resolved</span>
                    @elseif($ticket->status == 3)
                        <span class="badge badge-pill badge-danger">Expired</span>
                    @endif
                </div>
            </div>
            <div>
                <p>
                    {{ $ticket->description }}
                </p>
            </div>
            @if ($ticket->image)
                <hr>
                <h6>Attachment:
                    <a href="{{ $ticket->img }}" class="edit-icon py-1 ml-2" title="Download">
                        Download
                        <i class="fa fa-download ms-2"></i>
                    </a>
                </h6>
            @endif
        </div>
    </div>

    @foreach ($ticket->replies as $reply)
        <x-ticket-replies :reply="$reply" />
    @endforeach

    @php
        $ticket_details['route_name'] = route('admin_reply_ticket', $ticket->id);
        $ticket_details['ticket_id'] = $ticket->id;
    @endphp
    <hr>
    <x-add-ticket-reply :details="$ticket_details" />
@endsection

@push('js')
@endpush
