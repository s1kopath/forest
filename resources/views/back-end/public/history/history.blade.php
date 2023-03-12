@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <style>
        .custom-btn {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #133445;
            color: white;
            min-width: 130px;
        }

        .custom-btn-active {
            background-color: #1761bf;
        }
    </style>
@endpush

@section('page-title', 'History')

@section('page-content')
    <div class="d-flex overflow-auto pb-3" id="shihab-btn-mbl-scroll">
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active1" onclick="msPosition(this)">
            Deposit
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active2" onclick="msPosition(this)">
            Withdraw
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active3" onclick="msPosition(this)">
            Invitation Gift
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active4" onclick="msPosition(this)">
            Stacking ROI
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active5" onclick="msPosition(this)">
            IB Royality
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active6" onclick="msPosition(this)">
            Rewards
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active7" onclick="msPosition(this)">
            Transaction
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active8" onclick="msPosition(this)">
            Contest
        </button>
    </div>

    <div class="card">
        <div class="card-block">
            <div class="d-flex justify-content-between p-2">
                <h3 class="font-weight-bold">Stacking ROI History</h3>
                <div>
                    <i class="fas fa-filter"></i>
                </div>
            </div>
            <div class="table-responsive">
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
                                <td>{{ $stake->status ? ($stake->status == 2 ? 'Completed' : 'Active') : 'Pending' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-md-12">
                    {{ $stakes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function msPosition(e) {
            const rect = e.getBoundingClientRect();
            const position = rect.left + window.scrollX;
            // console.log(rect);
            localStorage.setItem('active_item', position);
        }

        $(document).ready(function() {
            let selector = document.getElementById('shihab-btn-mbl-scroll');
            selector.scrollLeft = localStorage.getItem('active_item');

            // console.log(localStorage.getItem('active_item'), 'shihab');
        });
    </script>
@endpush
