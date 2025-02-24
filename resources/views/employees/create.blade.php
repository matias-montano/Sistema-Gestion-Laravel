@extends('layouts.app')

@section('content')
<div class="container-2 mt-5 text-center">
        <div class="style-labels">
            <h1 class="text-4xl font-semibold">Crear Empleado</h1>
        </div>
        <hr class="custom-hr border-t border-white my-6 shadow-sm">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <table class="table">
                <tbody>
                    <tr>
                        <td><label for="name">Name:</label></td>
                        <td>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password_confirmation">Confirm Password:</label></td>
                        <td>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="role">Role:</label></td>
                        <td>
                            <select id="role" name="role" class="form-control" required>
                                <option value="admin">Admin</option>
                                <option value="vendor">Vendor</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-3">
            <a href="{{ route('employees.index') }}" class="btn btn-info">crear empleado</a>
        </div>
        </form>
</div>
@endsection