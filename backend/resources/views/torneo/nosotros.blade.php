<!DOCTYPE html>
<html>

<head>
    <title>Sobre nosotros</title>
    <link rel="icon" href="../../assets/Imagen/Favicon.ico">
</head>

<body>
    @extends('layouts.master')

    @section('content')
        <div class="container" id="nosotros">
            <div class="row" id="contenedor-nosotros">
                <div class="col-md-6">
                    <img src="assets/Imagen/como-escribir-web-sobre-nosotros.jpg" alt="Imagen" class="img-fluid">
                </div>
                <div class="col-md-6 text-center">
                    <h2 >Texto a la derecha</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales, mi id vulputate
                        consectetur, urna urna elementum arcu, eu tincidunt nisl lacus a sem. Quisque auctor sagittis
                        tempus. Curabitur malesuada id nisl ut consectetur. Vivamus faucibus, arcu et convallis dignissim,
                        mi nisl feugiat dolor, non pulvinar turpis elit id risus.</p>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
