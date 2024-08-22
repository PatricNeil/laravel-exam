@extends('adminlte::page')
@section('title', 'Products')
@section('content_header')
    <h1>Productos</h1>
@stop
@section('content')
    <a href="{{route('products.create')}}" class="btn btn-primary">Nuevo Producto</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{route('products.edit', $product)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('products.show', $product)}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <form action="{{route('products.destroy', $product)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop