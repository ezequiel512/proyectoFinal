import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.js';
// eslint-disable-next-line no-restricted-imports
import trofeo from '../images/ImagenPaginaTorneos.png'
function Home() {
  return (
    <div>
      <header>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="row">
                {/* <!-- LOGO --> */}
                <div class="col-6" id="logo">
                  <a class="navbar-brand d-none d-md-block" href="/">
                    <img src="assets/Imagen/Logo.png" alt="Logo" />
                  </a>
                </div>
                {/* <!-- INICIO SESIÓN/REGISTRARSE --> */}
                <div class="col-6 d-flex justify-content-end align-items-center" id="inicioRegistro">
                  <a href="login" class="btn btn-dark">Iniciar sesión</a>
                  <a href="register" class="btn btn-dark">Registro</a>
                </div>
              </div>
            </div>
          </div>
          {/* <!-- MENÚ DE NAVEGACIÓN --> */}
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
      {/* Carousel */}
      <div id="demo" className="carousel slide" data-bs-ride="carousel">
        {/* Indicators/dots */}
        <div className="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" className="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        {/* The slideshow/carousel */}
        <div className="carousel-inner">
          <div className="carousel-item active" id="carruselVideojuego">
            <div className="carousel-caption">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus ullamcorper consequat.
                Praesent lobortis varius mauris, sed ultricies ante malesuada vitae. Donec rhoncus ullamcorper
                consequat. Praesent lobortis varius mauris.</p>
            </div>
          </div>
          <div className="carousel-item" id="carrouselDeporte">
            <div className="carousel-caption">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus ullamcorper consequat.
                Praesent lobortis varius mauris, sed ultricies ante malesuada vitae. Donec rhoncus ullamcorper
                consequat. Praesent lobortis varius mauris</p>
            </div>
          </div>
          <div className="carousel-item" id="carrouselJuegoDeMesa">
            <div className="carousel-caption">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus ullamcorper consequat.
                Praesent lobortis varius mauris, sed ultricies ante malesuada vitae. Donec rhoncus ullamcorper
                consequat. Praesent lobortis varius mauris</p>
            </div>
          </div>
        </div>
        {/* Left and right controls/icons */}
        <button className="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span className="carousel-control-prev-icon"></span>
        </button>
        <button className="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span className="carousel-control-next-icon"></span>
        </button>
      </div>

      {/* Sección de Crear un torneo */}
      <div className="container-fluid">
        <section id="creaUnTorneo">
          <h2>Empieza creando tu primer torneo</h2>
          <p></p>
          <div>
            <a href="/torneos/creatorneo" className="btn btn-info">CREAR TORNEO</a>
          </div>
          <p></p>
          <img src={trofeo} alt="Torneo" />
        </section>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
  );
}

export default Home;
