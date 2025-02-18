@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Edit Employee</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $employee->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ $employee->email }}" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ $employee->username }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password (leave blank to keep current password):</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role" class="form-control" required>
                    <option value="admin" {{ $employee->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="vendor" {{ $employee->role == 'vendor' ? 'selected' : '' }}>Vendor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
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
        .form-control {
            background-color: #444;
            color: #fff;
            border: 1px solid #555;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
@endsection