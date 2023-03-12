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
            color: white;
        }
    </style>
@endpush

@section('page-title', 'History')

@section('page-content')
    <div class="d-flex overflow-auto pb-3" id="shihab-btn-mbl-scroll">
        <a href="{{ route('deposit_history') }}" class="btn custom-btn rounded-pill mx-1" id="active1"
            onclick="msPosition(this)">
            Deposit
        </a>
        <a href="{{ route('withdrawal_history') }}" class="btn custom-btn rounded-pill mx-1" id="active2"
            onclick="msPosition(this)">
            Withdraw
        </a>
        <a href="{{ route('invitation_gift_history') }}" class="btn custom-btn rounded-pill mx-1" id="active3"
            onclick="msPosition(this)">
            Invitation Gift
        </a>
        <a href="{{ route('staking_roi_history') }}" class="btn custom-btn rounded-pill mx-1" id="active4"
            onclick="msPosition(this)">
            Stacking ROI
        </a>
        <a href="{{ route('ib_royality_history') }}" class="btn custom-btn rounded-pill mx-1" id="active5"
            onclick="msPosition(this)">
            IB Royality
        </a>
        <a href="{{ route('reward_history') }}" class="btn custom-btn rounded-pill mx-1" id="active6"
            onclick="msPosition(this)">
            Rewards
        </a>
        <a href="{{ route('transaction_history') }}" class="btn custom-btn rounded-pill mx-1" id="active7"
            onclick="msPosition(this)">
            Transaction
        </a>
        <a href="{{ route('contest_history') }}" class="btn custom-btn rounded-pill mx-1" id="active8"
            onclick="msPosition(this)">
            Contest
        </a>
    </div>

    <div class="card">
        <div class="card-block">
            <div class="d-flex justify-content-between p-2">
                <h3 class="font-weight-bold">Contest History</h3>
                <div>
                    <i class="fas fa-filter"></i>
                </div>
            </div>
            <div class="table-responsive mt-4 d-block d-lg-none">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <span class="font-weight-bold text-white py-1 px-2" style="background-color: #0548ac;">
                                    1
                                </span>
                            </td>
                            <td>
                                <h4 class="font-weight-bold">January</h4>
                                <h6>2023-01-11 14:12:09</h6>
                            </td>
                            <td class="text-right">
                                <h4 class="font-weight-bold">$20</h4>
                                <h6 class="text-success">. success</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="font-weight-bold text-white py-1 px-2" style="background-color: #0548ac;">
                                    2
                                </span>
                            </td>
                            <td>
                                <h4 class="font-weight-bold">February</h4>
                                <h6>2023-01-01 12:12:09</h6>
                            </td>
                            <td class="text-right">
                                <h4 class="font-weight-bold">$40</h4>
                                <h6 class="text-success">. success</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="ml-2">
                    <h4 class="font-weight-bold">Total : $60</h4>
                </div>
            </div>

            <div class="table-responsive mt-4 d-none d-lg-block">
                <table class="table table-framed">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Month</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>January</td>
                            <td>2023-01-11</td>
                            <td>14:12:09</td>
                            <td>$20</td>
                            <td class="text-success">. success</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>February</td>
                            <td>2023-01-01</td>
                            <td>12:12:09</td>
                            <td>$40</td>
                            <td class="text-success">. success</td>
                        </tr>
                    </tbody>
                </table>
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