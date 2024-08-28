@extends('adminlte::page')
@section('title', 'Appointments')
@section('content_header')
    <h1>Agregar Empleado</h1>
@stop
@section('content')
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        @include('employees._form')
        <div class="d-flex justify-content-around">
            <a href="{{ route('employees.index') }}" class="btn btn-secondary col-5">Cancelar</a>
            <button type="submit" class="btn btn-primary col-5">Guardar</button>
        </div>
    </form>
@stop