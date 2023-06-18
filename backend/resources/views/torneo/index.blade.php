<!DOCTYPE html>
<html>

<head>
    <title>Lista Torneos</title>
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <!-- vista.blade.php -->

        <!-- Botón para crear un nuevo toarneo -->
        <div class="torneo-container-boton">
            @if (Auth::check() && (Auth::user()->rol === 'creador' || Auth::user()->rol === 'ambos'))
                <a href="torneos/creatorneo" class="btn btn-primary">Crear Torneo</a>
            @else
                <p class="texto">Debes iniciar sesión como creador para crear un torneo.</p>
            @endif
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
                    @if (Auth::check())
                        @if (Auth::user()->rol === 'participante' || Auth::user()->rol === 'ambos')
                            <form action="{{ url('torneos/inscribir/' . $torneo->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Inscribirse</button>
                            </form>
                        @endif
                    @endif

                    <a href="torneos/muestratorneo/{{ $torneo->id }}" class="btn btn-info">Ver torneo</a>
                    @if (Auth::check() && $torneo->id_usu === Auth::id())
                        <a href="torneos/editatorneo/{{ $torneo->id }}" class="btn btn-primary">Editar torneo</a>
                        <a href="torneos/deletetorneo/{{ $torneo->id }}" class="btn btn-danger">Eliminar torneo</a>
                    @endif
                    <!-- Botones de inscripción y ver participantes -->
                </div>
            @endforeach
        </div>
    @endsection

</body>

</html>
