@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Add Gift</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('add_gift') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">
                                Gift Type:
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Enter Gift Type..." name="type"
                                required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">Percentage:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" placeholder="Enter Percentage..."
                                name="percentage" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">
                                Status:
                            </label>
                        </div>
                        <div class="col-md-6">
                            <select name="status" class="form-control form-select" required>
                                <option value="">Choose status...</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success btn-round waves-effect waves-light">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
@endpush

