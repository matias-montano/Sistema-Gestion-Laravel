@extends('layouts.app')

@section('content')
    <div class="container mt-5 text-center">
        <h1>Bienvenido, {{ Auth::guard('employee')->user()->name }}</h1>
        <div class="mt-4">
            <a href="{{ route('profile.show') }}" class="btn btn-primary">Mi Perfil</a>
            @if(Auth::guard('employee')->user()->role == 'admin')
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Administrar Empleados</a>
            @endif
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
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
    </style>
@endsection