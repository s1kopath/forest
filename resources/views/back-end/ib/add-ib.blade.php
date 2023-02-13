@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')
@section('page-content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.css"  referrerpolicy="no-referrer" />
    <div class="pcoded-content">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header bg bg-info">
                                <h2 class="text-center">Add IB</h5>
                            </div>
                            <div class="col-12 py-3">
                                @if (session()->has('message'))
                                    <div class="alert bg-info">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert bg-danger">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="card-block">
                                <form action="{{ route('add_ib') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 offset-md-2">
                                                <label for="" class="form-label mb-0 font-weight-bold">IB Name:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Enter Ib Name..." name="ib_name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 offset-md-2">
                                                <label for="" class="form-label mb-0 font-weight-bold">Self Amount:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Enter Self Emount..." name="self_amount" required>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 offset-md-2">
                                                <label for="" class="form-label mb-0 font-weight-bold">Direct Amount:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Enter Direct Emount..." name="direct_amount" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 offset-md-2">
                                                <label for="" class="form-label mb-0 font-weight-bold">Team Amount:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Enter Team Emount..." name="team_amount" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-md-2 offset-md-2">
                                                <label for="" class="form-label mb-0 font-weight-bold">Reward:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Enter Reward..." name="reward">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-success btn-round waves-effect waves-light">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"  referrerpolicy="no-referrer"></script>
<script>
   
</script>
@endsection
