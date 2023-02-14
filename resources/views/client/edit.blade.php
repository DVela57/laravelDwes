@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{ route('clients.index') }}" class="btn btn-warning">Ver Lista</a><br><br>
            <h1>Edición del producto {{ $client->nombre }}<h1>
                <h2>Introduce los datos Nuevos </h2>
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <h6>Por favor corrige los siguientes errores:</h6>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li> 
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('clients.update', $client->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <label for="DNI">DNI Cliente</label><br>
                    <input type="text" name="DNI" id="DNI" value="{{ $client->DNI ?? ''}}" ><br>
                    <label for="nombre">Nombre Cliente</label><br>
                    <input type="text" name="nombre" id="nombre" value="{{ $client->nombre ?? ''}}"><br>
                    <label for="apellidos">Apellidos Cliente</label><br>
                    <input type="text" name="apellidos" id="apellidos" value="{{ $client->apellidos ?? ''}}"><br>
                    <label for="telefono">Telefono Cliente</label><br>
                    <input type="text" name="telefono" id="telefono" value="{{ $client->telefono ?? ''}}"><br>
                    <label for="email">Email Cliente</label><br>
                    <input type="text" name="email" id="email" value="{{ $client->email ?? ''}}"><br>

                    <button class="btn btn-primary" type="submit">Actualizar Cliente</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection