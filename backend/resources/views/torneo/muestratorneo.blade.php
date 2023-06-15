<div class="row">

    <div class="col-sm-8">
        <!--Nombre del torneo-->
        <h3>Nombre: {{$torneo['nombre_torneo']}}</h3>

        <!--Nº participantes del torneo-->
        <h5>Nº participantes: {{$torneo['num_participantes']}}</h5>

        <!--Juego del torneo-->
        <h5>Juego: {{$torneo['juego']}}</h5>

        <!--Presencial o telemático-->
        <h5>Presencial o telemático: {{$torneo['presencial']}}</h5>

        <!--Si es presencial, se muestra la ubicación-->
        @if($torneo['presencial'] == 'presencial')
            <h5>Ubicación: {{$torneo['ubicacion']}}</h5>
        @endif

        <!--Descripción del torneo-->
        <h5>Descripción: {{$torneo['descripcion']}}</h5>

    </div>
</div>
