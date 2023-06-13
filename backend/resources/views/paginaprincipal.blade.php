@extends('layouts.master')

@section('content')

  <main>
    <div class="carrusel">
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="assets/Imagen/compensacion_ordenador_feliz.jpg" id="fotocarrusel1">
        </div>
        <div class="mySlides fade">
          <img src="assets/Imagen/feliz-joven-empresario-caucasico-hablando-telefono-movil_171337-733.webp" id="fotocarrusel2">
        </div>
        <div class="mySlides fade">
          <img src="assets/Imagen/gente-negocios-diversa-feliz-haciendo-trato_53876-141057.jpg" id="fotocarrusel3">
        </div>
        <div class="mySlides fade">
          <img src="assets/Imagen/gente-negocios-usando-graficos-datos-reunion-proyecto-companeros-trabajo-hablando-estrategia-marketing-ideas-e-investigacion-desarrollo-empresa-companeros-haciendo-analisis-trabajo-equipo_482257-28477.webp" id="fotocarrusel4">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
      </div><br>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
      </div>
      <div class="presentacion">
        <h1>¿Quiénes somos?</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
      </div>
    </div>
    <script>
      let slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
    </script>
    <section>
      <div class="cuadro1">
        <h2 id="tituloCuadro">Título de contenido</h2>
        <img id="foto1" src="assets/Imagen/imagenPresentacion.jpg">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
      <div class="cuadro2">
        <h2 id="tituloCuadro">Título de contenido</h2>
        <img id="foto1" src="assets/Imagen/imagenPresentacion.jpg">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
    </section>
  </main>
  <footer>
    <br><br>
    <div>
        <div class="contenedoriconos">
            <img src="assets/Imagen/Whatsapp.png" alt="whatsapp" id="iconowhats" class="iconos">
            <img src="assets/Imagen/Facebook.png" alt="facebook" id="iconoface" class="iconos">
            <img src="assets/Imagen/Instagram.png" alt="instagram" id="iconoinsta" class="iconos">
            <img src="assets/Imagen/Twitter.png" alt="twitter" id="iconotwitter" class="iconos">
        </div>
        <div class="contenedorcontacto">
            <p id="numtelf" class="contacto">+34 123 45 67 89</p>
            <p id="pagina" class="contacto">fb pagina generica</p>
            <p id="cuentainsta" class="contacto">@WebestOficial</p>
            <p id="cuentatwitter" class="contacto">@WebestOficial</p>
        </div>
        <div>
            <p class="otros">Correo de contacto: CorreoFalso1@empresafalsa.es</p>
            <p class="otros">Fax: 123 12 32 12</p>
        </div>
        <br>
    </div>
</footer>
</body>
</html>
@stop
