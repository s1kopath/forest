@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Staking')

@section('page-content')
    <div class="card">
        <div class="card-block">
            <div class="col-lg-12 col-xl-12">
                <h3 class="text-primary font-weight-bold text-center mt-2">
                    <span>My Wallet: $ {{ $wallet->main_amount }} ({{ $wallet->bonus_amount }})</span>
                </h3>
                <form action="{{ route('stake') }}" method="post" role="form" id="stakeForm">
                    @csrf
                    <div class="text-center row">
                        @foreach ($staking as $stake)
                            <div class="col-md-4">
                                <div type="button" class="rounded-pill bg-secondary m-1">
                                    <input class="form-check-input mt-4" type="radio" name="staking_package"
                                        id="exampleRadios1" value="{{ $stake->id }}" required>
                                    <label class="form-check-label" for="durationRadio">
                                        <div class="p-2">
                                            <h5 class="text-white">
                                                <span id="stake_duration_{{ $stake->id }}">
                                                    {{ $stake->duration }}
                                                </span>
                                                Months
                                            </h5>
                                            <span class="text-dark">
                                                <span id="stake_percentage_{{ $stake->id }}">
                                                    {{ $stake->percentage }}
                                                </span>
                                                %/month
                                            </span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-md-8 m-3">
                            <label class="stakingAmount">
                                Staking Amount
                            </label>
                            <div class="input-group">
                                <input type="number" step="0.01" min="50" name="amount"
                                    class="form-control rounded-pill" placeholder="$ 5000" required>
                                <span class="input-group-append" style="z-index: 100; margin-left: -2em">
                                    <label class="input-group-text h5 rounded-pill px-4">Max</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="border-checkbox-group border-checkbox-group-primary">
                            <input class="border-checkbox" type="checkbox" required>
                            <label class="border-checkbox-label" for="checkbox1">
                                I have read and agree to the company staking terms & agreement
                            </label>
                        </div>
                    </div>
                    <div class="text-center m-t-20 m-b-20">
                        <button type="submit" class="btn btn-primary rounded-pill">
                            Stake Now
                        </button>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="stakeModal" tabindex="-1" role="dialog" aria-labelledby="stakeModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="stakeModalLabel">Summary</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{-- <h3 class="text-center">
                                        <span>Summary</span>
                                    </h3> --}}
                                    <div class="container my-3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="duration">♦ Duration</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <span id="duration_value">: 0 Months</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="monthlyRoi">♦ Monthly ROI</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <span id="percent_value">: 0.0% (max)</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="stakeDate">♦ Stake Date</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <span id="start_date">: N/A </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="endDate">♦ End Date</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <span id="end_date">: N/A </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <h3>Auto Staking</h3>
                                        <div class="row">
                                            <p class="col-md-10">
                                                To automatically retake an expired package to it's pravious stake
                                                immediately, enable
                                                auto-staking.
                                            </p>
                                            <div class="col-md-2">
                                                <input type="checkbox" class="js-default" checked=""
                                                    data-switchery="true" style="display: none;">
                                                <span class="switchery switchery-default"
                                                    style="background-color: rgb(214, 214, 214); border-color: rgb(214, 214, 214); box-shadow: rgb(214, 214, 214) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;">
                                                    <small
                                                        style="left: 20px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s; background-color: rgb(255, 255, 255);"></small>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center m-t-20 m-b-20">
                                        <button type="button" class="btn btn-primary rounded-pill"
                                            onclick="confirmSubmitForm()">
                                            Confirm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @if ($user->total_investment > 0)
                <div id="table_data">

                </div>
            @endif
        </div>
    </div>
@endsection

@push('js')
    <script>
        var is_submit = 0;

        $('#stakeForm').submit(function(e) {
            if (is_submit == 0) {
                e.preventDefault();
            }

            var _radioValue = $("input[name='staking_package']:checked").val();
            if (_radioValue) {
                var _duration = $('#stake_duration_' + _radioValue).html().trim();
                var _percentage = $('#stake_percentage_' + _radioValue).html().trim();

                $('#duration_value').html(": " + _duration + " Months");
                $('#percent_value').html(": " + _percentage + "%");

                const monthNames = ["January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                ];

                var _day = new Date();

                $('#start_date').html(": " + _day.getDate() + " " + monthNames[_day.getMonth()] + ", " + _day
                    .getFullYear());

                var _end_day = addMonths(_day, _duration).toString();
                var _end = new Date(_end_day);


                $('#end_date').html(": " + _end.getDate() + " " + monthNames[_end.getMonth()] + ", " + _end
                    .getFullYear());
            }

            $('#stakeModal').modal('show');

        });

        function confirmSubmitForm() {
            is_submit = 1;
            $('#stakeForm').submit();
        }

        function addMonths(date, months) {
            var d = date.getDate();
            date.setMonth(date.getMonth() + +months);
            if (date.getDate() != d) {
                date.setDate(0);
            }
            return date;
        }
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
                url: "/user/profile/stake-history/fetch-data?page=" + page,
                success(response) {
                    $('#table_data').html(response);
                }
            });
        }
    </script>
@endpush
