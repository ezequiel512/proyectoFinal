import { NavLink } from 'react-router-dom';
import { useAuth } from 'hooks/auth';

function Home() {
  const { user } = useAuth({ middleware: 'guest' });

  return (
    <div className="relative flex items-top justify-center min-h-screen 
    bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
      <header>
        <div className="container-fluid">
          <div className="row">
            <div className="col-12">
              <div className="row">
                {/* LOGO */}
                <div className="col-6" id="logo">
                  <a className="navbar-brand d-none d-md-block" href="#">
                    <img src="./images/Logo.png" alt="Logo" />
                  </a>
                  <h1>TourneyMix</h1>
                </div>
                {/* INICIO SESIÓN/REGISTRARSE */}
                <div className="col-6 d-flex justify-content-end align-items-center" id="inicioRegistro">
                  <button id="botonInicio" className="btn btn-dark">Iniciar sesión</button>
                  <button id="botonRegistro" className="btn btn-dark">Registro</button>
                </div>
              </div>
            </div>
          </div>
          {/* MENÚ DE NAVEGACIÓN */}
          <div className="row">
            <div className="col-12 d-flex justify-content-center">
              <nav className="navbar navbar-expand-md">
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse justify-content-center" id="navbarNav">
                  <ul className="navbar-nav">
                    <li className="nav-item">
                      <a className="nav-link" href="#">Inicio</a>
                    </li>
                    <li className="nav-item">
                      <a className="nav-link" href="#">Lista de Torneos</a>
                    </li>
                    <li className="nav-item">
                      <a className="nav-link" href="#">Top de Ganadores</a>
                    </li>
                    <li className="nav-item">
                      <a className="nav-link" href="#">Acerca de Nosotros</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
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
          <button className="btn btn-info">CREAR TORNEO</button>
          <p></p>
          <img src="./images/ImagenPaginaTorneos.png" alt="Torneo" />
        </section>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
  );
}

export default Home;
