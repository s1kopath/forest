@extends('back-end.layouts.app')
@extends('back-end.layouts.left-sidebar')

@push('css')
@endpush

@section('page-content')
    <div class="card">
        <div class="card-header bg-info">
            <h2 class="text-center">My Profile</h5>
        </div>
        <div class="card-block">
            <div class="col-lg-12 col-xl-12">
                <ul class="nav nav-tabs md-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home3" role="tab">About Me</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile3" role="tab">Verification</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages3" role="tab">Password Change</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings3" role="tab">Settings</a>
                        <div class="slide"></div>
                    </li>
                </ul>

                <div class="tab-content card-block">
                    <div class="tab-pane active" id="home3" role="tabpanel">
                        <p class="m-0">1. This is Photoshop's version of
                            Lorem IpThis is Photoshop's version of Lorem
                            Ipsum. Proin gravida nibh vel velit auctor
                            aliquet. Aenean sollicitudin, lorem quis
                            bibendum auctor, nisi elit consequat ipsum,
                            nec sagittis sem nibh id elit. Lorem ipsum
                            dolor sit amet, consectetuer adipiscing
                            elit. Aenean commodo ligula eget dolor.
                            Aenean mas Cum sociis natoque penatibus et
                            magnis dis.....</p>
                    </div>
                    <div class="tab-pane" id="profile3" role="tabpanel">
                        <p class="m-0">2.Cras consequat in enim ut
                            efficitur. Nulla posuere elit quis auctor
                            interdum praesent sit amet nulla vel enim
                            amet. Donec convallis tellus neque, et
                            imperdiet felis amet.</p>
                    </div>
                    <div class="tab-pane" id="messages3" role="tabpanel">
                        <p class="m-0">3. This is Photoshop's version of
                            Lorem IpThis is Photoshop's version of Lorem
                            Ipsum. Proin gravida nibh vel velit auctor
                            aliquet. Aenean sollicitudin, lorem quis
                            bibendum auctor, nisi elit consequat ipsum,
                            nec sagittis sem nibh id elit. Lorem ipsum
                            dolor sit amet, consectetuer adipiscing
                            elit. Aenean commodo ligula eget dolor.
                            Aenean mas Cum sociis natoque penatibus et
                            magnis dis.....</p>
                    </div>
                    <div class="tab-pane" id="settings3" role="tabpanel">
                        <p class="m-0">4.Cras consequat in enim ut
                            efficitur. Nulla posuere elit quis auctor
                            interdum praesent sit amet nulla vel enim
                            amet. Donec convallis tellus neque, et
                            imperdiet felis amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
