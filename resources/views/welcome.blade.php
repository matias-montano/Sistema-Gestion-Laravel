<!DOCTYPE html>
<html>
<head>
    <title>Sistema Gestión Larabel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .container {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .title {
            font-size: 3em;
            font-weight: bold;
        }
        .login-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div id="app"></div>
    <div class="login-container text-center">
        <a href="{{ route('employee.login') }}" class="btn btn-primary mt-4">Ingresar al Sistema</a>
    </div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>