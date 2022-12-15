<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
    </head>
    <body>

    @section('widget')
            <h3>Aqui iria un widget</h3>
            
        @show

        @section('mainContent')
            <h2>Este es el contenido principal</h2>
            <table>
                <tr><td>Contenido tabla</td></tr>
            </table>
        @show



        <div>
            @yield('secondaryContent')
        </div>
    </body>
</html>