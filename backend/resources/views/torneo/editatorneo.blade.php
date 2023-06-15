<!DOCTYPE html>
<html>
<head>
    <title>Editando torneo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>EDITAR TORNEO</h2>
        <form action="{{ url('/torneo/editatorneo/'.$torneos['id'])}}" method="POST">
            {{method_field('PUT')}}
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre de Torneo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$torneos->nombre_torneo}}" required>
            </div>
            <div class="form-group">
                <label for="participantes">Número de participantes:</label>
                <input type="text" class="form-control" id="participantes" name="participantes" value="{{$torneos->num_participantes}}" required>
            </div>
            <div class="form-group">
                <label for="juego">Videojuego/Deporte:</label>
                <input type="text" class="form-control" id="juego" name="juego" value="{{$torneos->juego}}" required>
            </div>
            <div class="form-group">
                <label for="tipo_torneo">Tipo de Torneo:</label><br>
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="tipo_torneo" value="presencial">Presencial
                </label><br>
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="tipo_torneo" value="telematico">Telemático
                </label>
            </div>
            <div class="form-group" id="ubicacion_group" style="display: none;">
                <label for="ubicacion">Ubicación:</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="3" value="{{$torneos->descripcion}}" ></textarea>
             </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[name="tipo_torneo"]').on('change', function() {
                if ($(this).val() === 'presencial') {
                    $('#ubicacion_group').show();
                } else {
                    $('#ubicacion_group').hide();
                }
            });
        });
    </script>
</body>
</html>
