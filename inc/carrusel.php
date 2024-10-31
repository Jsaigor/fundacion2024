<?php function carrusel(){ ?>
    <div id="carouselExampleCaptions" class="carousel slide">
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
  
        <!-- Inner -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="01. Maquetado+con+HTML.pdf" target="_blank">
              <img src="01. Maquetado+con+HTML.png" class="d-block w-75 mx-auto" alt="...">
            </a>
            <div class="carousel-caption">
              <h5>Maquetado con HTML</h5>
              <!-- <p>HTML</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <a href="02. Css+y+Bootstrap.pdf" target="_blank">
              <img src="02. Css+y+Bootstrap.png" class="d-block w-75 mx-auto" alt="...">
            </a>
            <div class="carousel-caption">
              <h5>CSS y Bootstrap</h5>
              <!-- <p>CSS</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <a href="03. Introducción+a+bases+de+datos.pdf" target="_blank">
              <img src="03. Introducción+a+bases+de+datos.png" class="d-block w-75 mx-auto" alt="...">
            </a>
            <div class="carousel-caption">
              <h5>Introducción a Database</h5>
              <!-- <p>DB</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <a href="04. Lenguaje+SQL.pdf" target="_blank">
              <img src="04. Lenguaje+SQL.png" class="d-block w-75 mx-auto" alt="...">
            </a>
            <div class="carousel-caption">
              <h5>Lenguaje SQL</h5>
              <!-- <p>SQL</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <a href="05. PHP+Inicial.pdf" target="_blank">
              <img src="05. PHP+Inicial.png" class="d-block w-75 mx-auto" alt="...">
            </a>
            <div class="carousel-caption">
              <h5>PHP Inicial</h5>
              <!-- <p>PHP</p> -->
            </div>
          </div>
          <div class="carousel-item">
            <a href="06. PHP+Avanzado.pdf" target="_blank">
              <img src="06. PHP+Avanzado.png" class="d-block w-75 mx-auto" alt="...">
            </a>
            <div class="carousel-caption">
              <h5>PHP Avanzado</h5>
              <!-- <p>PHP</p> -->
            </div>
          </div>
        </div>  
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<?php
}
?>