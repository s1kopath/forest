@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end/bower_components/switchery/css/switchery.min.css') }}">
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Manage Banners</h5>
        </div>
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('add_banner') }}" class="btn btn-success btn-round waves-effect waves-light">
                    Add New
                </a>
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
                                            style="width: 10px;">
                                            #Sl
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="order-table" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 450px;">
                                            Image
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
                                    @foreach ($banners as $data)
                                        <tr role="row" class="even">
                                            <td>{{ $data->sl }}</td>
                                            <td>
                                                <img class="img-fluid" src="{{ $data->image }}" alt="forest"
                                                    width="500">
                                            </td>
                                            <td>

                                                <input type="checkbox" class="js-danger" checked />
                                                @if ($data->status == 1)
                                                    <span class="badge bg-primary">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-primary" href="{{ route('edit_banner', $data->id) }}">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-warning"
                                                        href="{{ route('delete_banner', $data->id) }}">
                                                        Delete
                                                    </a>
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
                                        class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="order-table" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="order-table"
                                        data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="order-table_next"><a href="#"
                                        aria-controls="order-table" data-dt-idx="3" tabindex="0"
                                        class="page-link">Next</a></li>
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
    <script type="text/javascript" src="{{ asset('back-end/bower_components/switchery/js/switchery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('back-end/assets/pages/advance-elements/swithces.js') }}"></script>
@endpush
