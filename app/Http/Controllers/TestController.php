<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Models\User;
use App\Models\Wallet;
use App\Models\UserStake;
use App\Models\IbRoyality;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\StakingRebate;
use App\Models\AmountForIbGain;
use App\Models\StakingRebateBonus;
use App\Http\Controllers\RanksController;
use App\Http\Controllers\user\StakeController;

class TestController extends Controller
{
    public function test()
    {

        return view('test');
        $url = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,tether&vs_currencies=eur,usd,gbp';
        $data = file_get_contents($url);
        $data = json_decode($data, true);

        $btc_usd = $data['bitcoin']['usd'];
        $btc_eur = $data['bitcoin']['eur'];
        $btc_gbp = $data['bitcoin']['gbp'];

        $eth_usd = $data['ethereum']['usd'];
        $eth_eur = $data['ethereum']['eur'];
        $eth_gbp = $data['ethereum']['gbp'];

        $usdt_usd = $data['tether']['usd'];
        $usdt_eur = $data['tether']['eur'];
        $usdt_gbp = $data['tether']['gbp'];

        echo "BTC USD: $btc_usd<br>";
        echo "BTC EUR: $btc_eur<br>";
        echo "BTC GBP: $btc_gbp<br>";

        echo "ETH USD: $eth_usd<br>";
        echo "ETH EUR: $eth_eur<br>";
        echo "ETH GBP: $eth_gbp<br>";

        echo "USDT USD: $usdt_usd<br>";
        echo "USDT EUR: $usdt_eur<br>";
        echo "USDT GBP: $usdt_gbp<br>";
        dd('200');
        abort(500);
    }
}
