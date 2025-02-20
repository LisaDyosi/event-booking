<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    public function checkout(Event $event)
    {
        return view('checkout', compact('event'));
    }

    public function paymentForm(Event $event)
    {
        return view('payment-form', compact('event'));
    }

    public function charge(Request $request, Event $event)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => ['name' => $event->name],
                    'unit_amount' => $event->ticket_price * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success()
    {
        return view('payment-success');
    }

    public function cancel()
    {
        return view('payment-cancel');
    }
}
