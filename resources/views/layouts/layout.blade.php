<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
        @yield('content')
    </div>
</body>
</html>