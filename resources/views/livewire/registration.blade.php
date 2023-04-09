<div class="uk-text-center in-padding-horizontal@s">
    <a class="uk-logo" href="/">
        <img src="{{ asset('front-end/img/reeve-logo-3.png') }}" alt="logo" width="400" data-uk-img>
    </a>
    <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">
        Sign Up
    </p>

    {{-- @if (session('error'))
        <div class="alert bg-alert text-danger">
            {{ session('error') }}
        </div>
    @endif --}}
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert bg-alert text-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif --}}

    <!-- login form begin -->
    <form class="uk-grid uk-form" wire:submit.prevent="store">
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px">
                {!! $referer_icon !!}
            </span>
            <input class="uk-input uk-border-rounded" type="text" placeholder="Enter Refer ID" value=""
                wire:model="refer_username" wire:keyup="checkRef">
        </div>

        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
            <input class="uk-input uk-border-rounded" type="text" placeholder="Enter Full Name" wire:model="name"
                required>
        </div>
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px">
                {!! $user_icon !!}
            </span>
            <input class="uk-input uk-border-rounded" type="text" placeholder="Choose Username" wire:model="username"
                required wire:keyup="checkUsername">
        </div>
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip fas fa-envelope fa-sm"></span>
            <input class="uk-input uk-border-rounded" type="email" placeholder="Your Email Address" wire:model="email"
                required>
        </div>
        <style>
            .iti__country {
                color: #000 !important;
            }

            .iti.iti--allow-dropdown {
                width: 100%;
            }

            .iti--laravel-tel-input {
                background-color: rgba(255, 255, 255, 0.1) !important;
                color: rgba(255, 255, 255, 0.7) !important;
                background-clip: padding-box !important;
                box-sizing: border-box;
                margin: 0;
                font: inherit;
                width: 100%;
                padding: 0 14px;
                background: #fff;
                color: #707070;
                font-size: 0.941rem;
                border: 1px solid #e5e5e5;
                transition: 0.2s ease-in-out;
                transition-property: color, background-color, border;
                border-radius: 10px;
                height: 42px;
                vertical-align: middle;
                display: inline-block;
            }

            .iti--laravel-tel-input:focus {
                outline: none;
                background-color: #fff;
                color: #707070;
                border-color: #1e87f0;
            }
        </style>
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip fa-solid fa-earth-americas fa-sm"></span>

            <x-tel-input wire:model="phone" id="phone" name="phone" class="form-input" onchange="myFunction()" />
            <input class="uk-input uk-border-rounded" wire:model="phone_country" type="hidden" id="phone_country"
                name="phone_country">

        </div>
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            {!! $password_icon !!}
            <input class="uk-input uk-border-rounded" type="password" placeholder="Password" wire:model="password"
                wire:keyup="checkPass" required>
        </div>
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            {!! $password_confirmation_icon !!}
            <input class="uk-input uk-border-rounded" type="password" placeholder="Confirm Password"
                wire:model="password_confirmation" wire:keyup="checkConfirmPass" required>

        </div>
        <div class="uk-text-small uk-width-1-1">
            <small>Hint: At least 8 characters (A a 1 #)</small>
        </div>

        <div class="uk-margin-small uk-width-auto uk-text-small">
            <label>
                <input type="checkbox" value="" required>
                <span class="text-inverse">
                    I read and accept
                    <a href="/">
                        Terms &amp; Conditions.
                    </a>
                </span>
            </label>
        </div>

        <div class="uk-margin-small uk-width-auto uk-text-small">
            <label>
                <input type="checkbox" value="">
                <span class="text-inverse">
                    Send me the
                    <a href="/">Newsletter</a>
                    weekly.
                </span>
            </label>
        </div>

        <style>
            .uk-button-primary {
                background-color: #091b65 !important;
                color: #ffffff !important;
            }

            .uk-button-primary:hover {
                background-color: #042297 !important;
            }
        </style>
        <div class="uk-margin-small uk-width-1-1">
            <button type="submit" class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left">
                Sign up now
            </button>
        </div>
    </form>

    <div class="uk-margin-small uk-width-expand uk-text-small">
        <small class="uk-align-left">
            Already have account?
            <a href="{{ route('public_login') }}">
                Login here
            </a>
        </small>
    </div>
    <div class="uk-margin-small uk-width-expand uk-text-small">
        <small class="uk-align-right">
            <a class="uk-link-reset" href="{{ route('forget_password') }}">
                Recover account?
            </a>
        </small>
    </div>
</div>

@push('scripts')
    <script>
        // function myFunction() {
        //     console.log('asdjbl');
        // }

        var input = $("#phone");
        input.intlTelInput();

        input.on("countrychange", function() {
            // input.val('')
            console.log('ljash');
        });
    </script>

    {{-- <script>
    function init() {
            var input = document.querySelector(".tel-phone");
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
                // utilsScript: "build/js/utils.js",
            });

            // input.focus();
        }
        init();

        /* This will be loaded when livewire update or load a new component inside master.blade.php */
        document.addEventListener('livewire:update', init);
    </script> --}}
@endpush
