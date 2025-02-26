<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\EventController;

Route::get('/organizer/dashboard', [OrganizerController::class, 'index'])->name('organizer.dashboard');
Route::get('/home', function () {return redirect()->to(auth()->user()->role == 'organizer' ? '/organizer/dashboard' : '/dashboard');});
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');