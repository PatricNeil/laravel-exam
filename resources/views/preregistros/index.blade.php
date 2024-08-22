@extends('adminlte::page')
@section('title', 'Preregistros')
@section('content_header')
    <h1>Pre Registros P Causa</h1>
@stop
@section('content')
    <a href="{{route('preregistros.create')}}" class="btn btn-primary">Nuevo Pre Registro</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha Registro</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($preregistros as $preregistro)
                <tr>
                    <td>{{$preregistro->id}}</td>
                    <td>{{$preregistro->nombre}}</td>
                    <td>{{$preregistro->apellido}}</td>
                    <td>{{$preregistro->fecha_registro}}</td>
                    <td>
                        <a href="{{route('preregistros.edit', $preregistro)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('preregistros.show', $preregistro)}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <form action="{{route('preregistros.destroy', $preregistro)}}" method="POST" style="display: inline">
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