@extends('adminlte::page')

@section('title','Ver Inscripción')

@section('content_header')
    <h1 class="mb-4 text-center">Detalle de Inscripción</h1>
@stop
@section('content')
<div class="container">
    <div class="card mb-4 bg-gradient-dark">
        <div class="card-header">
            Inscripción #{{ $inscripcion->id }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Información del Estudiante</h5>
                    <p class="card-text"><strong>Nombre:</strong> {{ $inscripcion->estudiante->nombre }} {{ $inscripcion->estudiante->apellido }}</p>
                    <p class="card-text"><strong>CI:</strong> {{ $inscripcion->estudiante->ci }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $inscripcion->estudiante->email }}</p>
                    <p class="card-text"><strong>Teléfono:</strong> {{ $inscripcion->estudiante->telefono }}</p>
                    <p class="card-text"><strong>Fecha de Nacimiento:</strong> {{ $inscripcion->estudiante->fecha_nacimiento}}</p>
                </div>

                <div class="col-md-6">
                    <h5 class="card-title">Información del Curso</h5>
                    <p class="card-text"><strong>Nombre del Curso:</strong> {{ $inscripcion->curso->nombre }}</p>
                    <p class="card-text"><strong>Descripción:</strong> {{ $inscripcion->curso->descripcion }}</p>
                    <p class="card-text"><strong>Fecha de Inicio:</strong> {{ $inscripcion->curso->fecha_inicio}}</p>
                    <p class="card-text"><strong>Fecha de Fin:</strong> {{ $inscripcion->curso->fecha_fin}}</p>
                    <p class="card-text"><strong>Precio:</strong> ${{ $inscripcion->curso->precio }}</p>
                </div>
            </div>

            <hr>

            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h5 class="card-title">Detalles de la Inscripción</h5>
                    <p class="card-text"><strong>Fecha de Inscripción:</strong> {{ $inscripcion->fecha_inscripcion}}</p>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('inscripciones.edit', $inscripcion->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('inscripciones.destroy', $inscripcion->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar esta inscripción?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop