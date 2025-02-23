<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Empleados</title>
    <!-- Usa el mismo setup que en tu welcome -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'JetBrains Mono', monospace;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1a365d 0%, #2d3748 100%);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    <div class="container mx-auto px-4 h-screen flex items-center justify-center">
        <div class="w-full max-w-md bg-gray-800 rounded-xl shadow-2xl p-8 border border-gray-700 transition-all duration-300 hover:border-green-500">
            <div class="text-center mb-8">
                <img src="{{ asset('images/LogoProyecto.png') }}" alt="Logo" class="w-32 mx-auto mb-4">
                <h1 class="text-3xl font-bold text-green-400 mb-2">Acceso Empleados</h1>
                <p class="text-gray-400">Sistema de Gestión Integral</p>
            </div>

            @if ($errors->any())
            <div class="bg-red-800/30 border border-red-600 text-red-200 px-4 py-3 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('employee.login.submit') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="username" class="block text-gray-300 mb-2">Usuario</label>
                    <input type="text" id="username" name="username" 
                           class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-white placeholder-gray-400"
                           required
                           placeholder="Ingresa tu usuario">
                </div>

                <div>
                    <label for="password" class="block text-gray-300 mb-2">Contraseña</label>
                    <input type="password" id="password" name="password" 
                           class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent text-white placeholder-gray-400"
                           required
                           placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" 
                               class="rounded bg-gray-700 border-gray-600 text-green-500 focus:ring-green-500">
                        <span class="text-gray-400">Recordar sesión</span>
                    </label>
                </div>

                <button type="submit" 
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 transform hover:scale-[1.02]">
                    Ingresar al Sistema
                </button>
            </form>
        </div>
    </div>
</body>
</html>