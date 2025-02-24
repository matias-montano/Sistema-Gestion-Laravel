@extends('layouts.app')

@section('content')
<div class="container-2 mt-5 text-center">
        <div class="style-labels">
            <h1 class="text-4xl font-semibold">Detalles empleado</h1>
        </div>
        <hr class="custom-hr border-t border-white my-6 shadow-sm">
        <table class="table-container">
            <tbody>
                <tr>
                    <td><strong>ID:</strong></td>
                    <td>{{ $employee->id }}</td>
                </tr>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td>{{ $employee->name }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ $employee->email }}</td>
                </tr>
                <tr>
                    <td><strong>Username:</strong></td>
                    <td>{{ $employee->username }}</td>
                </tr>
                <tr>
                    <td><strong>Role:</strong></td>
                    <td>{{ $employee->role }}</td>
                </tr>
            </tbody>
        </table>

    <div class="text-center mt-3">
            <a href="{{ route('employees.index') }}" class="btn btn-info">Back to Employees List</a>
    </div>
</div>
@endsection
