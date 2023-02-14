@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{ route('clients.index') }}" class="btn btn-warning">Ver Lista</a><br><br>
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
                <form action="{{route('clients.store')}}" method="post">
                    @csrf
                    <label for="DNI">DNI Cliente</label><br>
                    <input type="text" name="DNI" id="DNI" ><br>
                    <label for="nombre">Nombre Cliente</label><br>
                    <input type="text" name="nombre" id="nombre"><br>
                    <label for="apellidos">Apellidos Cliente</label><br>
                    <input type="text" name="apellidos" id="apellidos"><br>
                    <label for="telefono">Telefono Cliente</label><br>
                    <input type="text" name="telefono" id="telefono"><br>
                    <label for="email">Email Cliente</label><br>
                    <input type="text" name="email" id="email"><br>

                    <button class="btn btn-primary" type="submit">Añadir Cliente</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsectioniv>
    </div>
</div>
@endsection