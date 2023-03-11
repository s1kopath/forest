@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Manage Users</h5>
        </div>
        <div class="card-body">
            <div class="dt-responsive table-responsive">
                <div id="order-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 mt-2">
                            <table id="order-table" class="table table-striped table-bordered nowrap dataTable"
                                role="grid" aria-describedby="order-table_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 267.578px;">
                                            #Sl
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            username
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Joining
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr role="row" class="even">
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ date('d M, Y', strtotime($user->created_at)) }}</td>
                                            <td>
                                                @if ($user->is_verified)
                                                    <span class="badge bg-primary">Verified</span>
                                                @else
                                                    <span class="badge bg-danger">Unverified</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-warning"
                                                        href="{{ route('inspect_user', $user->id) }}">
                                                        Inspect
                                                    </a>
                                                </div>
                                                @if (!$user->is_verified)
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('verify_user', ['user_id' => $user->id, 1]) }}">
                                                            Verify
                                                        </a>
                                                    </div>
                                                @endif
                                                <div class="btn-group">
                                                    <a class="btn btn-danger"
                                                        href="{{ route('verify_user', ['user_id' => $user->id, 2]) }}">
                                                        Suspand
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cal-md-12">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
