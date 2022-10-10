<?php

namespace App\Http\Livewire\Pages\Donate;

use Livewire\Component;

class Stripe extends Component
{

    public function stripe(Request $request)
    {
         Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
    ]);
    Session::flash('success', 'Payment successful!');
    return back();
    }

         public function render()
    {
        return view('livewire.pages.donate.stripe');
    }
}