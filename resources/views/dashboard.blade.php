@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <h1>Available Events</h1>
    <br>

    <!-- Search Form (Unchanged) -->
    <form method="GET" action="{{ route('dashboard') }}" class="search-form">
        <input type="text" name="search" placeholder="Search events..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <!-- Event Cards Section (New Wrapper) -->
    <div class="event-carousel">
        <div class="event-cards-wrapper">
            @foreach($events as $event)
                <div class="event-card">
                    <img src="{{ asset('images/' . $event->image) }}" alt="{{ $event->name }}" class="event-image">
                    <h2>{{ $event->name }}</h2>
                    <p>{{ $event->description }}</p>
                    <p>Location: {{ $event->location }}</p>
                    <p>Date: {{ $event->date }}</p>
                    <p>Ticket Price: R{{ $event->ticket_price }}</p>
                    <p>Max Attendees: {{ $event->max_attendees }}</p>
                    <a href="{{ route('checkout', $event->id) }}">Book Now</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
