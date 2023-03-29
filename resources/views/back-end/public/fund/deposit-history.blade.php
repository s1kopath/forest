<div class="table-responsive d-none d-lg-block">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Coin Type</th>
                <th>Network Type</th>
                <th>Deposited On</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deposits as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>${{ $data->amount }}</td>
                    <td>{{ $data->currency }}</td>
                    <td>{{ $data->coin_type }}</td>
                    <td>{{ $data->network_type }}</td>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-block d-lg-none">
    <table class="table">
        <tbody>
            @foreach ($deposits as $key => $data)
                <tr data-toggle="collapse" data-target="#collapse{{ $data->id }}" aria-expanded="false"
                    aria-controls="collapse{{ $data->id }}">
                    <td>
                        <i class="fas fa-circle mt-3" style="color: #0548ac;"></i>
                    </td>
                    <td>
                        <h4 class="font-weight-bold">{{ $data->coin_type }}</h4>
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
                                <div class="col-4">Network Type</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-6 text-right">
                                    @php
                                        if (strlen($data->network_type) > 18) {
                                            $str = str_split($data->network_type, 18);
                                            echo $str[0] . '<br>' . $str[1];
                                        } else {
                                            echo $data->network_type;
                                        }
                                    @endphp
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">Currency</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-6 text-right">{{ $data->currency }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Deposited On</div>
                                <div class="col-2 text-center">•</div>
                                <div class="col-6 text-right">{{ $data->date_time }}</div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="col-md-12 mb-2">
    {{ $deposits->links() }}
</div>
