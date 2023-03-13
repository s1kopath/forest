<div class="table-responsive d-none d-lg-block">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Payment Gateway</th>
                <th>Date/Time</th>
                <th>Amount</th>
                <th>Network</th>
                <th>Withdraw Fee</th>
                <th>Net Amount</th>
                <th>Wallet Address</th>
                <th>Card Number</th>
                <th>Transaction Hash</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->payment_gateway }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>${{ $data->amount }}</td>
                    <td>{{ $data->network }}</td>
                    <td>${{ $data->transaction_fee }}</td>
                    <td>${{ $data->net_amount }}</td>
                    <td>{{ $data->wallet_address }}</td>
                    <td>{{ $data->card_number }}</td>
                    <td>{{ $data->transaction_hash }}</td>
                    <td>
                        @if ($data->status == 2)
                            <span class="text-danger">
                                Cancelled
                            </span>
                        @elseif ($data->status == 1)
                            <span class="text-success">
                                Success
                            </span>
                        @else
                            <span class="text-warning">
                                Processing
                            </span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-block d-lg-none">
    <table class="table">
        <tbody>
            @foreach ($transactions as $key => $data)
                <tr class="collapse-button" data-toggle="collapse" data-target="#collapse{{ $data->id }}"
                    aria-expanded="false" aria-controls="collapse{{ $data->id }}">
                    <td>
                        <span class="font-weight-bold rounded text-white py-1 px-2" style="background-color: #0548ac;">
                            <i class="fas fa-plus fa-xs"></i>
                        </span>
                    </td>
                    <td>
                        <h4 class="font-weight-bold">{{ $data->payment_gateway }}</h4>
                        <h6 class="font-weight-bold">{{ $data->created_at }}</h6>
                    </td>
                    <td class="text-right">
                        <h4 class="font-weight-bold">
                            ${{ $data->amount }}
                        </h4>
                        @if ($data->status == 2)
                            <small class="text-danger font-weight-bold">
                                •&nbsp&nbsp&nbsp Cancelled
                            </small>
                        @elseif ($data->status == 1)
                            <small class="text-success font-weight-bold">
                                •&nbsp&nbsp&nbsp Success
                            </small>
                        @else
                            <small class="text-warning font-weight-bold">
                                •&nbsp&nbsp&nbsp Processing
                            </small>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td colspan="6" class="p-0 border-0">
                        <div class="collapse px-4 pb-3" id="collapse{{ $data->id }}">
                            <div class="row">
                                <div class="col-6">Network</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-4 text-right">{{ $data->network }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Withdraw Fee</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-4 text-right">${{ $data->transaction_fee }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Net Amount</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-4 text-right">${{ $data->net_amount }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Card Number</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-4 text-right">{{ $data->card_number }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Wallet Address</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-4 text-right">{{ $data->wallet_address }}</div>
                            </div>
                            <div class="row">
                                <div class="col-6">Transaction Hash</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-4 text-right">{{ $data->transaction_hash }}</div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="col-md-12 mb-2">
    {{ $transactions->links() }}
</div>

<script>
    $(".collapse-button").click(function() {
        $(this).find("i").toggleClass('fa-plus fa-minus');
    });
</script>
