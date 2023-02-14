@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Lista de Usuarios:<h1>
                @if ($message = Session::get('exito'))
                <div class="alert alert-success">
                    <p>{{ $message}}</p>
                </div>
                @endif
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <td>Nombre</td>
                    <td>Email</td>
                    <td>Contraseña</td>
                </tr>
                @foreach($userList as $user)
                <tr>
                    @can ('view', $user)
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>

                    <td>
                        @can('update', $user)
                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Editar</a>
                        @endcan
                    </td>
                    <td>
                        @can('view', $user)
                        <a class="btn btn-primary" href="{{ route('users.show', $user->id) }}">Ver</a>
                        @endcan
                    </td>
                   @endcan
                </tr>
                @endforeach
            </table>
            
        </div>
    </div>
</div>
@endsection