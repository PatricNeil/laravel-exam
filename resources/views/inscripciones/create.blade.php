@extends('adminlte::page')
@section('title', 'Department')
@section('content_header')
    <h1 class="mb-4">Nueva Inscripción</h1>
@stop
@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('inscripciones.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="estudiante_id" class="form-label">Estudiante</label>
            <select name="estudiante_id" id="estudiante_id" class="form-control">
                <option value="">Seleccione un estudiante</option>
                @foreach($estudiantes as $estudiante)
                    <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso</label>
            <select name="curso_id" id="curso_id" class="form-control">
                <option value="">Seleccione un curso</option>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_inscripcion" class="form-label">Fecha de Inscripción</label>
            <input type="date" name="fecha_inscripcion" id="fecha_inscripcion" class="form-control" value="{{ old('fecha_inscripcion') }}">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('inscripciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@stop