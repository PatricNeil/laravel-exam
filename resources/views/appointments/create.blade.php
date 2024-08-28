@extends('adminlte::page')
@section('title', 'Appointments')
@section('content_header')
    <h1>Agregar Cita</h1>
@stop
@section('content')
    <div class="container">
        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="client_id">Cliente</label>
                <select name="client_id" class="form-control" required>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="appointment_date">Fecha de la Cita</label>
                <input type="datetime-local" name="appointment_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
        </form>
    </div>
@stop