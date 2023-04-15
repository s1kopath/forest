@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Add Marquee</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('create_dashboard_notice') }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">
                                Body:
                            </label>
                        </div>
                        <div class="col-md-6">
                            <textarea class="form-control" name="body" cols="30" rows="10">{{ $marquee->body ?? '' }}</textarea>
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
                                <option value="1" {{ $marquee->status && $marquee->status == 1 ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ $marquee->status && $marquee->status == 0 ? 'selected' : '' }}>
                                    Inactive
                                </option>
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
