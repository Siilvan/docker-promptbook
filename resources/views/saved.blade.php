<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saved Prompts</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">PromptSaver</a>
            <div>
                <a href="/" class="text-blue-500 hover:text-blue-700 mx-2">Home</a>
                <a href="/login" class="text-blue-500 hover:text-blue-700 mx-2">Login</a>
                <a href="/register" class="text-blue-500 hover:text-blue-700 mx-2">Register</a>
            </div>
        </div>
    </nav>
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold mb-6">Saved Prompts</h1>
        <p class="mb-4">Here are your saved prompts for ChatGPT.</p>
        <div class="tabcontent">
            <h2 class="text-2xl font-bold mb-4">Your Saved Prompts</h2>
            <!-- Example saved prompt list -->
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
            <!-- Add more saved prompts as needed -->
        </div>
    </div>
</body>
</html>