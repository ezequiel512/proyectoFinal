<!DOCTYPE html>
<html>

<head>
    <title>Lista Torneos</title>
    <link rel="icon" href="../../assets/Imagen/Favicon.ico">
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <!-- vista.blade.php -->

        <!-- Botón para crear un nuevo toarneo -->
        <div class="torneo-container">
        <a href="torneos/creatorneo" class="btn btn-primary">Crear Torneo</a>
        </div>
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
                    @if ($usuarioRegistrado ?? '')
                        <a href="torneos/inscribir/{{ $torneo->id }}" class="btn btn-success">Inscribirse</a>
                    @endif
                    <a href="torneos/editatorneo/{{ $torneo->id }}" class="btn btn-primary">Editar torneo</a>
                    <a href="torneos/deletetorneo/{{ $torneo->id }}" class="btn btn-danger">Eliminar torneo</a>

                    <!-- Botones de inscripción y ver participantes -->
                </div>
            @endforeach
        </div>
    @endsection

</body>

</html>
