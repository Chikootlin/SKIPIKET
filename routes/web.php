<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
})->name('index');

Route::get('/about', function () {
    return view('landing.about_us');
})->name('about');

Route::get('/faq', function () {
    return view('landing.faq');
})->name('faq');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'attempt'])->name('login.attempt');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

// Route::get('/picket', [PicketController::class, 'index'])->name('picket');

// Route::get('/calendar', action: function(){
//     return view('main.calendar');
// })->name('calendar');

// Route::get('/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('calendar');

// Route::get('/notification', action: function(){
//     return view('main.notification');
// })->name('notification');

// Route::get('/profile', action: function(){
//     return view('main.profile');
// })->name('profile');

// Route::post('/profile', [ProfileController::class, 'updateImage'])->name('profile.updateImage');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');

    Route::get('/picket', [PicketController::class, 'index'])->name('picket');

    Route::get('/notification', function() {
        return view('main.notification');
    })->name('notification');

    Route::get('/profile', function() {
        return view('main.profile');
    })->name('profile');

    Route::post('/profile', [ProfileController::class, 'updateImage'])->name('profile.updateImage');
});