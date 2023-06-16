<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Usuarios</title>
</head>
<body>
    @extends('layouts.master')
    @section('content')

    <h1>Top 10 Usuarios con más Torneos Ganados</h1>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>{{ $usuario->nombre_usuario }} - {{ $usuario->n_victorias }} victorias</li>
        @endforeach
    </ul>
    @endsection

</body>
</html>
