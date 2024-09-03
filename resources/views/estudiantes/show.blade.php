@extends('adminlte::page')

@section('title','Ver Estudiante')

@section('content_header')
    <h1>Detalles del Estudiante</h1>
@stop
@section('content')

<div class="container">
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</h3>
        </div>
        <div class="card-body">
            <p><strong>CI: </strong> {{ $estudiante->ci}}</p>
            <p><strong>email:</strong> {{ $estudiante->email }}</p>
            <p><strong>telefono:</strong> {{ $estudiante->telefono }}</p>
            <p><strong>fecha_nacimiento:</strong> {{ $estudiante->fecha_nacimiento }}</p>
            <a href="{{ route('estudiantes.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@stop