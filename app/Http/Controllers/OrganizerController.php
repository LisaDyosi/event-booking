<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('organizer.dashboard', compact('event'));
    }
}
