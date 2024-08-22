@extends('adminlte::page')

@section('title','Ver Pre Registro')

@section('content_header')
    <h1>Ver el Pre Registro chaval</h1>
@stop
@section('content')

    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$preregistro->nombre}} {{$preregistro->apellido}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Fecha de Registro:</strong> {{$preregistro->fecha_registro}}</p>
            <p><strong>Unidad Educativa:</strong> {{$preregistro->unidad_educativa}}</p>
            <p><strong>Carrera de interes:</strong> {{$preregistro->carrera_interes}}</p>
            <p><strong>Correo Electronico:</strong> {{$preregistro->correo_electronico}}</p>
            <p><strong>Celular:</strong> {{$preregistro->celular}}</p>
            <p><strong>Direccion:</strong> {{$preregistro->direccion}}</p>
            <p><strong>Estado solicidud de beca:</strong> {{$preregistro->solicitudes_becas_estado}}</p>
        </div>
        <div>
            <a href="{{ route('preregistros.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{ route('preregistros.edit', $preregistro)}}" class="btn btn-warning">Modificar</a>
            <form action="{{ route('preregistros.destroy', $preregistro)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop