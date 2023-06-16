<!DOCTYPE HTML>

<html>
    <head>
        <script src="inicio.js"></script>
        <link type="text/css" rel="stylesheet" href="assets/css/inicio.css" />
        <meta charset="UTF-8">
        <title>Webest</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="./Imagen/faviconEmpresa.ico">
      </head>
      <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-6" id="logo">
                            <a class="navbar-brand d-none d-md-block" href="#">
                                <img src="assets/Imagen/Logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- INICIO SESIÓN/REGISTRARSE -->
                        <div class="col-6 d-flex justify-content-end align-items-center" id="inicioRegistro">
                            <a href="{{ route('login') }}" class="btn btn-dark">Iniciar sesión</a>
                            <a href="{{ route('register') }}" class="btn btn-dark">Registro</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MENÚ DE NAVEGACIÓN -->
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid justify-content-center">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="torneos" class="nav-link">Torneos</a>
                        </li>
                        <li class="nav-item">
                            <a href="ganadores" class="nav-link">Ganadores</a>
                        </li>
                        <li class="nav-item">
                            <a href="nosotros" class="nav-link">Acerca de Nosotros</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
</html>
