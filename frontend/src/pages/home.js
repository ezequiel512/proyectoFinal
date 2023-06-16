import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.js';
import { Link } from 'react-router-dom';
import { useAuth } from 'hooks/auth';
// eslint-disable-next-line no-restricted-imports
import Logo from '../images/Logo.png';
// eslint-disable-next-line no-restricted-imports
import trofeo from '../images/ImagenPaginaTorneos.png'
function Home() {
  const { user } = useAuth({ middleware: 'guest' });

  return (
    <div>

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
          <img src={trofeo} alt="Torneo" />
        </section>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
  );
}

export default Home;
