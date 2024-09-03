@extends('adminlte::page')
@section('title', 'Cursos')
@section('content_header')
    <h1>Cursos</h1>
@stop
@section('content')
    <a href="{{route('cursos.create')}}" class="btn btn-primary">Nuevo Curso</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{$curso->id}}</td>
                    <td>{{$curso->nombre}}</td>
                    <td>{{$curso->descripcion}}</td>
                    <td>
                        <a href="{{route('cursos.show', $curso)}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <a href="{{route('cursos.edit', $curso)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <form action="{{route('cursos.destroy', $curso)}}" method="POST" style="display: inline">
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