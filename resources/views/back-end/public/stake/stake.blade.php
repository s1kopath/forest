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
                <style>
                    .s1kopath-form {
                        max-width: 250px;
                        padding: 20px;
                    }

                    .s1kopath-fieldset {
                        margin: 0 0 30px 0;
                        border-radius: 15px !important;
                        background: #fefdf8;
                    }

                    .s1kopath-legend {
                        background: #ffff;
                        padding: 4px 10px;
                        color: #053859;
                        margin: 0 auto;
                        display: block;
                        font-weight: bold;
                        font-size: 20px !important;
                    }

                    @media only screen and (max-width: 600px) {
                        .s1kopath-fieldset {
                            margin: 0 -40px 30px 20px;
                        }
                    }
                </style>
                <div class="d-lg-flex justify-content-center">
                    @foreach ($staking as $stake)
                        <form action="{{ route('stake') }}" method="post" class="s1kopath-form">
                            @csrf
                            <input type="hidden" name="staking_package" value="{{ $stake->id }}">
                            <fieldset class="form-group p-2 rounded ms-fieldset s1kopath-fieldset">
                                <legend class="w-auto px-2 ms-legend s1kopath-legend">{{ $stake->duration }} MONTHS</legend>

                                <fieldset class="form-group p-2 rounded ms-fieldset">
                                    <legend class="w-auto px-2 ms-legend">Staking Amount</legend>
                                    <input class="form-control ms-input" type="number" name="amount" placeholder="0"
                                        required>
                                </fieldset>

                                {{-- <div class="text-center py-4">
                                    <span>My Wallet: $ {{ $wallet->main_amount }} ({{ $wallet->bonus_amount }})</span>
                                </div> --}}
                                <div class="py-4">
                                    <li>
                                        Monthly ROI: {{ $stake->percentage }}-{{ $stake->percentage + 1 }}%
                                    </li>
                                </div>
                                <div>
                                    <i class="fas fa-check-circle text-success"></i>
                                    I have read and agree staking terms & agreement.
                                </div>
                                <div class="text-center m-t-20 m-b-20">
                                    <button type="submit" class="uk-button uk-button-primary">
                                        STAKE NOW
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    @endforeach
                </div>
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

        $('form').submit(function(e) {
            e.preventDefault();
            var amount = $(this).find("[name=amount]").val();
            if (amount) {
                Swal.fire({
                    title: 'Are you sure ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'CONFIRM',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).unbind('submit').submit();
                    }
                })
            }

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
                url: "/user/profile/stake-history/fetch-data?page=" + page,
                success(response) {
                    $('#table_data').html(response);
                }
            });
        }
    </script>
@endpush
