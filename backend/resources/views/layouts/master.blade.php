<!DOCTYPE HTML>

<html>
    <head>
        <script src="inicio.js"></script>
        <link type="text/css" rel="stylesheet" href="assets/css/inicio.css" />
        <meta charset="UTF-8">
        <title>Webest</title>
        <link rel="shortcut icon" href="./Imagen/faviconEmpresa.ico">
      </head>
<header>
    <a href="inicio.html"><img id="imgLogo" src="assets/Imagen/logo_empresa sin fondo.png" alt="imagen"></a>
    <div id="busqueda">
      <input type="text" placeholder="Search.." name="busqueda" id="barraBusqueda">
    </div>
  </header>
  <nav>
    <div id="menuNavegacion">
      <table>
        <tr id="tabla">
          <td id="boton"><h3 id="textoBoton"> Inicio </h3></td>
          <td id="boton"><h3 id="textoBoton"> productos </h3></td>
          <td id="boton"><h3 id="textoBoton"> Acerca de nosotros </h3></td>
          <td id="boton"><h3 id="textoBoton"> Donde encontrarnos </h3></td>
        </tr>
      </table>
    </div>
  </nav>
    <div class="container">
        @yield('content')
    </div>
</html>
