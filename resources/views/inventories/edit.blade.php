@extends('adminlte::page')

@section('title','Modificar Inventario')

@section('content_header')
    <h1>Editar Inventario</h1>
@stop

@section('content')
    <form action="{{route('inventories.update', $inventory)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="item_name">item_Nombre</label>
            <input type="text" id="item_name" name="item_name" class="form-control" value="{{$inventory->item_name}}" required>
        </div>
        <div class="form-group">
            <label for="quantity">quantity</label>
            <input type="text" id="quantity" name="quantity" step="1" class="form-control" value="{{$inventory->quantity}}" required>
            
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" value="{{$inventory->price}}" required>
        </div>
        <div class="form-group">
            <label for="date">Fecha Registro</label>
            <input type="date" id="date" name="date" class="form-control"value="{{$inventory->date}}" required>
        </div>
        <div class="form-group">
            <label for="supplier_id">supplier_id</label>
            <select name="supplier_id" id="supplier_id" class="form-control">
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" @if($supplier->id == $inventory->supplier_id) selected @endif>
                        {{ $supplier->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
@stop