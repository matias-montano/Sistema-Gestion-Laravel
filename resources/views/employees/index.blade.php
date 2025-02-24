@extends('layouts.app')

@section('content')
<div class="container-2 mt-5 text-center">
        <div class="style-labels">
            <h1 class="text-4xl font-semibold">Indice de Empleados</h1>
        </div>
        <hr class="custom-hr border-t border-white my-6 shadow-sm">
        <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->username }}</td>
                    <td>{{ $employee->role }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">Detalles</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this employee?')"
                            >
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="text-center mt-3">
            <a href="{{ route('employees.create') }}" class="btn btn-info">Anadir empleado</a>
        </div>
    </div>
</div>
@endsection
