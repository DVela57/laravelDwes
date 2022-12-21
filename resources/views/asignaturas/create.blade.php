@extends('layouts.master')

@section('title', 'Alta asignaturas')

@section('encabezado')
    Alta de asignaturas
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
    <br>Completa el siguiente formulario:<br>
    <form action="{{route('asignaturas.store')}}" method="post">
        @csrf
    <label for="nombre">Nombre de la asignatura</label><br>
    <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}"><br><br>
    <label for="curso">Curso</label><br>
    <input type="text" name="curso" id="Curso" value="{{old('curso')}}"><br><br>
    <label for="ciclo">Ciclo</label><br>
    <input type="text" name="ciclo" id="ciclo" value="{{old('ciclo')}}"><br><br>
    <label for="comentarios">Comentarios</label><br>
    <textarea name="comentarios" id="comentarios" cols="27" rows="7" placeholder="Escribe aquí"></textarea>
    <br>
@stop

@section('boton')
    @parent
    @section('destino')
        {{route('asignaturas.store')}}
    @stop

    @section('accion')
        Enviar
    @stop
    
    </form>
@stop


