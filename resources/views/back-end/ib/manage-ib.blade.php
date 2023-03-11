@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">IB List</h5>
        </div>
        <div class="card-body">
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
                                            style="width: 267.578px;">#Sl
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 267.578px;">Ib Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Self Amount
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Direct Amount
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Team Amount
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Reward
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ib as $ibs)
                                        <tr role="row" class="even">
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $ibs->ib_name }}</td>
                                            <td>{{ $ibs->self_amount }}</td>
                                            <td>{{ $ibs->direct_amount }}</td>
                                            <td>{{ $ibs->team_amount }}</td>
                                            <td>{{ $ibs->reward }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-warning"
                                                        href="{{ route('delete_ib', $ibs->id) }}">Delete</a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary"
                                                        href="{{ route('update_ib', $ibs->id) }}">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <div class="dataTables_info" id="order-table_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 20 entries</div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="order-table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="order-table_previous">
                                            <a href="#" aria-controls="order-table" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="order-table" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="order-table" data-dt-idx="2" tabindex="0"
                                                class="page-link">2</a></li>
                                        <li class="paginate_button page-item next" id="order-table_next"><a
                                                href="#" aria-controls="order-table" data-dt-idx="3"
                                                tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
@endpush
