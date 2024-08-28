@extends('adminlte::page')
@section('title', 'Positions')
@section('content_header')
    <h1>Cargos</h1>
@stop
@section('content')
    <a href="{{route('positions.create')}}" class="btn btn-primary">Nuevo Cargo</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre del Cargo</th>
            <th>Descripcion</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($positions as $position)
                <tr>
                    <td>{{$position->id}}</td>
                    <td>{{$position->title}}</td>
                    <td>{{$position->description}}</td>
                    <td>
                        <a href="{{route('positions.edit', $position)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('positions.show', $position)}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <form action="{{route('positions.destroy', $position)}}" method="POST" style="display: inline">
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