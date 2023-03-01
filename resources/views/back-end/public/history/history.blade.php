@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .btn:hover {
            background: linear-gradient(#152B40, #152B40);
        }

        .btn:focus {
            background: linear-gradient(#152B40, #152B40);
        }

        .button-container button {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
        }

        @media only screen and (max-width: 768px) {
            .shihab-btn-mbl-scroll {
                overflow-x: scroll;
                width: 100%;
                display: flex;
                position: relative;
            }

            .shihab-btn-mbl-scroll button {
                display: inline-block;
                position: relative;
                padding: 6px 15px !important;
                white-space: pre;
            }
        }
    </style>
@endpush

@section('page-title', 'History')

@section('page-content')
    <div class="card">
        <div class="card-block shihab-btn-mbl-scroll">
            <button type="button" class="btn btn-success mx-1">Deposit</button>
            <button type="button" class="btn btn-success mx-1">Withdraw</button>
            <button type="button" class="btn btn-success mx-1">Invitation Gift</button>
            <button type="button" class="btn btn-success mx-1">Stacking ROI</button>
            <button type="button" class="btn btn-success mx-1">IB Royality</button>
            <button type="button" class="btn btn-success mx-1">Rewards</button>
            <button type="button" class="btn btn-success mx-1">Transaction</button>
            <button type="button" class="btn btn-success mx-1">Contest</button>
        </div>
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-framed">
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
                                <td>{{ $stake->status ? ($stake->status == 2 ? 'Completed' : 'Active') : 'Pending' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function focusMe(button) {
            document.getElementsByClassName("button-selected")[0].className = "";
            button.className = "button-selected";
        }
    </script>
@endpush
