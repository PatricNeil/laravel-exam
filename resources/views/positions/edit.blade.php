@extends('adminlte::page')

@section('title','Modificar Position')

@section('content_header')
    <h1>Editar Cargo</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-gradient-dark">
                    <div class="card-body">
                        <form action="{{ route('positions.update', $position->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Nombre del Cargo</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $position->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <input type="text" name="description" id="description" class="form-control" value="{{ $position->description }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                            <a href="{{ route('positions.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop