<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar .nav-link.text-white {
            cursor: default;
        }
        .navbar .nav-link.text-white:hover {
            text-decoration: none;
        }
    </style>
    @yield('styles')
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>