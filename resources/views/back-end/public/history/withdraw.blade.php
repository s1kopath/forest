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
            min-width: 130px;
        }

        .hiddenRow {
            padding: 0 !important;
        }

        ul li {
            font-size: 16px;
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
                <h3 class="font-weight-bold">Withdrawal History</h3>
                <div>
                    <i class="fas fa-filter"></i>
                </div>
            </div>
            <div class="table-responsive mt-4 d-block d-lg-none">
                <table class="table">
                    <tbody>
                        <tr data-toggle="collapse" data-target="#collapseExample1" class="accordion-toggle">
                            <td>
                                <span class="font-weight-bold text-white py-1 px-2" style="background-color: #0548ac;">
                                    +
                                </span>
                            </td>
                            <td>
                                <h4 class="font-weight-bold">Bank</h4>
                                <h6>2023-01-11 14:12:09</h6>
                            </td>
                            <td class="text-right">
                                <h4 class="font-weight-bold">$100</h4>
                                <h6>. pending</h6>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="hiddenRow">
                                <div id="collapseExample1" class="accordian-body collapse ml-5 pl-5">
                                    <ul>
                                        <li class="mb-2">Withdrawal Fee :</li>
                                        <li class="mb-2">Net Amount :</li>
                                        <li class="mb-2">Wallet Address :</li>
                                        <li class="mb-2">Transaction Hash :</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr data-toggle="collapse" data-target="#collapseExample2" class="accordion-toggle">
                            <td>
                                <span class="font-weight-bold text-white py-1 px-2" style="background-color: #0548ac;">
                                    +
                                </span>
                            </td>
                            <td>
                                <h4 class="font-weight-bold">Visa</h4>
                                <h6>2023-01-01 12:12:09</h6>
                            </td>
                            <td class="text-right">
                                <h4 class="font-weight-bold">$100</h4>
                                <h6 class="text-warning">. processing</h6>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="hiddenRow">
                                <div id="collapseExample2" class="accordian-body collapse ml-5 pl-5">
                                    <ul>
                                        <li class="mb-2">Withdrawal Fee :</li>
                                        <li class="mb-2">Net Amount :</li>
                                        <li class="mb-2">Wallet Address :</li>
                                        <li class="mb-2">Transaction Hash :</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr data-toggle="collapse" data-target="#collapseExample3" class="accordion-toggle">
                            <td>
                                <span class="font-weight-bold text-white py-1 px-2" style="background-color: #0548ac;">
                                    +
                                </span>
                            </td>
                            <td>
                                <h4 class="font-weight-bold">Master</h4>
                                <h6>2023-02-11 18:12:39</h6>
                            </td>
                            <td class="text-right">
                                <h4 class="font-weight-bold">$100</h4>
                                <h6 class="text-danger">. cancelled</h6>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="hiddenRow">
                                <div id="collapseExample3" class="accordian-body collapse ml-5 pl-5">
                                    <ul>
                                        <li class="mb-2">Withdrawal Fee :</li>
                                        <li class="mb-2">Net Amount :</li>
                                        <li class="mb-2">Wallet Address :</li>
                                        <li class="mb-2">Transaction Hash :</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr data-toggle="collapse" data-target="#collapseExample4" class="accordion-toggle">
                            <td>
                                <span class="font-weight-bold text-white py-1 px-2" style="background-color: #0548ac;"> +
                                </span>
                            </td>
                            <td>
                                <h4 class="font-weight-bold">Crypto</h4>
                                <h6>2023-01-11 14:12:09</h6>
                            </td>
                            <td class="text-right">
                                <h4 class="font-weight-bold">$100</h4>
                                <h6 class="text-success">. success</h6>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="6">
                                <div id="collapseExample4" class="accordian-body collapse ml-5 pl-5">
                                    <ul>
                                        <li class="mb-2">Network : USDT, TRC 20</li>
                                        <li class="mb-2">Withdrawal Fee :</li>
                                        <li class="mb-2">Net Amount :</li>
                                        <li class="mb-2">Wallet Address :</li>
                                        <li class="mb-2">Transaction Hash :</li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive mt-4 d-none d-lg-block">
                <table class="table table-framed">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Network</th>
                            <th>Withdrawal Fee</th>
                            <th>Net Amount</th>
                            <th>Wallet Address</th>
                            <th>Transaction Hash</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Master</td>
                            <td>2023-01-11<br>14:12:09</td>
                            <td>$100</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>. pending</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Visa</td>
                            <td>2023-01-01<br>12:12:09</td>
                            <td>$100</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-warning">. processing</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bank</td>
                            <td>2023-02-11<br>18:12:39</td>
                            <td>$100</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-danger">. cancelled</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>USDT</td>
                            <td>2023-01-11<br>14:12:09</td>
                            <td>$100</td>
                            <td>USDT, TRC 20</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
