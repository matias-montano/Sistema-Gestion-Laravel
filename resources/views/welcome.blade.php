<!DOCTYPE html>
<html>
<head>
    <title>Sistema Gestión Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app"></div>
    <div class="login-container text-center">
        <h1 class="title">SISTEMA GESTIÓN LARAVEL</h1>
        <a href="{{ route('employee.login') }}" class="btn btn-primary mt-4">Ingresar al Sistema</a>
    </div>
</body>
</html>