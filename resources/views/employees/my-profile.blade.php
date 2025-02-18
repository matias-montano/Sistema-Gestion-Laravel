@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Mi Perfil</h1>
        <div class="card">
            <div class="card-header">
                {{ Auth::guard('employee')->user()->name }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ Auth::guard('employee')->user()->id }}</p>
                <p><strong>Name:</strong> {{ Auth::guard('employee')->user()->name }}</p>
                <p><strong>Email:</strong> {{ Auth::guard('employee')->user()->email }}</p>
                <p><strong>Username:</strong> {{ Auth::guard('employee')->user()->username }}</p>
                <p><strong>Role:</strong> {{ Auth::guard('employee')->user()->role }}</p>
                <a href="{{ route('main') }}" class="btn btn-primary">Back to Main</a>
            </div>
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
        .card {
            background-color: #444;
            color: #fff;
        }
        .card-header {
            background-color: #555;
            color: #fff;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
@endsection