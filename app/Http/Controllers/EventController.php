<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function dashboard(Request $request) {
    // Initialize the query for events
    $query = Event::query();

    // Check if a search keyword is provided
    if ($request->has('search') && $request->search != '') {
        // Filter events by name, description, or location based on the search term
        $query->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('description', 'like', '%' . $request->search . '%')
              ->orWhere('location', 'like', '%' . $request->search . '%');
    }

    // Fetch filtered events
    $events = $query->get(); // Or use ->paginate(10) for pagination

    // Return the view with filtered events
    return view('dashboard', compact('events'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Event::all();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
  
        public function store(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'location' => 'required',
        'date' => 'required|date',
        'ticket_price' => 'required|numeric',
        'max_attendees' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    } else {
        $imageName = null;
    }

    Event::create([
        'name' => $request->name,
        'description' => $request->description,
        'location' => $request->location,
        'date' => $request->date,
        'ticket_price' => $request->ticket_price,
        'max_attendees' => $request->max_attendees,
        'image' => $imageName, 
    ]);

    return redirect()->route('dashboard')->with('success', 'Event created successfully!');
}

    

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
