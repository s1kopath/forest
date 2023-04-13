<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Rank;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Country;
use App\Models\Withdraw;
use App\Models\UserStake;
use App\Models\IbRoyality;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\StakingRebate;
use App\Models\AmountForIbGain;
use App\Models\StakingRebateBonus;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\RanksController;
use App\Http\Controllers\user\StakeController;

class TestController extends Controller
{
    public function test()
    {
        // dd(substr('public/ticket/1681373488.maxresdefault.jpg', 7));
        dd(trx_generator('DE21saa'));
        // $response = Http::get('https://countrycode.dev/api/calls');
        // dd($response->json());
        // foreach ($response->json() as $data) {
        //     Country::create([
        //         'country_name' => $data['country_name'],
        //         'phone_code' => '+' . $data['phone_code'],
        //     ]);
        // }
        // dd(count($response->json()), Country::count());
        // dd(array_values($response->json()['data'])[0]['country']);

        // $countries = Country::all();

        // foreach ($countries as $data) {
        //     if ($data->country_flag == null) {
        //         # code...
        //         $flag = Http::get("https://restcountries.com/v3.1/name/" . $data->country_name .
        //             "?fullText=true&fields=flags");

        //         if (!isset($flag->json()['status'])) {
        //             # code...
        //             // dd($flag->json());
        //             $data->update([
        //                 'country_flag' => $flag->json()[0]['flags']['png']
        //             ]);
        //         }
        //     }
        // }
        // dd($countries);
        return view('test');
        //Redirect user to the payment page
        // dd('200');
        // abort(500);
    }
}
