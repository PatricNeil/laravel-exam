@extends('adminlte::page')
@section('title', 'Preregistros')
@section('content_header')
    <h1>Agregar pre registro mano</h1>
@stop
@section('content')
    <form action="{{route('preregistros.store')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label for="fecha_registro">Fecha Registro</label>
                <input type="date" id="fecha_registro" name="fecha_registro" class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="unidad_educativa">Unidad Educativa</label>
                <input type="text" id="unidad_educativa" name="unidad_educativa" class="form-control" required>
            </div>
            <div class="form-group col-md-6">
                <label for="carrera_interes">Carrera de Interés</label>
                <input type="text" id="carrera_interes" name="carrera_interes" class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="correo_electronico">Correo Electrónico</label>
                <input type="email" id="correo_electronico" name="correo_electronico" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="solicitudes_becas_estado" name="solicitudes_becas_estado">
                <label class="form-check-label ml-2" for="solicitudes_becas_estado" style="font-size: 1.1em; font-weight: bold;">
                    Solicitud Becas Estado
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop