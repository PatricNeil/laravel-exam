@extends('adminlte::page')
@section('title', 'Estudiantes')
@section('content_header')
    <h1>Estudiantes</h1>
@stop
@section('content')
    <a href="{{route('estudiantes.create')}}" class="btn btn-primary">Nuevo Estudiante</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->id}}</td>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->apellido}}</td>
                    <td>
                        <a href="{{route('estudiantes.show', $estudiante)}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{route('estudiantes.edit', $estudiante)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{route('estudiantes.destroy', $estudiante)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop