<?php

namespace App\Http\Controllers;

use App\Events\DepositTransactionEvent;
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
        return back()->with('message', 'Stripe unavailable!');

        // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // $newRecord = Stripe\Charge::create([
        //     "amount" => $request->amount * 100,
        //     "currency" => "usd",
        //     "source" => $request->stripeToken,
        //     "description" => ""
        // ]);

        // $fundController = new FundController();
        // $fundController->deposit($newRecord->amount / 100, auth()->id());

        // $details['user_id'] = auth()->id();
        // $details['amount'] = $newRecord->amount / 100;
        // $details['payment_gateway'] = 'Stripe';
        // $details['type'] = 'Credit';
        // $details['purpose'] = 'Deposit';
        // $details['reference_number'] = $newRecord->id;

        // DepositTransactionEvent::dispatch($details);

        // return back()->with('message', 'Payment successful!');
    }
}
