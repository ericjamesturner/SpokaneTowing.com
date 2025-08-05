<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/quote', function () {
    return view('quote');
})->name('quote');

Route::get('/booking-confirmation', function () {
    return view('booking-confirmation');
})->name('booking.confirmation');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Service Pages
Route::get('/24-hour-towing', function () {
    return view('services.24-hour-towing');
})->name('services.24-hour');

Route::get('/roadside-assistance', function () {
    return view('services.roadside-assistance');
})->name('services.roadside');

Route::get('/lockout-flat-tire', function () {
    return view('services.lockout-flat-tire');
})->name('services.lockout');

Route::get('/flatbed-towing', function () {
    return view('services.flatbed-towing');
})->name('services.flatbed');

Route::get('/heavy-duty-towing', function () {
    return view('services.heavy-duty-towing');
})->name('services.heavy-duty');

Route::get('/winch-out-recovery', function () {
    return view('services.winch-out-recovery');
})->name('services.winch-out');

Route::get('/long-distance-towing', function () {
    return view('services.long-distance-towing');
})->name('services.long-distance');

// Location Pages
Route::get('/towing-coeur-d-alene', function () {
    return view('locations.coeur-d-alene');
})->name('locations.coeur-d-alene');

Route::get('/towing-post-falls', function () {
    return view('locations.post-falls');
})->name('locations.post-falls');

Route::get('/towing-cheney', function () {
    return view('locations.cheney');
})->name('locations.cheney');

Route::get('/towing-deer-park', function () {
    return view('locations.deer-park');
})->name('locations.deer-park');

Route::get('/towing-airway-heights', function () {
    return view('locations.airway-heights');
})->name('locations.airway-heights');

Route::get('/towing-liberty-lake', function () {
    return view('locations.liberty-lake');
})->name('locations.liberty-lake');

Route::get('/towing-hayden-id', function () {
    return view('locations.hayden-id');
})->name('locations.hayden');

Route::get('/towing-sandpoint', function () {
    return view('locations.sandpoint');
})->name('locations.sandpoint');

Route::get('/towing-colville', function () {
    return view('locations.colville');
})->name('locations.colville');

Route::get('/towing-spokane-valley', function () {
    return view('locations.spokane-valley');
})->name('locations.spokane-valley');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
