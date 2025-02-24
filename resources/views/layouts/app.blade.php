<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
    @vite(['resources/css/app.css', 'resources/css/default.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    @yield('styles')
    <style>
        /* Aplica la fuente JetBrains Mono */
        body {
            font-family: 'JetBrains Mono', monospace;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>