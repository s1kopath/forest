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
            color: white !important;
        }
    </style>
@endpush

@section('page-title', 'History')

@section('page-content')
    <div class="d-flex overflow-auto pb-3" id="shihab-btn-mbl-scroll">
        <button type="button" class="btn custom-btn custom-btn-active rounded-pill mx-1" onclick="fetch_data(1, 'Deposit')">
            Deposit
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" onclick="fetch_data(1, 'Withdraw')">
            Withdraw
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" onclick="fetch_data(1, 'Invitation Gift')">
            Invitation Gift
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" onclick="fetch_data(1, 'Staking ROI')">
            Staking ROI
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" onclick="fetch_data(1, 'IB Royalty')">
            IB Royalty
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" onclick="fetch_data(1, 'Rewards')">
            Rewards
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" onclick="fetch_data(1, 'Contest')">
            Contest
        </button>
    </div>

    <div class="card">
        <div class="card-block">
            <div class="d-flex justify-content-between p-2">
                <h3 class="font-weight-bold" id="section-title">Deposit History</h3>
                <div>
                    <i class="fas fa-filter"></i>
                </div>
            </div>
            <div id="table_data">

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        let _purpose = 'Deposit';
        
        $(document).ready(function() {
            fetch_data(1, _purpose);
        });

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page, _purpose);
        });

        function fetch_data(page, purpose) {
            if (page == 1) {
                _purpose = purpose;
                $('#section-title').html(purpose + ' History');
            }

            $.ajax({
                url: "/user/profile/history/fetch_data?purpose=" + purpose + "&page=" + page,
                success(response) {
                    // console.log(response);
                    $('#table_data').html(response);
                }
            });
        }
    </script>
    <script>
        $('.custom-btn').click(function() {
            $('.custom-btn').removeClass('custom-btn-active');
            $(this).addClass('custom-btn-active');
        });
    </script>
@endpush
