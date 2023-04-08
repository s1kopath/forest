<?php

namespace App\Http\Livewire;

use App\Models\Otp;
use App\Models\Rank;
use App\Models\User;
use App\Models\Wallet;
use Livewire\Component;
use App\Models\UserDetail;
use App\Models\AmountForIbGain;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class Registration extends Component
{
    public $referer;
    public $referer_icon;
    public $user_icon;
    public $referer_id;
    public $refer_username;
    public $name;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    public $password_icon = '<span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>';
    public $password_confirmation_icon = '<span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>';

    protected function rules()
    {
        return  [
            'name' => 'required',
            'username' => 'required|min:4|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
            'password_confirmation' => 'same:password'
        ];
    }

    public function render()
    {
        return view('livewire.registration');
    }

    public function mount()
    {
        $this->user_icon = '<i class="fas fa-user"></i>';

        if (session('referer_id')) {
            $this->referer_id = session('referer_id');
            $this->refer_username = session('refer_username');
            $this->referer_icon = '✔️';
        } else {
            $this->referer_icon = '<i class="fas fa-user"></i>';
        }
    }

    public function checkUsername()
    {
        if (strlen($this->username) >= 4) {

            if ($this->username) {
                $ref = User::where('username', $this->username)->first();
                if ($ref) {
                    $this->user_icon = '❌';
                } else {
                    $this->user_icon = '✔️';
                }
            } else {
                $this->user_icon = '❌';
            }
        } else {
            $this->user_icon = '❌';
        }
    }

    public function checkPass()
    {
        try {
            $this->validateOnly('password');
        } catch (ValidationException $er) {
            $this->password_icon = '<span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px">❌</span>';
        } finally {
            if (empty($er)) {
                $this->password_icon = '<span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px">✔️</span>';
            }
        }
    }

    public function checkConfirmPass()
    {
        try {
            $this->validateOnly('password_confirmation');
        } catch (ValidationException $err) {
            $this->password_confirmation_icon = '<span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px">❌</span>';
        } finally {
            if (empty($err)) {
                $this->password_confirmation_icon = '<span class="uk-form-icon uk-form-icon-flip" style="margin-right: -30px">✔️</span>';
            }
        }
    }

    public function checkRef()
    {
        $ref = User::where('username', $this->refer_username)->first();
        if ($ref) {
            $this->referer_id = $ref->id;
            $this->referer_icon = '✔️';
        } else {
            $this->referer_id = '';
            $this->referer_icon = '❌';
        }
    }

    public function store()
    {
        $this->validate();

        $token = hash('sha256', time());

        $otp = new Otp();
        $otp->email = $this->email;
        $otp->token = $token;
        $otp->failed_attempt = 0;
        $otp->save();

        $ref = User::where('username', $this->refer_username)->first();
        if ($ref) {
            $referer_id = $ref->id;
        } else {
            $referer_id = 1;
        }

        $newUser = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'user_type' => 'public',
            'referer_id' => $referer_id,
            'refer_code' => uniqid()
        ]);

        $newDetails = UserDetail::create([
            'user_id' => $newUser->id,
        ]);

        $newWallet = Wallet::create([
            'user_id' => $newUser->id,
        ]);

        $newRank = Rank::create([
            'user_id' => $newUser->id,
        ]);

        $newIpGain = AmountForIbGain::create([
            'user_id' => $newUser->id,
        ]);

        session(['email' => $this->email]);
        session()->forget('resent_count');

        return redirect()->route('verification.notice')->with('message', 'Email sent!');
    }
}
