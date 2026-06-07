<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Welcome - Yora')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white min-h-screen">
    <nav class="border-b">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <span class="text-xl font-bold text-gray-800">Yora</span>
            <div class="space-x-4">
                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Login</a>
                <a href="{{ route('register') }}" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-900">Register</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>