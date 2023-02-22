@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        {{--dd(session()->all());--}}
        <h4>visitas a la pag: {{session('contador')}}</h4>
            <h1>Lista de Productos:<h1>
                @if ($message = Session::get('exito'))
                <div class="alert alert-success">
                    <p>{{ $message}}</p>
                </div>
                @endif
                @can('create', 'App\Models\Product')
                <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo Producto</a>
                @endcan
           
            <div id="tablehtml">

            </div>
            <div id="mybody">

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        loadDataHtml();
        loadDataJson();
    });

    const loadDataHtml = function() {
        let url = '/productos/html';
        $.get(url, function(data, status) {
            $('#tablehtml').html(data);
            
    })
    .fail(function(e){
        console.log('Error' + e.status);
        });  
    }
    
    const loadDataJson = function() {
        let url = '/productos/json';
        $.get(url, function(data, status) {
            $('#mybody').empty();
            Object.keys(data).forEach(function(id) {
                console.log(id);
                console.log(data(id));
                var tr = document.createElement('tr');
                tr.setAttribute('id', `tr$(data(id).id)`);
                let fila="<td>" + data(id).nombre + "</td>";
                fila += "<td>" + data(id).description + "</td>";
                fila += "<td>" + data(id).precio + "</td>";
                tr.innerHTML = fila;

                $('#mybody').append(tr);
            }); 
        });
    };
</script>
@endsection

