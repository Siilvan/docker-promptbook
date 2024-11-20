@extends('layout.layout')

@section('title', 'Home')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Welcome to PromptSaver</h1>
    <p class="mb-4">Save and share your favorite prompts for ChatGPT with tags. View other people's posted prompts and save new prompts.</p>
    <div class="tabcontent">
        <h2 class="text-2xl font-bold mb-4">Latest Prompts</h2>
        <div class="bg-gray-800 p-4 rounded-lg mb-4">
            <h3 class="text-xl font-bold">Prompt Title 1</h3>
            <p class="text-gray-300">This is an example prompt description.</p>
            <div class="mt-2">
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag1</span>
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag2</span>
            </div>
        </div>
        <div class="bg-gray-800 p-4 rounded-lg mb-4">
            <h3 class="text-xl font-bold">Prompt Title 2</h3>
            <p class="text-gray-300">This is another example prompt description.</p>
            <div class="mt-2">
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag1</span>
                <span class="bg-blue-500 text-white px-2 py-1 rounded">Tag3</span>
            </div>
        </div>
    </div>
    <div class="tabcontent hidden">
        <h2 class="text-2xl font-bold mb-4">Save New Prompt</h2>
        <form action="/save-prompt" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-300">Title</label>
                <input type="text" id="title" name="title" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-300">Description</label>
                <textarea id="description" name="description" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required></textarea>
            </div>
            <div class="mb-4">
                <label for="tags" class="block text-gray-300">Tags</label>
                <input type="text" id="tags" name="tags" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save Prompt</button>
        </form>
    </div>
    <div class="tabcontent hidden">
        <h2 class="text-2xl font-bold mb-4">Post a Prompt</h2>
        <form action="/post-prompt" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-300">Title</label>
                <input type="text" id="title" name="title" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-300">Description</label>
                <textarea id="description" name="description" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required></textarea>
            </div>
            <div class="mb-4">
                <label for="tags" class="block text-gray-300">Tags</label>
                <input type="text" id="tags" name="tags" class="w-full px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-700 text-white border-transparent focus:border-blue-500" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Post Prompt</button>
        </form>
    </div>
@endsection