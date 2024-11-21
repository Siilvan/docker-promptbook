@extends('layouts.layout')

@section('title', 'Register')

@section('content')
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md mx-au to">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">Register</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-300">Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-300">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-300">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-300">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>
                <a href="/login" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Login</a>
            </div>
        </form>
    </div>
@endsection