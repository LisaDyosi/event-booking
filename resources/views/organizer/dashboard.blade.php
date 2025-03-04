@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <p>Create and manage your events.</p>
    
    <!-- Logout link -->
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <!-- Option to stay on dashboard or create an event -->
    <div class="dashboard-options">
        <p>What would you like to do?</p>
        <a href="{{ route('events.create') }}" class="create-event-btn">Create New Event</a>
    </div>
</div>
@endsection

@section('styles')
<style>
    .dashboard-container {
        padding: 20px;
        background-color: #f4f4f9;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
        font-family: 'Arial', sans-serif;
    }

    .dashboard-options {
        margin-top: 30px;
        text-align: center;
    }

    .create-event-btn {
        display: inline-block;
        padding: 12px 20px;
        background-color: #f03c1c;
        color: white;
        font-size: 1.2em;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .create-event-btn:hover {
        background-color: #f03c1c;
    }

    .create-event-btn:focus {
        outline: none;
    }
</style>
@endsection
