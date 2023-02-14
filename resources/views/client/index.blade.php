@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Lista de Clientes:<h1>
                @if ($message = Session::get('exito'))
                <div class="alert alert-success">
                    <p>{{ $message}}</p>
                </div>
                @endif
            <a href="{{ route('clients.create') }}" class="btn btn-danger">Nuevo Cliente</a>

            <table class="table table-striped table-hover table-dark">
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Email</th>
                </tr>
                @foreach($clientList as $client)
                <tr>
                    <td>{{ $client->DNI }}</td>
                    <td>{{ $client->nombre }}</td>
                    <td>{{ $client->apellidos }}</td>
                    <td>{{ $client->telefono }}</td>
                    <td>{{ $client->email }}</td>

                    <td>
                        <a class="btn btn-warning" href="{{ route('clients.edit', $client->id) }}">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{ route('clients.show', $client->id) }}">Ver</a>
                    </td>
                    <td>
                    <form action="{{route('clients.destroy', $client->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-success" type="submit">Borrar</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection