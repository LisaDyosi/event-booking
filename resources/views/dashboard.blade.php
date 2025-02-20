@extends('layouts.app')

@section('content')
<h1>Available Events</h1>

@foreach($events as $event)
    <div>
        <h2>{{ $event->name }}</h2>
        <p>{{ $event->description }}</p>
        <p>Location: {{ $event->location }}</p>
        <p>Date: {{ $event->date }}</p>
        <p>Ticket Price: R{{ $event->ticket_price }}</p>
        <p>Max Attendees: {{ $event->max_attendees }}</p>
        <a href="{{ route('checkout', $event->id) }}">Book Now</a>
    </div>
@endforeach
@endsection
