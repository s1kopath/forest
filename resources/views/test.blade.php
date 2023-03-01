@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">TEST PAGE</h5>
        </div>
        <div class="card-body">

            <div class="card-this mt-50 mb-50">
                <form>
                    <span id="card-header">Saved cards:</span>
                    <div class="row row-1">
                        <div class="col-2"><img class="img-fluid"
                                src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /></div>
                        <div class="col-7">
                            <input type="text" placeholder="**** **** **** 3193">
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <a href="#">Remove card</a>
                        </div>
                    </div>

                    <div class="row-1">
                        <div class="row row-2">
                            <span id="card-inner">Card holder name</span>
                        </div>
                        <div class="row row-2">
                            <input type="text" placeholder="Bojan Viner">
                        </div>
                    </div>
                    <div class="row three">
                        <div class="col-7">
                            <div class="row-1">
                                <div class="row row-2">
                                    <span id="card-inner">Card number</span>
                                </div>
                                <div class="row row-2">
                                    <input type="text" placeholder="5134-5264-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="text" placeholder="Exp. date">
                        </div>
                        <div class="col-2">
                            <input type="text" placeholder="CVV">
                        </div>
                    </div>
                    <button class="btn d-flex mx-auto"><b>Add card</b></button>
                </form>
            </div>

        </div>
    </div>
@endsection

@push('js')
@endpush
