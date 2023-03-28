<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\StakingRoi;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function fund()
    {
        $user = User::with(['visaData', 'bankData', 'cryptoData'])->find(auth()->id());
        // dd($user);
        $staking = StakingRoi::where('status', 1)->get();
        $wallet = Wallet::where('user_id', auth()->id())->first();

        return view('back-end.public.fund.fund', compact('staking', 'wallet', 'user'));
    }

    public function deposit($amount, $user_id)
    {
        $wallet = Wallet::where('user_id', $user_id)->first();
        $wallet->main_amount += $amount;
        $wallet->withdrawable_amount += $amount;

        $wallet->save();

        return true;
    }


    public function newDeposit(Request $request)
    {
        $validated = $request->validate([
            "currency" => "required",
            "amount" => "required",
            "coin_type" => "required",
            "network_type" => "required"
        ]);

        $validated['user_id'] = auth()->id();

        $depositDetails = Deposit::create($validated);

        return redirect()->route('confirm_deposit', $depositDetails->id);
    }

    public function confirmDeposit($id)
    {
        $depositDetails = Deposit::find($id);

        $split = explode(' ', $depositDetails->coin_type);

        $coin = $split[0];
        $network = $split[1];

        if ($depositDetails->coin_type == "BTC Bitcoin") {
            $coinImg = asset('back-end/img/trade/bitcoin.png');
        } else if ($depositDetails->coin_type == "ETH Ethereum") {
            $coinImg = asset('back-end/img/trade/ethereum.png');
        } else if ($depositDetails->coin_type == "USDT Tether") {
            $coinImg = asset('back-end/img/trade/tether.png');
        } else {
            $coinImg = asset('back-end/img/trade/bitcoin.png');
        }

        if ($depositDetails->network_type == "Ethereum network (ERC20)") {
            $barcode = asset('front-end/img/barcode/eth.png');
            $walletAddress = "0x10c6e451b42c5356e4a6c1d0bf781fc32662ec67";
        } else if ($depositDetails->network_type == "TRON network (TRC)") {
            $barcode = asset('front-end/img/barcode/trc20.png');
            $walletAddress = "T9ycMSDH8whTgA8f83Z9MmHg7F3BeMZwpH";
        } else if ($depositDetails->network_type == "BNB Smart Chain network (BEP)") {
            $barcode = asset('front-end/img/barcode/bsc bep20.png');
            $walletAddress = "0x10c6e451b42c5356e4a6c1d0bf781fc32662ec67";
        } else {
            $walletAddress = "0x10c6e451b42c5356e4a6c1d0bf781fc32662ec67";
            $barcode = asset('front-end/img/barcode/trc20.png');
        }

        return view('back-end.public.fund.deposit-confirm', compact('depositDetails', 'coin', 'network', 'barcode', 'walletAddress', 'coinImg'));
    }

    public function fetchDepositHistoryData(Request $request)
    {
        if ($request->ajax()) {
            $deposits = Deposit::where('user_id', auth()->id())->orderBy('id', 'desc')->paginate(5);
            return view('back-end.public.fund.deposit-history', compact('deposits'))->render();
        }
    }
}
