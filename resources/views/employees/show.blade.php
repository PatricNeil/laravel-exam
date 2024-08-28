@extends('adminlte::page')

@section('title','Ver Cita')

@section('content_header')
@stop
@section('content')
<div class="container">
    <h1>Detalles del Empleado</h1>
    <table class="table table-bordered">
        <tr>
            <th>NOMBRE</th>
            <td>{{ $employee->first_name }}</td>
            <th>APELLIDOS</th>
            <td>{{ $employee->last_name }}</td>
        </tr>
        <tr>
            <th>Correo Electronico</th>
            <td>{{ $employee->email }}</td>
            <th>Telefono</th>
            <td>{{ $employee->phone }}</td>
        </tr>
        <tr>
            <th>Departamento</th>
            <td>{{ $employee->department->name }}</td>
            <th>Cargo</th>
            <td>{{ $employee->position->title }}</td>
        </tr>
        <tr>
            <th>Fecha de Nacimiento</th>
            <td>{{ $employee->birth_date }}</td>
            <th>Fecha de Contratacion</th>
            <td>{{ $employee->hire_date }}</td>
        </tr>
        <tr>
            <th>Salario</th>
            <td>{{ $employee->salary }}</td>
            <th>Genero</th>
            <td>{{ $employee->gender }}</td>
        </tr>
        <tr>
            <th>Direccion</th>
            <td>{{ $employee->address }}</td>
            <th>Ciudad</th>
            <td>{{ $employee->city }}</td>
        </tr>
        <tr>
            <th>Pais</th>
            <td>{{ $employee->country }}</td>
        </tr>
    </table>
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Atras</a>
    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
    </form>
</div>

@stop