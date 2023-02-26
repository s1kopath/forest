@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush
<style>
    div.card {
        color: #ffff;
        border-radius: 10px
    }
    div .card-img {
        margin-top: -50px;
      }

      .col-md-3 {
        margin-top: 50px;
      }



</style>
@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Become An IB</h2>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-6 col-md-3 grid-item">
                    <div class="card bg-info">
                        <img class="card-img" src="{{ asset('img-ib/img1.png') }}" height="100px" width="100px">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">IB</h5>
                            <h4>0%</h4>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                            </div>
                            <p class="mb-3">Self - $ 50<br>
                            Direct - $ 300<br>
                            Team - $ 1000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 grid-item">
                    <div class="card bg-info">
                        <img class="card-img" src="{{ asset('img-ib/img2.png') }}" height="100px" width="100px">

                        <div class="card-body text-center">
                          <h5 class="card-title mb-2">Pro-IB</h5>
                          <h4>25%</h4>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                            </div>
                          <p class="mb-3">Self - $ 100<br>
                            Direct - $ 1000<br>
                            Team - $ 5000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 grid-item">
                    <div class="card bg-info">
                        <img class="card-img" src="{{ asset('img-ib/img1.png') }}" height="100px" width="100px">

                        <div class="card-body text-center">
                          <h5 class="card-title mb-2">Master IB</h5>
                          <h4>40%</h4>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                            </div>
                          <p class="mb-3">Self - $ 500<br>
                            Direct - $ 5000<br>
                            Team - $ 10000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 grid-item">
                    <div class="card bg-info">
                        <img class="card-img" src="{{ asset('img-ib/img2.png') }}" height="100px" width="100px">

                        <div class="card-body text-center">
                          <h5 class="card-title mb-2">Corporate IB</h5>
                          <h4>75%</h4>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                            </div>
                          <p class="mb-3">Self - $ 1000<br>
                            Direct - $ 10000<br>
                            Team - $ 50000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-20">
                <button class="btn btn-primary rounded-pill">
                    APPLY
                </button>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
