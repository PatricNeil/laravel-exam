@extends('adminlte::page')

@section('title','Ver Curso')

@section('content_header')
    <h1>Detalles del Curso</h1>
@stop
@section('content')

<div class="container">
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $curso->nombre }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripcion: </strong> {{ $curso->descripcion }}</p>
            <p><strong>fecha de inicio: </strong> {{ $curso->fecha_inicio}}</p>
            <p><strong>fecha de fin: </strong> {{ $curso->fecha_fin}}</p>
            <p><strong>precio: </strong> {{ $curso->precio}}</p>
            <a href="{{ route('cursos.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('cursos.edit', $curso->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@stop