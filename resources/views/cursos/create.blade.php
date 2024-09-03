@extends('adminlte::page')
@section('title', 'Agregar Cursos')
@section('content_header')
    <h1>Agregar Cursos</h1>
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <form action="{{ route('cursos.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="precio">Precio</label>
                                    <input type="number" name="precio" id="precio" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fecha_inicio">Fecha Inicio</label>
                                    <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fecha_fin">Fecha Fin</label>
                                    <input type="date" name="fecha_fin" id="fecha_fin" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop