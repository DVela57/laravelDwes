@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{ route('products.index') }}" class="btn btn-warning">Ver Lista</a><br><br>
            <h1>Edición del producto {{ $product->nombre }}<h1>
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
                <form action="{{route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method("PUT")
                    <label for="Nombre">Nombre Producto</label><br>
                    <input type="text" name="nombre" id="Nombre" value="{{ $product->nombre ?? ''}}"><br>
                    <label for="Description">Descripcion Producto</label><br>
                    <input type="text" name="description" id="Description"value="{{ $product->description ?? ''}}"><br>
                    <label for="precio">Precio Producto</label><br>
                    <input type="text" name="precio" id="precio"value="{{ $product->precio ?? ''}}"><br>

                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection