@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Manage Withdraw</h5>
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
                                            Charge
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Net Amount
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Withdraw On
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Payment Method
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
                                    @foreach ($withdraws as $key => $data)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>
                                                {{ $data->user_details->name }}
                                                <br>
                                                {{ $data->user_details->email }}
                                            </td>
                                            <td>${{ $data->amount }}</td>
                                            <td>${{ $data->charge }}</td>
                                            <td>${{ $data->net_amount }}</td>
                                            <td>{{ $data->date_time }}</td>
                                            <td>
                                                @if ($data->payment_method == 'Visa')
                                                    <span class="font-weight-bold">Visa</span>
                                                    <br>
                                                    Card Holder: {{ $data->visa_details->card_holder_name }}
                                                    <br>
                                                    Card Number: {{ $data->visa_details->card_number }}
                                                @elseif ($data->payment_method == 'Bank')
                                                    <span class="font-weight-bold">Bank</span>
                                                    <br>
                                                    Bank Name: {{ $data->bank_details->bank_name }}
                                                    <br>
                                                    Branch Name: {{ $data->bank_details->branch_name }}
                                                    <br>
                                                    Account Name: {{ $data->bank_details->account_name }}
                                                    <br>
                                                    Account Number: {{ $data->bank_details->account_number }}
                                                    <br>
                                                    Country: {{ $data->bank_details->country }}
                                                    <br>
                                                    State: {{ $data->bank_details->state }}
                                                    <br>
                                                    Swift Code: {{ $data->bank_details->swift_code }}
                                                    <br>
                                                    Routing Number: {{ $data->bank_details->routing_number }}
                                                @elseif ($data->payment_method == 'Crypto')
                                                    <span class="font-weight-bold">Crypto</span>
                                                    <br>
                                                    Network: {{ $data->crypto_details->network }}
                                                    <br>
                                                    Wallet_address: {{ $data->crypto_details->wallet_address }}
                                                @endif
                                            </td>
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
                                                            href="{{ route('approve_withdraw', ['id' => $data->id, 'status' => 1]) }}">
                                                            Approve
                                                        </a>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-danger" onclick="return confirm('Are you sure ?')"
                                                            href="{{ route('approve_withdraw', ['id' => $data->id, 'status' => 2]) }}">
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
                {{ $withdraws->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
@endsection

@push('js')
@endpush
