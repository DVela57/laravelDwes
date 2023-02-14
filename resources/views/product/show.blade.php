@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('color') == 'verde')
            <button class="btn btn-success">{{ session('color')}}</button>
            @else 
            <button class="btn btn-danger">{{ session('color')}}</button>
            @endif
            
            <h1>Detalle del producto:<h1>
            <a href="{{ route('products.index') }}" class="btn btn-warning">Lista</a>
            @can ('update', $product)
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-danger">Editar</a>
            @endcan
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