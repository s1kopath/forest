@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Add Contest</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('update_monthly_contest', $month->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">
                                Contest Name:
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Enter Contest Name..." value="{{ $month->name}}" name="name"
                                required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">Direct Amount:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" placeholder="Enter Direct Amount..."
                            value="{{ $month->direct_amount}}" name="direct_amount" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">Reward Amount:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" step="0.01" class="form-control" placeholder="Enter Direct Amount..."
                            value="{{ $month->reward_amount}}" name="reward_amount" required>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success btn-round waves-effect waves-light">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
@endpush

