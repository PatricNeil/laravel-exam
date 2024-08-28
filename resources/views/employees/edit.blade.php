@extends('adminlte::page')

@section('title','Modificar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('employees._form')
        <div class="d-flex justify-content-around">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary col-5">Cancelar</a>
            <button type="submit" class="btn btn-warning col-5">Actualizar</button>
        </div>
    </form>
@stop