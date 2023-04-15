@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-framed">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ticket ID</th>
                            <th>Ticket Type</th>
                            <th>Name/Email</th>
                            <th>Subject</th>
                            <th>Created</th>
                            <th>Replied By</th>
                            <th>Replied On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $key => $ticket)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    <a href="{{ route('admin_reply_ticket', $ticket->id) }}"
                                        class="btn btn-outline-success rounded">
                                        {{ $ticket->ticket_number }}
                                    </a>
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-secondary">
                                        {{ $ticket->type }}
                                    </span>
                                </td>
                                <td>
                                    @if ($ticket->type == 'private')
                                        {{ $ticket->user->name }} ({{ $ticket->user->username }})
                                        <br>
                                        {{ $ticket->user->email }}
                                    @else
                                        {{ $ticket->name }}
                                        <br>
                                        {{ $ticket->email }}
                                    @endif
                                </td>
                                <td>
                                    {{ $ticket->subject }}
                                    <br>
                                    <span>
                                        <i class="far fa-comment"></i>
                                        {{ $ticket->replies->count() }}
                                    </span>
                                </td>
                                <td>
                                    {{ date('Y-m-d h:i A', strtotime($ticket->created_at)) }}
                                    <br>
                                    <small>{{ $ticket->created_at->diffForHumans() }}</small>
                                </td>
                                <td>
                                    @if ($ticket->response_by)
                                        {{ $ticket->support->name }} ({{ $ticket->support->username }})
                                        <br>
                                        {{ $ticket->support->email }}
                                    @endif
                                </td>
                                <td>
                                    @if ($ticket->response_at)
                                        {{ $ticket->response_at ? date('Y-m-d h:i A', strtotime($ticket->response_at)) : '' }}
                                        <br>
                                        <small>{{ Carbon\Carbon::create($ticket->response_at)->diffForHumans() }}</small>
                                    @endif
                                </td>
                                <td>
                                    @if ($ticket->status == 0)
                                        <span class="badge badge-pill badge-warning">Pending</span>
                                    @elseif($ticket->status == 1)
                                        <span class="badge badge-pill badge-primary">Open</span>
                                    @elseif($ticket->status == 2)
                                        <span class="badge badge-pill badge-success">Resolved</span>
                                    @elseif($ticket->status == 3)
                                        <span class="badge badge-pill badge-danger">Expired</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-success btn-round waves-effect waves-light dropdown-toggle"
                                            href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="{{ route('admin_reply_ticket', $ticket->id) }}">
                                                Reply
                                            </a>
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
                                                <a class="dropdown-item"
                                                    href="{{ route('send_ticket_link', $ticket->id) }}">
                                                    Send Reply Link
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
