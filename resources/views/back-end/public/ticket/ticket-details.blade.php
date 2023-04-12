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
                <a href="{{ route('user_support_ticket') }}" class="btn btn-danger btn-round waves-effect waves-light">
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
                        <span class="badge badge-pill badge-success">Disclosed</span>
                    @elseif($ticket->status == 3)
                        <span class="badge badge-pill badge-danger">Suspended</span>
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
        <div class="card">
            <div class="card-header">
                <h6>
                    @if ($reply->reply_by == 'support')
                        Support
                    @else
                        You
                    @endif
                    <small class="text-muted">({{ $reply->created_at->diffForHumans() }})</small>
                </h6>
            </div>
            <div class="card-body">
                <div>
                    <p>
                        {{ $reply->text }}
                    </p>
                </div>
                @if ($reply->image)
                    <hr>
                    <h6>Attachment:
                        <a href="{{ $reply->img }}" class="edit-icon py-1 ml-2" title="Download">
                            Download
                            <i class="fa fa-download ms-2"></i>
                        </a>
                    </h6>
                @endif
            </div>
        </div>
    @endforeach
    {{-- @dd($ticket) --}}
@endsection

@push('js')
@endpush
