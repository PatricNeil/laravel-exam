@extends('adminlte::page')

@section('title','See Position')

@section('content_header')
    <h1>Detalles del Cargo</h1>
@stop
@section('content')

<div class="container">
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $position->title }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Descripcion del cargo:</strong> {{ $position->description }}</p>
            <a href="{{ route('positions.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('positions.destroy', $position->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@stop