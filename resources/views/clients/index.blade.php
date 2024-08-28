@extends('adminlte::page')
@section('title', 'Clients')
@section('content_header')
    <h1>Clientes</h1>
@stop
@section('content')
    <a href="{{route('clients.create')}}" class="btn btn-primary">Nuevo Cliente</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombre</th>
            <th>CI</th>
            <th>Email</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->ci}}</td>
                    <td>{{$client->email}}</td>
                    <td>
                        <a href="{{route('clients.edit', $client)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('clients.show', $client)}}" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        <form action="{{route('clients.destroy', $client)}}" method="POST" style="display: inline">
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