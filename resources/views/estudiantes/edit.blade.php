@extends('adminlte::page')

@section('title','Modificar Estudiante')

@section('content_header')
    <h1>Editar Estudiante</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-gradient-dark">
                <div class="card-body">
                    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $estudiante->nombre }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellido">Apellidos</label>
                                <input type="text" name="apellido" id="apellido" class="form-control" value="{{ $estudiante->apellido }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ci">Cedula de Idintidad</label>
                                <input type="text" name="ci" id="ci" class="form-control" value="{{ $estudiante->ci }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{ $estudiante->email }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $estudiante->telefono }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="{{ $estudiante->fecha_nacimiento }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop