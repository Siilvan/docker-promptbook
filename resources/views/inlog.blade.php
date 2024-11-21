@extends('layout.layout')

@section('title', 'Login')

@section('content')
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-300">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-300">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                <a href="/register" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Sign Up</a>
            </div>
        </form>
    </div>
@endsection