@extends('front-end.master')
@section('title')
    E-commerce
@endsection

@push('page-style')
@endpush

@section('breadcrumb')
    @include('front-end.breadcrumb')
@endsection

@section('content')
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-1-1 in-content-10">
                    <div class="uk-text-center mb-5">
                        <img src="{{ asset('front-end/content/e-commerce.jpg') }}" width="1100px" >
                    </div>
                    <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top"
                        data-uk-grid>
                        <div>
                            <h3 class="uk-heading-bullet"><a class="uk-link-text uk-text-decoration-none" href="#content1">Sizes of Ecommerce Businesses</a>
                            </h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <p>From small startups to large enterprises, ecommerce businesses can come in all sizes.</p>
                                    <a href="#content1" class="uk-button uk-button-text">More details<i
                                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>

                            </div>
                        </div>
                        <div>
                            <h3 class="uk-heading-bullet"><a class="uk-link-text uk-text-decoration-none" href="#content2">Types of Ecommerce</a>
                            </h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <p>Generally, there are seven main models of ecommerce.</p>
                                    <a href="#content2" class="uk-button uk-button-text">More details<i
                                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>

                            </div>
                        </div>
                        <div>
                            <h3 class="uk-heading-bullet"><a class="uk-link-text uk-text-decoration-none" href="#content3">Examples of Ecommerce</a>
                            </h3>
                            <div class="uk-grid uk-grid-small" data-uk-grid>
                                <div class="uk-width-expand@m">
                                    <p>Of course, to run an ecommerce business, you have to have something to sell.</p>
                                    <a href="#content3" class="uk-button uk-button-text">More details<i
                                            class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" id="content1">
                <div class="uk-width-2-3@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="in-icon-wrap large primary-color uk-margin-right">
                                <i class="fas fa-circle-dollar-to-slot fa-2x"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3>Sizes of Ecommerce Businesses</h3>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">Let’s look at the main four you’re likely to come across.</p>
                            <div class="uk-grid uk-child-width-1-1">
                                <div>
                                    <ul class="uk-list in-list-check">
                                        <li><strong>Startup</strong> - A startup is a business or project in the first stages of development, often built by an entrepreneur to pursue an innovative business model.</li>
                                        <li><strong>Small business</strong> - Small businesses are sole proprietorships, partnerships or corporations that sell products or services and make less money and have fewer employees than large multinational corporations.</li>
                                        <li><strong>Mid market</strong> - According to <strong>Sangoma,</strong> small and medium-sized enterprises (SMEs), also known as “mid-market,” businesses, typically have between 101-500 employees and genrate between $10 million and $1 billion in annual revenue.</li>
                                        <li><strong>Enterprise</strong> - Large <strong>enterprise businesses</strong> can have over 1000 employees and usually generate over $1 billion in annual revenue.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m mt-3">
                    <img src="{{ asset('front-end/content/sizes of e-commerce.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" id="content2">
                <div class="uk-width-1-3@m">
                    <img src="{{ asset('front-end/content/types of e-commerce.jpg') }}">
                </div>
                <div class="uk-width-2-3@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="in-icon-wrap large primary-color uk-margin-right">
                                <i class="fa-sharp fas fa-filter-circle-dollar fa-2x"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3>Types of Ecommerce Businesses</h3>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">Generally, there are seven main models of ecommerce that businesses can be categorized into:</p>
                            <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@m">
                                <div>
                                    <ul class="uk-list in-list-check">
                                        <li>Business-to-Consumer (B2C)</li>
                                        <li>Business-to-Business (B2B)</li>
                                        <li>Consumer-to-Consumer (C2C)</li>
                                        <li>Direct-to-Consumer (D2C)</li>
                                    </ul>
                                </div>
                                <div class="in-margin-top-10@s in-margin-bottom-30@s">
                                    <ul class="uk-list in-list-check">
                                        <li>Consumer-to-Business (C2B)</li>
                                        <li>Business-to-Administration (B2A)</li>
                                        <li>Consumer-to-Administration (C2A)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- section content end -->
    <!-- section content begin -->
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid" id="content3">
                <div class="uk-width-2-3@m">
                    <div class="uk-grid uk-grid-small" data-uk-grid>
                        <div class="uk-width-auto@m">
                            <div class="in-icon-wrap large primary-color uk-margin-right">
                                <i class="fas fa-hand-holding-dollar fa-2x"></i>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <h3>Examples of Ecommerce</h3>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">Let’s dive into three examples of what you can sell online:</p>
                            <div class="uk-grid uk-child-width-1-1">
                                <div>
                                    <ul class="uk-list in-list-check">
                                        <li><strong>Sell physical goods</strong> - Think of your favorite clothing, home decor or electronics brand — these are all prime examples of selling physical goods online. </li>
                                        <li><strong>Sell digital goods</strong> - Whether you’re a seasoned online merchant or an aspiring entrepreneur, digital products are a promising avenue for selling online.</li>
                                        <li><strong>Sell services</strong> - Whether you’re a seasoned online merchant or an aspiring entrepreneur, digital products are a promising avenue for selling online.</li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m mt-3">
                    <img src="{{ asset('front-end/content/example of e-commerce.jpg') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- section content end -->
@endsection

@push('page-script')
@endpush
