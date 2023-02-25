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
    </style>
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">History</h5>
        </div>
        <div class="card-block mt-4">
            <button type="button" id="myDIV"class="btn btn-success">Deposit</button>
            <button type="button" class="btn btn-success">Withdraw</button>
            <button type="button" class="btn btn-success">Invitation Gift</button>
            <button type="button" class="btn btn-success">Stacking ROI</button>
            <button type="button" class="btn btn-success">IB Royality</button>
            <button type="button" class="btn btn-success">Rewards</button>
            <button type="button" class="btn btn-success">Transaction</button>
            <button type="button" class="btn btn-success">Contest</button>
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
        // var header = document.getElementById("myDIV");
        // var btns = header.getElementsByClassName("hover-select");
        // for (var i = 0; i < btns.length; i++) {
        //     btns[i].addEventListener("click", function() {
        //         var current = document.getElementsByClassName("hover-select-active");
        //         if (current.length > 0) {
        //             current[0].className = current[0].className.replace(" hover-select-active", "");
        //         }
        //         this.className += " hover-select-active";
        //     });
        // // }
        function focusMe(button) {
            document.getElementsByClassName("button-selected")[0].className = "";
            button.className = "button-selected";
        }
    </script>
@endpush
