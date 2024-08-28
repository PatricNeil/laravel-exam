@extends('adminlte::page')

@section('title','Modificar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-gradient-dark">
                <div class="card-body">
                    <form action="{{ route('clients.update', $client->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ci">Cédula</label>
                                <input type="text" name="ci" id="ci" class="form-control" value="{{ $client->ci }}" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $client->email }}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Teléfono</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ $client->phone }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Dirección</label>
                                <input type="text" name="address" id="address" class="form-control" value="{{ $client->address }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">Ciudad</label>
                                <input type="text" name="city" id="city" class="form-control" value="{{ $client->city }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="country">País</label>
                                <input type="text" name="country" id="country" class="form-control" value="{{ $client->country }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="birth_date">Fecha de Nacimiento</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ $client->birth_date }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="gender">Género</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="male" {{ $client->gender == 'male' ? 'selected' : '' }}>Masculino</option>
                                    <option value="female" {{ $client->gender == 'female' ? 'selected' : '' }}>Femenino</option>
                                    <option value="other" {{ $client->gender == 'other' ? 'selected' : '' }}>Otro</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
                        <a href="{{ route('clients.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop