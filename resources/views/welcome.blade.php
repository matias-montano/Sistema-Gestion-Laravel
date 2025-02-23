<!DOCTYPE html>
<html>
<head>
    <title>Inicio - Sistema Gestion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'JetBrains Mono', monospace;
        }

        .hover-img:hover .default-text {
            display: none;
        }
        .hover-img:hover .hovered-text {
            display: block;
        }
        .hovered-text {
            display: none;
        }
        .hover-img:hover {
            transform: scale(1.05); /* Agranda todo el recuadro */
            transition: transform 0.3s ease-in-out, border 0.3s ease-in-out;
            border: 4px solid #4CAF50; /* Cambia el color y el tamaño del borde */
        }
    </style>
</head>
<body class="text-white bg-gray-800">
    <div class="container mx-auto mt-16"> 
        <!-- Tarjeta de presentación -->
        <a href="{{ route('employee.login') }}" class="block max-w-sm mx-auto bg-gray-700 rounded-lg overflow-hidden shadow-lg hover-img border border-gray-700">
            <img class="w-full" src="{{ asset('images/LogoProyecto.png') }}" alt="Logo del Proyecto">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2 text-white default-text">Sistema Gestión Laravel</h2>
                <h2 class="text-2xl font-bold mb-2 text-white hovered-text">Ingresar</h2>
                <p class="text-gray-300 default-text text-justify">Este es un sistema de gestión desarrollado con Laravel. Proporciona una solución completa para la gestión de proyectos.</p>
                <p class="text-gray-300 hovered-text text-justify">Haz clic para ingresar al sistema.</p>
            </div>
        </a>
    </div>
</body>
</html>