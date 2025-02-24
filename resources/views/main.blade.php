@extends('layouts.app')

@section('content')
    <div class="container-2 mt-5 text-center">
        <div class="style-labels">
            <h1 class="text-4xl font-semibold">Bienvenido al Sistema de Gestión de Empleados</h1>
        </div>
        <hr class="custom-hr border-t border-white my-6 shadow-sm">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <!-- Tarjeta de ejemplo -->
            <div class="custom-card">
                <div class="reflection"></div>
                <h2 class="text-2xl font-bold" style="color: #5DADE2;">Título de la Tarjeta</h2>
                <p class="mt-2" style="color: #5DADE2">Este es un texto de ejemplo para la tarjeta.</p>
            </div>
            <!-- Tarjeta con ruta a employees.index, solo visible para administradores -->
            @if(Auth::check() && Auth::user()->role == 'admin')
                <a href="{{ route('employees.index') }}" class="custom-card" style="text-decoration: none;">
                    <div class="reflection"></div>
                    <h2 class="text-2xl font-bold" style="color: #5DADE2;">Gestión de Empleados</h2>
                    <p class="mt-2" style="color: #5DADE2;">Accede a la gestión de empleados.</p>
                </a>
            @endif
            <!-- Tarjeta con ruta a prueba -->
            <a href="{{ route('prueba') }}" class="custom-card" style="text-decoration: none;">
                <div class="reflection"></div>
                <h2 class="text-2xl font-bold" style="color: #5DADE2;">Prueba</h2>
                <p class="mt-2" style="color: #5DADE2;">Accede a la página de prueba.</p>
            </a>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Estilo del fondo */
        .custom-card {
            position: relative;
            background-color: #1B4F72; /* Fondo celeste */
            padding: 1.5rem; /* Padding */
            border-radius: 0.5rem; /* Bordes redondeados */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra */
            border: 1px solid rgba(255, 255, 255, 0.5); /* Borde verde */
            transition: transform 0.3s ease-in-out; /* Transición */
            overflow: hidden; /* Ocultar el pseudo-elemento fuera de los bordes */
            color: #5DADE2;
        }
        
        .custom-card:hover {
            transform: scale(1.05); /* Escala */
            backdrop-filter: blur(10px); /* Desenfoque */
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5); /* Sombra */
        }
        .reflection {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            z-index: 1; /* Asegúrate de que la reflexión esté detrás de los enlaces */
        }
        .reflection::after {
            content: "";
            display: block;
            width: 30px;
            height: 100%;
            position: absolute;
            top: -180px;
            left: 0;
            background-color: #FFF;
            opacity: 0;
            transform: rotate(45deg);
            /* Sin animación de inicio */
        }
        /* Activa la animación una sola vez apenas pongas el cursor */
        .reflection:hover::after {
            animation: reflect 2s ease-in-out 1;
            -webkit-animation: reflect 2s ease-in-out 1;
        }
        @keyframes reflect {
            0% { transform: scale(0) rotate(45deg); opacity: 0; }
            80% { transform: scale(0) rotate(45deg); opacity: 0.5; }
            81% { transform: scale(4) rotate(45deg); opacity: 1; }
            100% { transform: scale(50) rotate(45deg); opacity: 0; }
        }
        @-webkit-keyframes reflect {
            0% { transform: scale(0) rotate(45deg); opacity: 0; }
            80% { transform: scale(0) rotate(45deg); opacity: 0.5; }
            81% { transform: scale(4) rotate(45deg); opacity: 1; }
            100% { transform: scale(50) rotate(45deg); opacity: 0; }
        }
    </style>
@endsection