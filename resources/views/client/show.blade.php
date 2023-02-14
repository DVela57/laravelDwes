@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Detalle del producto:<h1>
            <a href="{{ route('clients.index') }}" class="btn btn-warning">Lista</a>
            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-danger">Editar</a>
            <div>
                DNI:
                {{ $client->DNI }} <br>
                Nombre:
                {{ $client->nombre }} <br>
                Apellidos:
                {{ $client->apellidos }}<br>
                Telefono: 
                {{ $client->telefono }}<br>
                Email: 
                {{ $client->email }}<br>
            </div>
            <div>
                <h1>Pedidos del cliente {{$client->nombre}}</h1>
                <table class="table table-striped table-hover table-dark">
                <tr>
                    <th>id</th>
                    <th>solicitante</th>
                    <th>fecha</th>
                    <th>descripcion</th>
                </tr>
                @foreach($client->orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->solicitante }}</td>
                    <td>{{ $order->fecha }}</td>
                    <td>{{ $order->descripcion }}</td>
                </tr>
                @endforeach
            </table>

            </div>
        </div>
    </div>
</div>
@endsection