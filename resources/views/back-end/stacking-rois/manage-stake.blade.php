@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Staking</h5>
        </div>

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <ul class="d-flex justify-content-center">
                    <li class="page-item {{ !isset($_GET['duration']) ? 'active' : '' }}" aria-current="page">
                        <span class="page-link">
                            <a href="{{ route('manage_staking') }}"
                                class="{{ !isset($_GET['duration']) ? 'text-white' : '' }}">
                                All
                            </a>
                        </span>
                    </li>
                    @foreach ($stakingRoi as $stkRoi)
                        <li class="page-item {{ isset($_GET['duration']) && $_GET['duration'] == $stkRoi->duration ? 'active' : '' }}"
                            aria-current="page">
                            <span class="page-link">
                                <a href="{{ route('manage_staking') }}?duration={{ $stkRoi->duration }}"
                                    class="{{ isset($_GET['duration']) && $_GET['duration'] == $stkRoi->duration ? 'text-white' : '' }}">
                                    {{ $stkRoi->duration }} Month
                                </a>
                            </span>
                        </li>
                    @endforeach
                </ul>

                <div class="ml-2">
                    <form class="form-inline" action="{{ route('manage_staking') }}" method="get">
                        <div class="form-group mb-2">
                            <label for="staticEmail2" class="sr-only">From:</label>
                            <input type="date" class="form-control" name="from" required
                                value="{{ isset($_GET['from']) ? $_GET['from'] : '' }}">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only">To:</label>
                            <input type="date" class="form-control" name="to" required
                                value="{{ isset($_GET['to']) ? $_GET['to'] : '' }}">
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dt-responsive table-responsive">
                <div id="order-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 mt-2">
                            <table id="order-table" class="table table-striped table-bordered nowrap dataTable"
                                role="grid" aria-describedby="order-table_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 267.578px;">
                                            #Sl
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Transaction ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            User
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Amount
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Percentage
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Duration
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Per Month
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Completed
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Start Date
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            End Date
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Next Payout
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Total Given
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stakes as $key => $stake)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-outline-success rounded">
                                                    #{{ $stake->trx_id }}
                                                </a>
                                            </td>
                                            <td>
                                                {{ $stake->user->name }}
                                                ({{ $stake->user->username }})
                                                <br>
                                                {{ $stake->user->email }}
                                            </td>
                                            <td>${{ $stake->amount }}</td>
                                            <td>{{ $stake->percentage }}%</td>
                                            <td>{{ $stake->duration }} Months</td>
                                            <td>${{ $stake->amount_per_month }}</td>
                                            <td>{{ $stake->completed }} Months</td>
                                            <td>{{ $stake->start_date }}</td>
                                            <td>{{ $stake->end_date }}</td>
                                            <td>{{ $stake->next_payout }}</td>
                                            <td>${{ $stake->completed * $stake->amount_per_month }}</td>
                                            <td>
                                                @if ($stake->status == 2)
                                                    <span class="text-info">
                                                        Completed
                                                    </span>
                                                @elseif ($stake->status == 1)
                                                    <span class="text-success">
                                                        Active
                                                    </span>
                                                @else
                                                    <span class="text-warning">
                                                        Pending
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-success btn-round waves-effect waves-light dropdown-toggle"
                                                        href="#" role="button" id="dropdownMenuLink"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Action
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="#">Suspend</a>
                                                        <a class="dropdown-item" href="#">Refund</a>
                                                        <a class="dropdown-item" href="#">Hold</a>
                                                        <a class="dropdown-item" href="#">Convert</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                {{ $stakes->links('pagination::bootstrap-5') }}
            </div>

        </div>
    </div>
@endsection

@push('js')
@endpush
