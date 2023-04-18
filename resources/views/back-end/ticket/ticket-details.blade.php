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
                    <div class="dropdown">
                        <a class="btn btn-sm {{ $ticket->status == 1 ? 'btn-primary' : ($ticket->status == 2 ? 'bg-success' : ($ticket->status == 3 ? 'bg-danger' : 'bg-warning')) }} btn-round waves-effect waves-light dropdown-toggle"
                            href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            @if ($ticket->status == 0)
                                Pending
                            @elseif($ticket->status == 1)
                                Open
                            @elseif($ticket->status == 2)
                                Resolved
                            @elseif($ticket->status == 3)
                                Expired
                            @endif
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @if ($ticket->status == 0)
                                <a class="dropdown-item"
                                    href="{{ route('admin_update_ticket', ['id' => $ticket->id, 'status' => 1]) }}">
                                    Mark As Open
                                </a>
                            @elseif($ticket->status == 1)
                                <a class="dropdown-item"
                                    href="{{ route('admin_update_ticket', ['id' => $ticket->id, 'status' => 2]) }}">
                                    Mark As Resolved
                                </a>
                                <a class="dropdown-item"
                                    href="{{ route('admin_update_ticket', ['id' => $ticket->id, 'status' => 3]) }}">
                                    Mark As Expired
                                </a>
                            @endif
                            @if ($ticket->type == 'public')
                                <a class="dropdown-item" href="{{ route('send_ticket_link', $ticket->id) }}">
                                    Send Reply Link
                                </a>
                            @endif
                        </div>
                    </div>
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

    @if ($ticket->status == 0 || $ticket->status == 1)
        @php
            $ticket_details['route_name'] = route('admin_reply_ticket', $ticket->id);
            $ticket_details['ticket_id'] = $ticket->id;
        @endphp
        <hr>
        <x-add-ticket-reply :details="$ticket_details" />
    @endif
@endsection

@push('js')
@endpush
