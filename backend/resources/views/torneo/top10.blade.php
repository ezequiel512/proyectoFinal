<!DOCTYPE html>
<html>

<head>
    <title>Top 10 Usuarios</title>
</head>

<body>
    @extends('layouts.master')
    @section('content')
        <div class="top10">
            <h1>Top 10 Usuarios con más Torneos Ganados</h1>
            <ul>
                @foreach ($usuarios as $posicion => $usuario)
                    <li class="top10-list">{{ $posicion + 1 }}. {{ $usuario->nombre_usuario }} - {{ $usuario->n_victorias }} victorias</li>
                @endforeach

            </ul>
        </div>
    @endsection

</body>

</html>
