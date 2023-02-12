@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="pcoded-content">
        <div class="card">
            <div class="card-block">
                <div class="card-header bg bg-info">
                    <h2 class="text-center">Staking List</h5>
                </div>
                <div class="dt-responsive table-responsive">
                    <div id="order-table_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        {{-- <div class="row">
                            <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                <div class="dataTables_length" id="order-table_length"><label>Show <select
                                            name="order-table_length" aria-controls="order-table"
                                            class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div id="order-table_filter" class="dataTables_filter"><label>Search:<input type="search"
                                            class="form-control input-sm" placeholder=""
                                            aria-controls="order-table"></label></div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 mt-4">
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
                                            style="width: 267.578px;">Amount
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Percentage
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Duration
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 392.922px;">Action
                                        </th>                       
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stacking as $stack)        
                                            <tr role="row" class="even">
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>{{ $stack->amount }}</td>
                                                <td>{{ $stack->percentage }}</td>
                                                <td>{{ $stack->duration }}</td>                                        
                                                <td>
                                                    @if ($stack->status == 1)
                                                        <span class="badge bg-primary">Active</span>
                                                    @else
                                                        <span class="badge bg-danger">Inactive</span>
                                                    @endif
                                                </td>                                        
                                                <td> 
                                                    <div class="btn-group">
                                                        <a class="btn btn-warning"
                                                            href="#">Delete</a>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary"
                                                            href="{{ route('update_stacking_rois', $stack->id) }}">Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script></script>
@endpush
