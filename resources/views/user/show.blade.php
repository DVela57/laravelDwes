@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Detalle del Usuario:<h1>
            <a href="{{ route('users.index') }}" class="btn btn-warning">Lista</a>
            @can ('update', $user)
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-danger">Editar</a>
            @endcan
            <div>
                Nombre:
                {{ $user->name }} <br>
                Email:
                {{ $user->email }}<br>
                Contraseña: 
                {{ $user->password }}

            </div>

        </div>
    </div>
</div>
@endsection