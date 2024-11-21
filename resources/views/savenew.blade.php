@extends("layouts.layout")

@section("title", "Save New Prompt")

@section("content")
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-md mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">Save New Prompt</h2>
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
@endsection