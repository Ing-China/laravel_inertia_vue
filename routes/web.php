<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Home');
// })->name('home');

Route::inertia('/', 'Home')->name('home');
Route::inertia('/register', 'Auth/Register')->name('register');
Route::post('/register', [AuthController::class,'store']);




// Route::get('/profile', function () {
//     return inertia('Profile', ['name' => 'John Doe']);
// })->name('profile');

// Route::inertia('/about', 'About')->name('about');
