<!DOCTYPE html>
<html>

<head>
    <title>Lista Torneos</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <!-- vista.blade.php -->

        <!-- Botón para crear un nuevo torneo -->
        <a href="torneos/creatorneo" class="btn btn-primary">Crear Torneo</a>

        <!-- Lista de torneos -->
        <div class="torneo-container">
        @foreach ($torneos as $torneo)
            <div class="torneo">
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
                <a href="torneos/editatorneo/{{ $torneo->id}}" class="btn btn-primary">editar torneo Torneo</a>
                <!-- Botones de inscripción y ver participantes -->
            </div>
        @endforeach
        </div>
    @endsection

</body>

</html>