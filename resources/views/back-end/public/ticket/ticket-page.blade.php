@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Support Ticket')

@section('page-content')
    <div class="card">
        <div class="card-block">
            <div class="text-right m-1">
                <a href="{{ route('create_user_support_ticket') }}" class="uk-button uk-button-primary">
                    Create New
                </a>
            </div>


            <div class="table-responsive">
                <table class="table table-framed">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ticket ID</th>
                            <th>Subject</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $key => $ticket)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>
                                    <a href="{{ route('reply_ticket', $ticket->id) }}" class="btn btn-outline-success rounded">
                                        {{ $ticket->ticket_number }}
                                    </a>
                                </td>
                                <td>{{ $ticket->subject }}</td>
                                <td>{{ $ticket->created_at->diffForHumans() }}</td>
                                <td>
                                    @if ($ticket->status == 0)
                                        <span class="badge badge-pill badge-warning">Pending</span>
                                    @elseif($ticket->status == 1)
                                        <span class="badge badge-pill badge-primary">Open</span>
                                    @elseif($ticket->status == 2)
                                        <span class="badge badge-pill badge-success">Disclosed</span>
                                    @elseif($ticket->status == 3)
                                        <span class="badge badge-pill badge-danger">Suspended</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('reply_ticket', $ticket->id) }}" class="btn btn-success btn-round waves-effect waves-light">
                                        Check
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
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
