@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush
<style>
    div.card {
        color: #000;
        border-radius: 10px
    }
    div .card-img {
        margin-top: -50px;
      }

      .col-md-3 {
        margin-top: 30px;
      }
    div .reward {
        transform: rotate(-20deg);
    }


</style>
@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Ib & Reward</h2>
        </div>
        <div class="card-block bg-info">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img" src="{{ asset('img-ib/img1.png') }}" height="100px" width="100px">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-2">IB</h5>
                            <p class="mb-3">Self - $ 50<br>
                            Direct - $ 300<br>
                            Team - $ 1000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img" src="{{ asset('img-ib/img2.png') }}" height="100px" width="100px">

                        <div class="card-body text-center">
                          <h5 class="card-title mb-2">Pro-IB</h5>
                          <p class="mb-3">Self - $ 100<br>
                            Direct - $ 1000<br>
                            Team - $ 5000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img" src="{{ asset('img-ib/img1.png') }}" height="100px" width="100px">

                        <div class="card-body text-center">
                          <h5 class="card-title mb-2">Master IB</h5>
                          <p class="mb-3">Self - $ 500<br>
                            Direct - $ 5000<br>
                            Team - $ 10000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img" src="{{ asset('img-ib/img2.png') }}" height="100px" width="100px">

                        <div class="card-body text-center">
                          <h5 class="card-title mb-2">Corporate IB</h5>
                          <p class="mb-3">Self - $ 1000<br>
                            Direct - $ 10000<br>
                            Team - $ 50000</p>
                            <h5>Reward - $ ?</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" >
                    <img src="{{ asset('img-ib/reward.png') }}" height="100px" width="100px" class="reward">
                    <button type="button" class="btn btn-light ">
                        Instant Reward
                    </button>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
