<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;

// Default home page
Route::get('/', function () {
    return view('welcome');
});

// Middleware-protected routes
Route::middleware(['auth'])->group(function () {
    // Admin Dashboard
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

    // Organizer Dashboard
    Route::middleware('organizer')->group(function () {
        Route::get('/organizer/dashboard', [OrganizerController::class, 'index'])->name('organizer.dashboard');
    });

    // User Dashboard 
    Route::get('/dashboard', [EventController::class, 'dashboard'])->name('dashboard');
});

// Booking and email routes
Route::middleware(['auth'])->group(function () {
    Route::post('/book/{event}', [BookingController::class, 'store'])->name('book.store');
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
});

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Booking Routes
Route::post('/book/{event}', [BookingController::class, 'store']);

// Payment Routes
Route::get('/checkout/{event}', [PaymentController::class, 'checkout'])->name('checkout');
Route::get('/payment-form/{event}', [PaymentController::class, 'paymentForm'])->name('payment.form');
Route::post('/charge/{event}', [PaymentController::class, 'charge'])->name('charge');
Route::get('/payment-success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment-cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

// Authentication Routes
require __DIR__.'/auth.php';

//fixing routes
require __DIR__.'/organiser.php';