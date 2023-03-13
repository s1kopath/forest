<div class="table-responsive d-none d-lg-block">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Amount</th>
                <th>Percentage</th>
                <th>Duration</th>
                <th>Per Month</th>
                <th>Completed</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Next Payout</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stakes as $key => $stake)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $stake->amount }}$</td>
                    <td>{{ $stake->percentage }}%</td>
                    <td>{{ $stake->duration }} Months</td>
                    <td>{{ $stake->amount_per_month }}$</td>
                    <td>{{ $stake->completed }} Months</td>
                    <td>{{ $stake->start_date }}</td>
                    <td>{{ $stake->end_date }}</td>
                    <td>{{ $stake->next_payout }}</td>
                    <td>
                        @if ($stake->status == 2)
                            <span class="text-info">
                              Completed
                            </span>
                        @elseif ($stake->status == 1)
                            <span class="text-success">
                                Success
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
            @foreach ($stakes as $key => $stake)
                <tr data-toggle="collapse" data-target="#collapse{{ $stake->id }}" aria-expanded="false"
                    aria-controls="collapse{{ $stake->id }}">
                    <td>
                        <span class="font-weight-bold rounded text-white py-1 px-2" style="background-color: #0548ac;">
                            {{ $key + 1 }}
                        </span>
                    </td>
                    <td>
                        <h4 class="font-weight-bold">${{ $stake->amount }} ({{ $stake->duration }} Months)</h4>
                        <h6 class="font-weight-bold">{{ $stake->created_at }}</h6>
                    </td>
                    <td class="text-right">
                        <h4 class="font-weight-bold">
                            ${{ $stake->amount_per_month }}
                        </h4>
                        @if ($stake->status == 2)
                            <small class="text-info font-weight-bold">
                                •&nbsp&nbsp&nbsp Completed
                            </small>
                        @elseif ($stake->status == 1)
                            <small class="text-success font-weight-bold">
                                •&nbsp&nbsp&nbsp Success
                            </small>
                        @else
                            <small class="text-warning font-weight-bold">
                                •&nbsp&nbsp&nbsp Pending
                            </small>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td colspan="6" class="p-0 border-0">
                        <div class="collapse px-4 pb-3" id="collapse{{ $stake->id }}">
                            demo
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="col-md-12 mb-2">
    {{ $stakes->links() }}
</div>
