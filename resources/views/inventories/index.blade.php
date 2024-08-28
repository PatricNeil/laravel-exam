@extends('adminlte::page')
@section('title', 'Inventories')
@section('content_header')
    <h1>Inventarios</h1>
@stop
@section('content')
    <a href="{{route('inventories.create')}}" class="btn btn-primary">Nuevo Inventario</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre del producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Fecha Registro</th>
            <th>Proveedor</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($inventories as $inventory)
                <tr>
                    <td>{{$inventory->id}}</td>
                    <td>{{$inventory->item_name}}</td>
                    <td>{{$inventory->quantity}}</td>
                    <td>{{$inventory->price}}</td>
                    <td>{{$inventory->date}}</td>
                    <td>{{$inventory->supplier->name}}</td>
                    <td>
                        <a href="{{route('inventories.edit', $inventory->id)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('inventories.show', $inventory)}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <form action="{{route('inventories.destroy', $inventory->id)}}" method="POST" style="display: inline">
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