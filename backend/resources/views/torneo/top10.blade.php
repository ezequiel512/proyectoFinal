<!DOCTYPE html>
<html>

<head>
    <title>Top 10 Usuarios</title>
    <link rel="icon" href="../../assets/Imagen/Favicon.ico">
</head>

<body>
    @extends('layouts.master')
    @section('content')
        <div class="top10-list">
            <h1>Top 10 Usuarios con más Torneos Ganados</h1>
            <ul>
                @foreach ($usuarios as $posicion => $usuario)
                    <li class="top10-item">{{ $posicion + 1 }}. {{ $usuario->nombre_usuario }} - {{ $usuario->n_victorias }} victorias</li>
                @endforeach

            </ul>
        </div>
    @endsection

</body>

</html>
