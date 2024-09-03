@extends('adminlte::page')
@section('title', 'Department')
@section('content_header')
    <h1>Agregar Estudiante</h1>
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <form action="{{ route('estudiantes.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="ci">Cedula de Identidad</label>
                                    <input type="text" name="ci" id="ci" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="telefono">Telefono</label>
                                    <input type="text" name="telefono" id="telefono" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop