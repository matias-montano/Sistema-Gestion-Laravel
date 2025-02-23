@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
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
    </div>
</div>
@endsection

@section('styles')
<style>
.container {
    background-color: #44565e;
    padding: 20px;
    border-radius: 10px;
    margin-top: 50px;
}

/* Estilos generales */
body {
    background-color: #1e1e1e;
    color: #ffffff;
}

/* Contenedor de la tabla */
.table-container {
    max-width: 1000px;
    margin: 0 auto;
}

/* Estilos de la tabla */
table {
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
    text-align: center;
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

/* Bordes curvos */
table {
    border: 1px solid #007acc;
}

/* Botones en las celdas */
td button {
    background-color: #007acc;
    color: #ffffff;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

td button:hover {
    background-color: #005f99;
}

.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;
}
.btn-info:hover {
    background-color: #0f6674;
    border-color: #0d5a66;
}

.btn-warning {
    background-color: #ffc107;
    border-color: #ffc107;
}
.btn-warning:hover {
    background-color: #d48800;
    border-color: #c37a00;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn-danger:hover {
    background-color: #b52a37;
    border-color: #a02630;
}
</style>
@endsection