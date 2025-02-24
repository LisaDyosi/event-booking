<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;

class BookingController extends Controller
{
    public function store(Request $request, Event $event)
    {
       
        if (!$request->has('payment_success') || !$request->payment_success) {
            return redirect()->back()->with('error', 'Payment failed. Please try again.');
        }

        
        $booking = Booking::create([
            'user_id' => Auth::id(),
            'event_id' => $event->id,
            'payment_status' => 'paid', 
        ]);

        
        Mail::to(Auth::user()->email)->send(new BookingConfirmation($booking));

        return redirect()->route('dashboard')->with('success', 'Booking confirmed! Your ticket has been sent via email.');
    }

    

    public function index()
    {
    //$bookings = Booking::where('user_id', auth()->id())->get(); 
    $bookings = Booking::where('user_id', Auth::id())->with('event')->get();
    return view('bookings.index', compact('bookings'));
    }


}
