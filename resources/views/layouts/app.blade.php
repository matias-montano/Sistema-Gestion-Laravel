<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="bg-gray-900 text-white">
    @include('layouts.navbar')
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>