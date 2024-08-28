@extends('adminlte::page')

@section('title','Ver Cita')

@section('content_header')
    <h1>Detalles de la Cita</h1>
@stop
@section('content')
    <div class="container">
        <div class="card bg-gradient-dark">
            <div class="card-header">
                <h3 class="card-title">Cita con {{ $appointment->client->name }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Fecha:</strong> {{ $appointment->appointment_date }}</p>
                <p><strong>Dirección:</strong> {{ $appointment->address }}</p>
                <p><strong>Descripción:</strong> {{ $appointment->description }}</p>
                <a href="{{ route('appointments.index')}}" class="btn btn-primary">Volver</a>
                <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta cita?')">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@stop