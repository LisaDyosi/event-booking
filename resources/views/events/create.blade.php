@extends('layouts.app')

@section('content')
<div class="event-create-container">
    <h2 class="event-heading">Create Event</h2>
    
    <!-- Display success or error messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Event Name -->
        <div class="form-group">
            <label for="name">Event Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-control" placeholder="Enter event name">
        </div>

        <!-- Event Description -->
        <div class="form-group">
            <label for="description">Event Description</label>
            <textarea id="description" name="description" required class="form-control" placeholder="Enter event description">{{ old('description') }}</textarea>
        </div>

        <!-- Event Location -->
        <div class="form-group">
            <label for="location">Event Location</label>
            <input type="text" id="location" name="location" value="{{ old('location') }}" required class="form-control" placeholder="Enter event location">
        </div>

        <!-- Event Date -->
        <div class="form-group">
            <label for="date">Event Date</label>
            <input type="date" id="date" name="date" value="{{ old('date') }}" required class="form-control">
        </div>

        <!-- Ticket Price -->
        <div class="form-group">
            <label for="ticket_price">Ticket Price</label>
            <input type="number" id="ticket_price" name="ticket_price" value="{{ old('ticket_price') }}" required class="form-control" placeholder="Enter ticket price">
        </div>

        <!-- Max Attendees -->
        <div class="form-group">
            <label for="max_attendees">Max Attendees</label>
            <input type="number" id="max_attendees" name="max_attendees" value="{{ old('max_attendees') }}" required class="form-control" placeholder="Enter max attendees">
        </div>

        <!-- Event Image (Optional) -->
        <div class="form-group">
            <label for="image">Event Image</label>
            <input type="file" id="image" name="image" class="form-control">
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn">Create Event</button>
        </div>
    </form>
</div>
@endsection

@section('styles')
<style>
    .event-create-container {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 50px auto;
    }

    .event-heading {
        color: #f03c1c;
        text-align: center;
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 1em;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        padding: 10px 20px;
        background-color: #f03c1c;
        color: white;
        font-size: 1.1em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #c32e14;
    }

    .alert {
        padding: 10px;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
    }

    .alert-danger {
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }
</style>
@endsection
