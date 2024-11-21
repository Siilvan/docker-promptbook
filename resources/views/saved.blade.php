@extends('layouts.layout')

@section('title', 'Saved Prompts')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Saved Prompts</h1>
    <p class="mb-4">Here are your saved prompts for ChatGPT.</p>
    <div class="tabcontent">
        <h2 class="text-2xl font-bold mb-4">Your Saved Prompts</h2>
        <div class="bg-gray-800 p-4 rounded-lg mb-4">
            <h3 class="text-xl font-bold">Saved Prompt Title 1</h3>
            <p class="text-gray-300">This is an example saved prompt description.</p>
            <div class="mt-2">
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag1</span>
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag2</span>
            </div>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg mb-4">
            <h3 class="text-xl font-bold">Saved Prompt Title 2</h3>
            <p class="text-gray-300">This is another example saved prompt description.</p>
            <div class="mt-2">
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag1</span>
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag3</span>
            </div>
        </div>
    </div>
@endsection