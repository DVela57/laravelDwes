
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
                        @can('update', $product)
                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Editar</a>
                        @endcan
                    </td>
                    <td>
                        @can('view', $product)
                        <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Ver</a>
                        @endcan
                    </td>
                    <td>
                    @can('delete', $product)
                    <form action="{{route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Borrar</button>
                    </form>
                    @endcan    
                </td>
                </tr>
                @endforeach
            </table>


