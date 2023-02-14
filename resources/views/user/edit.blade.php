@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{ route('users.index') }}" class="btn btn-warning">Ver Lista</a><br><br>
            <h1>Edición del usuario {{ $user->nombre }}<h1>
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
                <form action="{{route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <label for="name">Nombre Usuario</label><br>
                    <input type="text" name="name" id="name" value="{{ $user->name ?? ''}}"><br>
                    <label for="email">Email Usuario</label><br>
                    <input type="text" name="email" id="email"value="{{ $user->email ?? ''}}"><br>
                    <label for="password">Contraseña Usuario</label><br>
                    <input type="password" name="password" id="password"value="{{ $user->password ?? ''}}"><br>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection