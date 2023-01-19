@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Lista de Productos:<h1>
                @if ($message = Session::get('exito'))
                <div class="alert alert-success">
                    <p>{{ $message}}</p>
                </div>
                @endif
            <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo Producto</a>

            <table class="table table-striped table-hover table-bordered">
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
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Ver</a>
                    </td>
                    <td>
                    <form action="{{route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Borrar</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection