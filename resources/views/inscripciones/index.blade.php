@extends('adminlte::page')
@section('title', 'Inscripciones')
@section('content_header')
    <h1 class="mb-4">Inscripciones</h1>
@stop
@section('content')
  <div class="container">

    <a href="{{ route('inscripciones.create') }}" class="btn btn-primary mb-3">Nueva Inscripción</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nro.</th>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Fecha de Inscripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inscripciones as $inscripcion)
                <tr>
                    <td>{{ $inscripcion->id }}</td>
                    <td>{{ $inscripcion->estudiante->nombre }} {{ $inscripcion->estudiante->apellido }}</td>
                    <td>{{ $inscripcion->curso->nombre }}</td>
                    <td>{{ $inscripcion->fecha_inscripcion}}</td>
                    <td>
                        <a href="{{ route('inscripciones.show', $inscripcion->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{ route('inscripciones.edit', $inscripcion->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('inscripciones.destroy', $inscripcion->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta inscripción?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop