<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});

Route::get('/loggedin', function () {
    return view('loggedin');
})->name('loggedin');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/pagetwo', function () {
    return view('pagetwo');
})->name('pagetwo');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('auth/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/saved', function () {
    return view('saved');
});

Route::get('/save', function () {
    return view('savenew');
});