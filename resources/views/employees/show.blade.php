@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Employee Details</h1>
        <div class="card">
            <div class="card-header">
                {{ $employee->name }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $employee->id }}</p>
                <p><strong>Name:</strong> {{ $employee->name }}</p>
                <p><strong>Email:</strong> {{ $employee->email }}</p>
                <p><strong>Username:</strong> {{ $employee->username }}</p>
                <p><strong>Role:</strong> {{ $employee->role }}</p>
                <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to Employees List</a>
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