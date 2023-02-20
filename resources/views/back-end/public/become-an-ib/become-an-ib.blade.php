@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">Become An Ib</h5>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="card sos-st-card facebook">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="m-b-0"><i class="fab fa-facebook-f"></i>
                                        3.56k</h3>
                                </div>
                                <div class="col-auto">
                                    <h5 class="m-b-0">Likes</h5>
                                </div>
                                <div class="col-auto"><i class="fas fa-arrow-up text-c-green"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card sos-st-card twitter">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="m-b-0"><i class="fab fa-twitter"></i> 3k</h3>
                                </div>
                                <div class="col-auto">
                                    <h5 class="m-b-0">Followers</h5>
                                </div>
                                <div class="col-auto"><i class="fas fa-arrow-up text-c-green"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card sos-st-card linkedin">
                        <div class="card-block">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="m-b-0"><i class="fab fa-linkedin-in"></i> 2k
                                    </h3>
                                </div>
                                <div class="col-auto">
                                    <h5 class="m-b-0">Connections</h5>
                                </div>
                                <div class="col-auto"><i class="fas fa-arrow-down text-c-red"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center m-t-20">
                <button type="button" class="btn btn-primary rounded-pill">
                    Apply
                </button>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
