@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="inline-block bg-black p-4 rounded-lg " style="background-color:rgb(0, 0, 0); border-radius: 0.5rem;
            border: 1px solid #104892;">
            <h1 class="text-4xl font-semibold" style="color: #104892;">Editar Empleado</h1>
        </div>
        <hr class="border-t border-white my-6 shadow-sm" style="border: 0;
            height: 3px;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), #ffffff, rgba(255, 255, 255, 0));
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
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
            <table class="table">
                <tbody>
                    <tr>
                        <td><label for="name">Name:</label></td>
                        <td>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="form-control"
                                value="{{ $employee->name }}"
                                required
                            >
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                value="{{ $employee->email }}"
                                required
                            >
                        </td>
                    </tr>
                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td>
                            <input
                                type="text"
                                id="username"
                                name="username"
                                class="form-control"
                                value="{{ $employee->username }}"
                                required
                            >
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password">Password (leave blank to keep current password):</label></td>
                        <td>
                            <input type="password" id="password" name="password" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password_confirmation">Confirm Password:</label></td>
                        <td>
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                class="form-control"
                            >
                        </td>
                    </tr>
                    <tr>
                        <td><label for="role">Role:</label></td>
                        <td>
                            <select id="role" name="role" class="form-control" required>
                                <option value="admin" {{ $employee->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="vendor" {{ $employee->role == 'vendor' ? 'selected' : '' }}>Vendor</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
</div>
@endsection

@section('styles')
<style>
/* Fondo y tipografía base */
body {
    background-color: #1e1e1e;
    color: #ffffff;
}

/* Contenedor principal */
.container {
    background-color: #44565e;
    padding: 20px;
    border-radius: 10px;
    margin-top: 50px;
}

/* Tarjeta */
.card {
    background-color: #2c2c2c;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.3);
}

/* Encabezado de la tarjeta */
.card h1 {
    margin-bottom: 20px;
}

/* Inputs */
.form-control {
    background-color: #2c2c2c;
    color: #ffffff;
    border: 1px solid #104892;
}

/* Botón principal */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #005f99;
    border-color: #005f99;
}

/* Alertas de error */
.alert-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: #ffffff;
}

/* Estilos de la tabla */
.table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 10px;
    overflow: hidden;
    background-color: #2c2c2c;
    border: 1px solid #104892;
}

/* Estilos de las celdas de la tabla */
th,
td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid rgb(58, 120, 202);
    border-right: 1px solid rgb(58, 120, 202);
}

th:last-child,
td:last-child {
    border-right: none;
}

/* Estilos del encabezado */
th {
    background-color: #104892;
    color: #ffffff;
    font-weight: bold;
}

tr {
    border-bottom: 1px solid #007acc;
}

/* Efecto hover en las filas */
tr:hover {
    background-color: #3a3a3a;
}
</style>
@endsection