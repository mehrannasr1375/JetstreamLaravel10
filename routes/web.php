<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;


// Front Routes
Route::get('/', [HomeController::class, 'welcome'])->name('home');


// Back Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
