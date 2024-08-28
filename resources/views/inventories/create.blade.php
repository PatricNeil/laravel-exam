@extends('adminlte::page')
@section('title', 'Inventory')
@section('content_header')
    <h1>Agregar Inventario</h1>
@stop
@section('content')
    <form action="{{route('inventories.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="item_name">item_name</label>
            <input type="text" id="item_name" name="item_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">quantity</label>
            <input type="number" id="quantity" name="quantity" step="1" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" id="price" name="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date">date</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="supplier_id">supplier_id</label>
            <select name="supplier_id" id="supplier_id" class="form-control">
                @foreach ($suppliers as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop