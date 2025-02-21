@extends('layouts.app')

@section('content')
    <div class="container mt-5 text-center">
        <div class="flex flex-row items-center justify-center mt-6 space-x-4">
            <img src="{{ asset('images/thisPersonNoExist.jpg') }}" alt="Descripción de la imagen" class="circular-image mb-4">
            <h1 class="text-4xl font-bold mb-6">Bienvenido, {{ Auth::guard('employee')->user()->name }}</h1>
        </div>
        
        <div class="flex justify-center space-x-4">
            <a href="{{ route('profile.show') }}" class="btn btn-primary">Mi Perfil</a>
            @if(Auth::guard('employee')->user()->role == 'admin')
                <a href="{{ route('employees.index') }}" class="btn btn-orange">Administrar Empleados</a>
            @endif
        </div>
        <hr class="my-6 border-gray-300">
        <div class="flex justify-center">
            <a href="{{ route('prueba') }}" class="btn btn-info">Prueba HTML 1</a>
        </div>
    </div>
@endsection

@section('styles')
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
        .btn {
            @apply inline-block px-6 py-3 rounded-lg font-semibold text-white transition duration-300;
        }
        .btn-primary {
            @apply bg-blue-500;
        }
        .btn-primary:hover {
            @apply bg-blue-700;
        }
        .btn-orange {
            @apply bg-orange-500;
        }
        .btn-orange:hover {
            @apply bg-orange-700;
        }
        .btn-info {
            @apply bg-teal-500;
        }
        .btn-info:hover {
            @apply bg-teal-700;
        }
        .circular-image {
            width: 150px; /* Adjust the size as needed */
            height: 150px; /* Adjust the size as needed */
            border-radius: 50%;
            object-fit: cover; /* Ensures the image covers the entire area */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Adds a shadow for a nice effect */
        }
        .flex-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Adjust the gap as needed */
        }
    </style>
@endsection