<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Aplica la fuente JetBrains Mono */
        body {
            font-family: 'JetBrains Mono', monospace;
        }
    </style>
</head>
<body class="text-white" style="background-color:  #1f2836;">
    @include('layouts.navbar')
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>