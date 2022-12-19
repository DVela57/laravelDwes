@extends('layouts.master')

@section('title', 'Pagina de Informacion')

@section('widget')
    @parent
    <h4>Esto es un añadido</h4>
@stop

@section('mainContent')
    @parent
    <h4>Adicional en main content</h4>
@stop

@section('secondaryContent')
    <h4>Contenido remplazado de secondaryContent</h4>

{{ $nombremodulo }}
@stop   