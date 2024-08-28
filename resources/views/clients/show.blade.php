@extends('adminlte::page')

@section('title','Ver Cliente')

@section('content_header')
    <h1>Detalles del Cliente</h1>
@stop
@section('content')

<div class="container">
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{ $client->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Cédula:</strong> {{ $client->ci }}</p>
            <p><strong>Email:</strong> {{ $client->email }}</p>
            <p><strong>Teléfono:</strong> {{ $client->phone }}</p>
            <p><strong>Dirección:</strong> {{ $client->address }}</p>
            <p><strong>Ciudad:</strong> {{ $client->city }}</p>
            <p><strong>País:</strong> {{ $client->country }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $client->birth_date }}</p>
            <p><strong>Edad:</strong> {{ \Carbon\Carbon::parse($client->birth_date)->age }} años</p>
            <p><strong>Género:</strong> {{ ucfirst($client->gender) }}</p>
            <a href="{{ route('clients.index')}}" class="btn btn-primary">Volver</a>
            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@stop