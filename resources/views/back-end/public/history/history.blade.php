@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">History</h5>
        </div>
        <div class="card-block row justify-content-center">
            <div class="">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label font-weight-bold" for="exampleRadios1">
                        Deposit
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label font-weight-bold" for="exampleRadios2">
                        Withdraw 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label font-weight-bold" for="exampleRadios3">
                        Invitation Gift 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                    <label class="form-check-label font-weight-bold" for="exampleRadios4">
                        Stacking ROI 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5">
                    <label class="form-check-label font-weight-bold" for="exampleRadios5">
                        IB Royality 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6">
                    <label class="form-check-label font-weight-bold" for="exampleRadios6">
                        Rewards 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option7">
                    <label class="form-check-label font-weight-bold" for="exampleRadios7">
                    Transaction 
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option8">
                    <label class="form-check-label font-weight-bold" for="exampleRadios8">
                        Context 
                    </label>
                </div>
            </div>
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
@endpush
