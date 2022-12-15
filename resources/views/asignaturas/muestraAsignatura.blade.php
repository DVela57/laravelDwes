<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Muestra Asignatura</title>
    </head>
    <body class="antialiased">
            <h2>Mostrar informacion del modulo</h2>
            <table>
                <tr>
                    <th>Nombre del modulo</th>
                    <td>{{$nombremodulo}}</td>
                </tr>
                <tr>
                    <th>Ciclo</th>
                    <td>{{$ciclo}}</td>
                </tr>
            </table>
            @if ( $nombremodulo == "dwes")
                <p>Estoy en entorno servidor</p>
            @else 
            <p>Estoy en entorno cliente</p>
            @endif

            @foreach ($departamentos as $dpto) 
                {{ $dpto}}
            @endforeach
    </body>
</html>
