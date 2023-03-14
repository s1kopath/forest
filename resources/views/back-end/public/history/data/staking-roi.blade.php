<div class="table-responsive d-none d-lg-block">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Stake Amount</th>
                <th>Duration</th>
                <th>Date/Time</th>
                <th>Amount</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>${{ $data->stake_amount }}</td>
                    <td>{{ $data->stake_duration }} Months</td>
                    <td>{{ $data->created_at }}</td>
                    <td>${{ $data->amount }}</td>
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
                            {{ $key + 1 }}
                        </span>
                    </td>
                    <td>
                        <h4 class="font-weight-bold">${{ $data->stake_amount }} ({{ $data->stake_duration }} Months)</h4>
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
            @endforeach
        </tbody>
    </table>
</div>

<div class="col-md-12 mb-2">
    {{ $transactions->links() }}
</div>
