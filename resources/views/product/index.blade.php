@extends('layouts.master')

@section('title', 'Listado productos')

@section('encabezado')
    Listado de productos
@stop

@section('cuerpo')
    @parent
    <br>
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
    <br>Lista de Productos:<br>
    <a href="{{ route('products.create') }}">Nuevo Producto</a>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Descripcion</td>
            <td>Precio</td>
        </tr>
        @foreach($productList as $product)
            <tr>
                <td>{{ $product->nombre }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->precio }}</td>

                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                </td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">Ver</a>
                </td>
                <td>
                    Borrar
                </td>
            </tr>
        @endforeach
    </table>
@stop

@section('boton')
    @parent
    @stop
    



