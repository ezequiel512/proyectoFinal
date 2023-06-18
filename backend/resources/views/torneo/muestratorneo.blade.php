<!DOCTYPE html>
<html>

<head>
    <title>Mostrar Torneos</title>
    <link type="text/css" rel="stylesheet" href="assets/css/inicio.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <div class="torneo-container">
            <div class="torneo">
                <h1>Datos del torneo</h1>
                <h3>{{ $torneo->nombre_torneo }}</h3>

                <span>Número de participantes: {{ $torneo->num_participantes }}</span>
                <span>Juego: {{ $torneo->juego }}</span>
                <span>Modalidad: {{ $torneo->presencial }}</span>

                @if ($torneo->ubicacion)
                    <span>Ubicación: {{ $torneo->ubicacion }}</span>
                @endif
                @if ($torneo->descripcion)
                    <span>Descripción: {{ $torneo->descripcion }}</span>
                @endif

                <h3>Lista de Usuarios</h3>
                @foreach ($torneo->usuarios as $usuarioAsociado)
                    <div>
                        <p>Nombre: {{ $usuarioAsociado->nombre }}</p>
                        <p>Email: {{ $usuarioAsociado->email }}</p>
                        <!-- Mostrar más detalles según sea necesario -->
                    </div>
                @endforeach
                <!-- Agrega aquí los botones adicionales si es necesario -->
            </div>
        </div>
    @endsection
</body>

</html>
