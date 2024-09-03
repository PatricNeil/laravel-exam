@extends('adminlte::page')

@section('title','Modificar Curso')

@section('content_header')
    <h1>Editar Curso</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-gradient-dark">
                <div class="card-body">
                    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $curso->nombre}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" id="precio" class="form-control" value="{{ $curso->precio}}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fecha_inicio">Fecha Inicio</label>
                                <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" value="{{ $curso->fecha_inicio}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fecha_fin">Fecha Fin</label>
                                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" value="{{ $curso->fecha_fin}}" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $curso->descripcion}}" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                        <a href="{{ route('cursos.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop