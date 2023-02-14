@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@section('page-content')
    <div class="card">
        <div class="card-header bg bg-info">
            <h2 class="text-center">Update IB</h5>
        </div>
        <div class="card-block">
            <form action="{{ route('update_ib', $ib->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">IB Name:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Enter Ib Name..." name="ib_name"
                                value={{ $ib->ib_name }} required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">Self Amount:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Enter Self Emount..." name="self_amount"
                                value={{ $ib->self_amount }} required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">Direct Amount:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Enter Direct Emount..."
                                name="direct_amount" value={{ $ib->direct_amount }} required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">Team Amount:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" placeholder="Enter Team Emount..." name="team_amount"
                                value={{ $ib->team_amount }} required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row align-items-center">
                        <div class="col-md-2 offset-md-2">
                            <label for="" class="form-label mb-0 font-weight-bold">Reward:</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Enter Reward..."
                                value="{{ $ib->reward }}" name="reward">
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success btn-round waves-effect waves-light">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
@endpush

