@extends('adminlte::page')

@section('title','Modificar Department')

@section('content_header')
    <h1>Editar Departamento</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-gradient-dark">
                <div class="card-body">
                    <form action="{{ route('departments.update', $department->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $department->name }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="location">Ubicalocationon</label>
                                <input type="text" name="location" id="location" class="form-control" value="{{ $department->location }}" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                        <a href="{{ route('departments.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop