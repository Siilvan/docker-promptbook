<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('inlog');
});

Route::get('/register', function () {
    Log::info('GET /register route hit');
    return view('register');
});

Route::post('/register', function () {
    Log::info('POST /register route hit');
    return app(RegisterController::class)->register(request());
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/saved', function () {
    return view('saved');
});

Route::get('/test', function () {
    return view('dbconn');
});
