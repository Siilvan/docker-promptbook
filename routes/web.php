<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Log;
use App\Models\UserProject;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('inlog');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
    $NewUser = new UserProject();
    $NewUser->name = request('name');
    $NewUser->email = request('email');
    $NewUser->password = request('password');
    $NewUser->save();

    return redirect('/login')->with('success', 'Registration successful. Please login.');
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
