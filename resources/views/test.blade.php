@extends('front-end.master')

@push('page-style')
    <link rel="stylesheet" href="{{ asset('front-end/build/css/intlTelInput.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('front-end/build/css/demo.css') }}"> --}}
@endpush

@section('content')
    <h1>International Telephone Input</h1>
    <form>
        <input id="phone" name="phone" type="tel">
        <button type="submit">Submit</button>
    </form>
@endsection

@push('page-script')

    <script src="{{ asset('front-end/build/js/intlTelInput.js') }}"></script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoInsertDialCode: true,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   fetch("https://ipapi.co/json")
            //     .then(function(res) { return res.json(); })
            //     .then(function(data) { callback(data.country_code); })
            //     .catch(function() { callback("us"); });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
    </script>
@endpush
