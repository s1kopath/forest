@extends('front-end.master')
@section('title')
    Support Ticket#{{ $ticket->ticket_number }}
@endsection

@push('page-style')
@endpush

@section('content')
    <!-- section content begin -->
    <div class="uk-section" style="background-color: #f4f4f4">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="font-weight-bold  text-dark">
                        Support Ticket#{{ $ticket->ticket_number }}
                    </h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-dark">
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

            <hr>

            @foreach ($ticket->replies as $reply)
                <x-ticket-replies :reply="$reply" />
                <hr>
            @endforeach

            @if ($ticket->status == 0)
                <p class="text-warning">* Waiting for response.</p>
            @elseif ($ticket->status == 1)
                @php
                    $ticket_details['route_name'] = route('public_ticket_reply', $ticket->id);
                    $ticket_details['ticket_id'] = $ticket->id;
                @endphp
                <hr>
                <x-add-ticket-reply :details="$ticket_details" />
            @elseif ($ticket->status == 2)
                <p class="text-success">* Ticket resolved.</p>
            @elseif ($ticket->status == 3)
                <p class="text-danger">* Ticket expired.</p>
            @endif
        </div>
    </div>
    <!-- section content end -->

    <div style="padding: 150px; background-color: #f4f4f4">

    </div>
@endsection

@push('page-script')
@endpush
