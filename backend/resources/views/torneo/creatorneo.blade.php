<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Torneo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>CREACIÓN DE TORNEO</h2>
        <form action="{{ url('/torneo/creatorneo') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre de Torneo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', auth()->user()->name . ' Torneo') }}" required>
            </div>
            <div class="form-group">
                <label for="participantes">Participantes del Torneo:</label>
                <input type="text" class="form-control" id="participantes" name="participantes" value="{{ old('participantes') }}" required>
            </div>
            <div class="form-group">
                <label for="videojuego">Videojuego/Deporte:</label>
                <input type="text" class="form-control" id="videojuego" name="videojuego" value="{{ old('videojuego') }}" required>
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
