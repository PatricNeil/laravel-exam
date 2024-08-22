@extends('adminlte::page')
@section('title', 'Products')
@section('content_header')
    <h1>Agregar producto</h1>
@stop
@section('content')
    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" id="description" name="description" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop