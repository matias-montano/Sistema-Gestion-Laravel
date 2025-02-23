@extends('layouts.app')

@section('content')
<div class="container mt-5">
<div class="inline-block bg-black p-4 rounded-lg " style="background-color:rgb(0, 0, 0); border-radius: 0.5rem;
            border: 1px solid #104892;">
            <h1 class="text-4xl font-semibold" style="color: #104892;">Detalles empleado</h1>
        </div>
        <hr class="border-t border-white my-6 shadow-sm" style="border: 0;
            height: 3px;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), #ffffff, rgba(255, 255, 255, 0));
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <table class="table">
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
            <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to Employees List</a>
        </div>
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