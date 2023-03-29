<div class="table-responsive d-none d-lg-block">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Amount</th>
                <th>Charge</th>
                <th>Net Amount</th>
                <th>Withdraw On</th>
                <th>Payment Method</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($withdraws as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-block d-lg-none">
    <table class="table">
        <tbody>
            @foreach ($withdraws as $key => $data)
                <tr data-toggle="collapse" data-target="#collapse{{ $data->id }}" aria-expanded="false"
                    aria-controls="collapse{{ $data->id }}">
                    <td>
                        <i class="fas fa-circle mt-3" style="color: #0548ac;"></i>
                    </td>
                    <td>
                        <h4 class="font-weight-bold">{{ $data->payment_method }}</h4>
                        <h6 class="">{{ $data->date_time }}</h6>
                    </td>
                    <td class="text-right">
                        <h4 class="font-weight-bold">
                            ${{ $data->amount }}
                        </h4>
                        @if ($data->status == 2)
                            <small class="text-danger ">
                                •&nbsp&nbsp&nbsp Rejected
                            </small>
                        @elseif ($data->status == 1)
                            <small class="text-success ">
                                •&nbsp&nbsp&nbsp Completed
                            </small>
                        @else
                            <small class="text-warning ">
                                •&nbsp&nbsp&nbsp Pending
                            </small>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="6" class="p-0 border-0">
                        <div class="collapse pb-3" id="collapse{{ $data->id }}">
                            <div class="row">
                                <div class="col-4">Net Amount</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-6 text-right">${{ $data->net_amount }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Charge</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-6 text-right">${{ $data->charge }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Withdraw On</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-6 text-right">{{ $data->date_time }}</div>
                            </div>

                            @if ($data->payment_method == 'Visa')
                                <div class="row">
                                    <div class="col-4">Payment Method</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">Visa</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Card Holder</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->visa_details->card_holder_name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Card Number</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->visa_details->card_number }}</div>
                                </div>
                            @elseif ($data->payment_method == 'Bank')
                                <div class="row">
                                    <div class="col-4">Payment Method</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">Bank</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Bank Name</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->bank_name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Branch Name</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->branch_name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Account Name</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->account_name }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Account Number</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->account_number }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Country</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->country }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">state</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->state }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Swiftcode</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->swift_code }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Routing Number</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->bank_details->routing_number }}</div>
                                </div>
                            @elseif ($data->payment_method == 'Crypto')
                                <div class="row">
                                    <div class="col-4">Payment Method</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">Crypto</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Network</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->crypto_details->network }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-4">Wallet Address</div>
                                    <div class="col-2 text-center">•</div>
                                    <div class="col-6 text-right">{{ $data->crypto_details->wallet_address }}</div>
                                </div>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="col-md-12 mb-2">
    {{ $withdraws->links() }}
</div>
