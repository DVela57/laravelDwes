@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Detalle del producto:<h1>
            <a href="{{ route('products.index') }}" class="btn btn-warning">Lista</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-danger">Editar</a>
            <div>
                Nombre:
                {{ $product->nombre }} <br>
                Descripcion:
                {{ $product->description }}<br>
                Precio: 
                {{ $product->precio }}

            </div>

        </div>
    </div>
</div>
@endsection