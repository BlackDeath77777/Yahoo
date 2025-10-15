<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
Route::get('/', function () {
    return Redirect::route('login.form');
});

Route::get('/browse_projects', function () {
    return view('browse_projects');
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/login', function () {
    return 'Login Successful';
});

Route::post('/register', function () {
    return 'Registration Successful';
});

Route::get('/', function () {
    return Redirect::route('login.form');
});



Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});