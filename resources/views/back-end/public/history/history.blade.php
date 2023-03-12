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
            IB Royalty
        </button>
        <button type="button" class="btn custom-btn rounded-pill mx-1" id="active6" onclick="msPosition(this)">
            Rewards
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
            <div id="table_data">

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
    <script>
        $(document).ready(function() {
            fetch_data(1);
        });

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: "/user/profile/history/fetch_data?page=" + page,
                success(response) {
                    $('#table_data').html(response);
                }
            });
        }
    </script>
@endpush
