<?php

namespace App\Http\Controllers;

use App\Http\Controllers\User\FundController;
use Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{

    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $newRecord = Stripe\Charge::create([
            "amount" => $request->amount * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => ""
        ]);

        $fundController = new FundController();
        $fundController->deposit($newRecord->amount / 100);

        return back()->with('message', 'Payment successful!');
    }
}
