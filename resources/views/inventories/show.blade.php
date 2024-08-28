@extends('adminlte::page')

@section('title','Modificar producto')

@section('content_header')
    <h1>Editar Producto</h1>
@stop
@section('content')

    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$inventory->item_name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cantidad: </strong> {{$inventory->quantity}}</p>
            <p><strong>Precio: </strong> {{$inventory->price}}</p>
            <p><strong>Fecha de registro:</strong> {{$inventory->date}}</p>
            <p><strong>Provedor: </strong> {{$inventory->supplier->name}}</p>
        </div>
        <div>
            <a href="{{ route('inventories.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{ route('inventories.edit', $inventory)}}" class="btn btn-warning">Modificar</a>
            <form action="{{ route('inventories.destroy', $inventory)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop