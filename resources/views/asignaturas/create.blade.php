@extends('layouts.master')

@section('title', 'Alta asignaturas')

@section('encabezado')
    Alta de asignaturas
@stop

@section('cuerpo')
    @parent
    <br>Completa el siguiente formulario:<br>
    <form action="{{route('asignaturas.store')}}" method="post">
    <label for="nombre">Nombre de la asignatura</label><br>
    <input type="text" name="nombre" id="nombre"><br><br>
    <label for="curso">Curso</label><br>
    <input type="text" name="Curso" id="Curso"><br><br>
    <label for="ciclo">Ciclo</label><br>
    <input type="text" name="ciclo" id="ciclo"><br><br>
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
    <input type="submit" value="Enviar" class="btn btn-lg btn-secondary fw-bold border-white bg-black">
    </form>
@stop


