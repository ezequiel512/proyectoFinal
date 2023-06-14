<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Usuarios</title>
</head>
<body>
    <h1>Top 10 Usuarios con más Torneos Ganados</h1>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>{{ $usuario->nombre }} - {{ $usuario->n_victorias }} victorias</li>
        @endforeach
    </ul>
</body>
</html>
