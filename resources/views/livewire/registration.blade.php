<div class="uk-text-center in-padding-horizontal@s">
    <a class="uk-logo" href="/">
        <img src="{{ asset('front-end/img/WF.png') }}" alt="logo" width="146" height="40" data-uk-img>
    </a>
    <p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">
        Sign up with your regular account
    </p>

    @if (session('error'))
        <div class="alert bg-alert text-danger">
            {{ session('error') }}
        </div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert bg-alert text-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <!-- login form begin -->
    <form class="uk-grid uk-form" wire:submit.prevent="store">
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px"">
                {!! $referer_icon !!}
            </span>
            <input class="uk-input uk-border-rounded" type="text" placeholder="Enter User ID" value=""
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
            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
            <input class="uk-input uk-border-rounded" type="email" placeholder="Your Email Address" wire:model="email"
                required>
        </div>

        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
            <input class="uk-input uk-border-rounded" type="password" placeholder="Password" wire:model="password"
                required>
        </div>
        <div class="uk-margin-small uk-width-1-1 uk-inline">
            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
            <input class="uk-input uk-border-rounded" type="password" placeholder="Confirm Password"
                wire:model="password_confirmation" required>
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

        <div class="uk-margin-small uk-width-1-1">
            <button type="submit" class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left">
                Sign up now
            </button>
        </div>
    </form>

    <div class="uk-margin-small uk-width-expand uk-text-small">
        <label class="uk-align-left">
            Already have an account? <a href="{{ route('public_login') }}">
                Login here
            </a>
        </label>
    </div>
    <div class="uk-margin-small uk-width-expand uk-text-small">
        <label class="uk-align-right">
            <a class="uk-link-reset" href="{{ route('forget_password') }}">
                Recover account?
            </a>
        </label>
    </div>
</div>
