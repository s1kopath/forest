@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Manage Deposits</h5>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end">
                <div class="ml-2">
                    <form class="form-inline" action="{{ route('manage_deposits') }}" method="get">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">Keyword:</label>
                            <input type="text" class="form-control" name="keyword" required
                                placeholder="Transacrion ID/Hash/Name/Username/Email"
                                value="{{ isset($_GET['keyword']) ? $_GET['keyword'] : '' }}">
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Search</button>
                            <a href="{{ route('manage_deposits') }}" class="btn btn-danger">Reset</a>
                        </div>
                    </form>
                </div>
            </div>

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
                                            style="width: 267.578px;">#Sl
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 267.578px;">Name/Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Amount
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Currency
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Coin Type
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Network Type
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Transaction ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Transaction Hash
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Deposited On
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
                                    @foreach ($deposits as $key => $data)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>
                                                {{ $data->user_details->name }}
                                                <br>
                                                {{ $data->user_details->email }}
                                            </td>
                                            <td>${{ $data->amount }}</td>
                                            <td>{{ $data->currency }}</td>
                                            <td>{{ $data->coin_type }}</td>
                                            <td>{{ $data->network_type }}</td>
                                            <td>{{ $data->trx_id }}</td>
                                            <td>{{ $data->transaction_hash }}</td>
                                            <td>{{ $data->date_time }}</td>
                                            <td>
                                                @if ($data->status == 2)
                                                    <span class="text-danger">
                                                        Rejected
                                                    </span>
                                                @elseif ($data->status == 1)
                                                    <span class="text-success">
                                                        Completed
                                                    </span>
                                                @else
                                                    <span class="text-warning">
                                                        Pending
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($data->status == 0)
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary"
                                                            onclick="return confirm('Are you sure ?')"
                                                            href="{{ route('approve_deposits', ['id' => $data->id, 'status' => 1]) }}">
                                                            Approve
                                                        </a>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-danger"
                                                            onclick="return confirm('Are you sure ?')"
                                                            href="{{ route('approve_deposits', ['id' => $data->id, 'status' => 2]) }}">
                                                            Reject
                                                        </a>
                                                    </div>
                                                @else
                                                    <div>
                                                        Approved By: {{ $data->approved_by_user->name }}
                                                        <br>
                                                        Approved On: {{ $data->approved_on }}
                                                    </div>
                                                @endif
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
                {{ $deposits->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
@endsection

@push('js')
@endpush
