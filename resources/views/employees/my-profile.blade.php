@extends('layouts.app')

@section('content')
<!-- Espacio transparente -->
<div style="height: 20px;"></div>

<div class="profile-card">
    <div class="card-shine"></div>
    <img src="{{ asset('images/thisPersonNoExist.jpg') }}" alt="Profile Image" class="profile-image" />
    <hr class="profile-divider">
    <div class="profile-details">
        <p><strong>ID:</strong> {{ Auth::guard('employee')->user()->id }}</p>
        <p><strong>Name:</strong> {{ Auth::guard('employee')->user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::guard('employee')->user()->email }}</p>
        <p><strong>Username:</strong> {{ Auth::guard('employee')->user()->username }}</p>
        <p><strong>Role:</strong> {{ Auth::guard('employee')->user()->role }}</p>
    </div>
</div>
@endsection

@section('styles')
    <style>
        .profile-card {
            position: relative; /* Necesario para el posicionamiento absoluto de .card-shine */
            background-color: rgb(0, 0, 0);
            color: #104892;
            padding: 20px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto;
            width: fit-content;
            border: 2px solid #104892; /* Borde azul para el recuadro negro */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transición suave para transformaciones y sombra */
            overflow: hidden; /* Ocultar contenido que se desborde */
        }

        .profile-card:hover {
            transform: translateY(-5px); /* Mover hacia arriba 5px al hacer hover */
            box-shadow: 0 0 15px #104892; /* Efecto glow */
        }
        
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 2px solid #104892; /* Borde azul para la imagen */
            transition: box-shadow 0.3s ease; /* Transición suave para sombra */
        }

        .profile-image:hover {
            box-shadow: 0 0 15px #104892; /* Efecto glow */
        }

        .profile-divider {
            border: 1px solid #104892;
            width: 100%;
            margin-bottom: 20px;
        }
        .profile-details {
            text-align: left;
            width: 100%;
        }

        .card-shine {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.1),
                transparent
            );
            animation: shine 8s infinite;
        }

        @keyframes shine {
            to {
                left: 200%;
            }
        }
    </style>
@endsection