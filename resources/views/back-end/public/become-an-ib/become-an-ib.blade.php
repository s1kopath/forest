@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-title', 'Become An IB')

@section('page-content')
    <div class="card">
        <div class="card-block" style="background-color: rgba(233, 233, 233, 0.678);">
            <div class="container">
                <div class="row mt-4">
                    <div class="col-12 col-lg-3 col-xl-3 col-md-6 grid-item mt-5 pt-3">
                        <div class="card" style="border-radius: 1.3rem; {{ $rank != 1 ? 'opacity:0.5' : '' }}">
                            <div class="d-flex justify-content-center" style="margin-top: -25%">
                                <img class="rounded-circle border" src="{{ asset('back-end/img/ib/1.jpg') }}" height="150px"
                                    width="150px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">IB</h5>
                                <h4>{{ $percentage['ib'] }}%</h4>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-secondary" role="progressbar"
                                        aria-valuenow="{{ $percentage['ib'] }}" aria-valuemin="0" aria-valuemax="100"
                                        style="width: {{ $percentage['ib'] }}%"></div>
                                </div>
                                <p class="mb-3">
                                    Self - $ {{ $ib_gain->self_amount }} / $ 50
                                    <br>
                                    Direct - $ {{ $ib_gain->direct_amount }} / $ 300
                                    <br>
                                    Team - $ {{ $ib_gain->team_amount }} / $ 1000
                                </p>
                                <h5>
                                    <a href="#">Rewards</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3 col-md-6 grid-item mt-5 pt-3">
                        <div class="card" style="border-radius: 1.3rem; {{ $rank != 2 ? 'opacity:0.5' : '' }}">
                            <div class="d-flex justify-content-center" style="margin-top: -25%">
                                <img class="rounded-circle border" src="{{ asset('back-end/img/ib/2.jpg') }}" height="150px"
                                    width="150px">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title mb-2">Pro-IB</h5>
                                <h4>{{ $percentage['pro-ib'] }}%</h4>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-secondary" role="progressbar"
                                        aria-valuenow="{{ $percentage['pro-ib'] }}" aria-valuemin="0" aria-valuemax="100"
                                        style="width: {{ $percentage['pro-ib'] }}%"></div>
                                </div>
                                <p class="mb-3">
                                    Self - $ {{ $ib_gain->self_amount }} / $ 100
                                    <br>
                                    Direct - $ {{ $ib_gain->direct_amount }} / $ 1000
                                    <br>
                                    Team - $ {{ $ib_gain->team_amount }} / $ 5000
                                </p>
                                <h5>
                                    <a href="#">Rewards</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3 col-md-6 grid-item mt-5 pt-3">
                        <div class="card" style="border-radius: 1.3rem; {{ $rank != 3 ? 'opacity:0.5' : '' }}">
                            <div class="d-flex justify-content-center" style="margin-top: -25%">
                                <img class="rounded-circle border" src="{{ asset('back-end/img/ib/3.jpg') }}"
                                    height="150px" width="150px">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title mb-2">Master IB</h5>
                                <h4>{{ $percentage['master-ib'] }}%</h4>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-secondary" role="progressbar"
                                        aria-valuenow="{{ $percentage['master-ib'] }}" aria-valuemin="0"
                                        aria-valuemax="100" style="width: {{ $percentage['master-ib'] }}%"></div>
                                </div>
                                <p class="mb-3">
                                    Self - $ {{ $ib_gain->self_amount }} / $ 500
                                    <br>
                                    Direct - $ {{ $ib_gain->direct_amount }} / $ 5000
                                    <br>
                                    Team - $ {{ $ib_gain->team_amount }} / $ 10000
                                </p>
                                <h5>
                                    <a href="#">Rewards</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3 col-md-6 grid-item mt-5 pt-3">
                        <div class="card" style="border-radius: 1.3rem; {{ $rank != 4 ? 'opacity:0.5' : '' }}">
                            <div class="d-flex justify-content-center" style="margin-top: -25%">
                                <img class="rounded-circle border" src="{{ asset('back-end/img/ib/4.jpg') }}"
                                    height="150px" width="150px">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title mb-2">Corporate IB</h5>
                                <h4>{{ $percentage['corporate-ib'] }}%</h4>
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-secondary" role="progressbar"
                                        aria-valuenow="{{ $percentage['corporate-ib'] }}" aria-valuemin="0"
                                        aria-valuemax="100" style="width:{{ $percentage['corporate-ib'] }}%"></div>
                                </div>
                                <p class="mb-3">
                                    Self - $ {{ $ib_gain->self_amount }} / $ 1000
                                    <br>
                                    Direct - $ {{ $ib_gain->direct_amount }} / $ 10000
                                    <br>
                                    Team - $ {{ $ib_gain->team_amount }} / $ 50000
                                </p>
                                <h5>
                                    <a href="#">Rewards</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="text-center m-t-20 m-b-20">
                <button class="btn btn-primary rounded-pill">
                    APPLY
                </button>
            </div> --}}
        </div>
    </div>
@endsection

@push('js')
@endpush
