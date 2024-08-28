@extends('adminlte::page')
@section('title', 'Position')
@section('content_header')
    <h1>Agregar Cargo</h1>
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <form action="{{ route('positions.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Nombre del Cargo</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <input type="text" name="description" id="description" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                            <a href="{{ route('positions.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop