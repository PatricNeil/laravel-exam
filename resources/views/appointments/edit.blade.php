@extends('adminlte::page')

@section('title','Modificar Cita')

@section('content_header')
    <h1>Editar Cita</h1>
@stop

@section('content')
    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="client_id">Cliente</label>
            <select name="client_id" class="form-control" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $appointment->client_id == $client->id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="appointment_date">Fecha de la Cita</label>
            <input type="datetime-local" name="appointment_date" class="form-control" value="{{$appointment->appointment_date}}" required>
        </div>
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" name="address" class="form-control" value="{{ $appointment->address }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control">{{ $appointment->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        <a href="{{ route('appointments.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
@stop