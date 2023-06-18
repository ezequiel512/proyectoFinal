<!DOCTYPE HTML>
<html>

<head>
    <script src="inicio.js"></script>
    <link type="text/css" rel="stylesheet" href="../../assets/css/inicio.css" />
    <meta charset="UTF-8">
    <title>Webest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../assets/Imagen/Favicon.ico">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-6" id="logo">
                            <a class="navbar-brand d-none d-md-block" href="/   ">
                                <img src="../../assets/Imagen/Logo.png" alt="Logo" />
                            </a>
                        </div>
                        <!-- INICIO SESIÓN/REGISTRARSE/CERRAR SESIÓN -->
                        <div class="col-6 d-flex justify-content-end align-items-center" id="inicioRegistro">
                            @guest
                                <a href="../../login" class="btn btn-dark">Iniciar sesión</a>
                                <a href="../../registro" class="btn btn-dark">Registro</a>
                            @else
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-dark">Cerrar sesión</button>
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MENÚ DE NAVEGACIÓN -->
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid justify-content-center separacion-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../torneos" class="nav-link">Torneos</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../ganadores" class="nav-link">Ganadores</a>
                    </li>
                    <li class="nav-item">
                        <a href="../../nosotros" class="nav-link">Acerca de Nosotros</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© 2023 tourneymix. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6">
                    <p>Contáctanos: info@tourneymix.com</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
