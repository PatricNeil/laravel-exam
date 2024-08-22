@extends('adminlte::page')

@section('title','Modificar producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop

@section('content')
    <form action="{{route('products.update', $product)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$product->name}}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <textarea id="description" name="description" class="form-control" required>{{$product->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" value="{{$product->price}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop