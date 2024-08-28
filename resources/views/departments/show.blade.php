@extends('adminlte::page')

@section('title','Ver Department')

@section('content_header')
    <h1>Detalles del Departamento</h1>
@stop
@section('content')

<div class="container">
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $department->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Ubicacion:</strong> {{ $department->location }}</p>
            <a href="{{ route('departments.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@stop