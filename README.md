<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movistar</title>
    <link rel="icon" href="Icon_Mov.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajustes para las flechas de control del carrusel */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
          background-color: rgba(0, 0, 0, 0.5); /* Fondo semitransparente para mayor visibilidad */
          border-radius: 50%;
        }
        /* Ajustes para el texto de los captions */
        .carousel-caption {
          color: #000; /* Cambia el color del texto a negro */
          background-color: rgba(255, 255, 255, 0.7); /* Fondo semitransparente para distinguir mejor */
          padding: 10px; /* Espacio alrededor del texto */
        }
      </style>
  </head>
  <body class="container" >
    <div class="alert alert-primary text-center fst-italic" role="alert" style="background: #00a9e0; color: floralwhite;">
        <img src="Icon_Mov.png" class="float-start me-3" alt="" style="height: 70px;">
        <h1>Curso de Fullstack Fundación 2024</h1>
    </div>  
    <!--<div class="alert alert-secondary text-center fst-italic" role="alert">
        <h2>Curso de Fullstack Fundacion 2024</h2>
      </div>
      <div class="alert alert-success text-center fst-italic" role="alert">
        <h3>Curso de Fullstack Fundacion 2024</h3>>
      </div>
      <div class="alert alert-danger text-center fst-italic" role="alert">
        <h4>Curso de Fullstack Fundacion 2024</h4>>
      </div>
      <div class="alert alert-warning text-center fst-italic" role="alert">
        <h5>Curso de Fullstack Fundacion 2024</h5>>
      </div>-->
      <!-- Botones -->
      <div class="btn-group" role="group" aria-label="Clases">
        <a href="https://drive.google.com/drive/folders/1VuSgiPifILlbKLDcZP-Nbbxjzpq33Vox" class="btn btn-primary" role="button" target="_blank">Clase 1</a>
        <a href="https://drive.google.com/file/d/1cHqBl6RJNy7vpFwWS_avIIYkhTmVKtSE/view?usp=drive_link" class="btn btn-primary" role="button" target="_blank">Clase 2</a>
        <a href="TP_1.pdf" class="btn btn-primary" role="button" target="_blank">Clase 3</a>
        <a href="https://drive.google.com/file/d/1PfpFBnpupkia-MmnV0P1Zu3_kAR5nf99/view?usp=drive_link" class="btn btn-primary" role="button" target="_blank">Clase 4</a>
      
        <!-- Dropdown para Clase 5 -->
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Clase 5
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Introduccion_a_JS.pdf" target="_blank">PDF Lectura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://youtu.be/fAOLJPYr6xw" target="_blank">Video 1</a></li>
            <li><a class="dropdown-item" href="https://youtu.be/DpUqqJnYXPA" target="_blank">Video 2</a></li>
            <li><a class="dropdown-item" href="https://youtu.be/TSo3VXO72Gw" target="_blank">Video 3</a></li>
          </ul>
        </div>
      </div>
      
      <!-- Menu de navegacion -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://conectaempleo-formacion.fundaciontelefonica.com/es_ES/login">Fundación Movistar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://us02web.zoom.us/j/4270232033">Enlace a clases (Zoom)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mailto:guillermo.alfaro.gma@gmail.com">Correo al Profe</a>
              </li>
              <!-- <li class="nav-item dropdown"> 
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <!-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->

            <!--<div class="container mt-5"> -->
                <form class="d-flex" role="search" onsubmit="searchPDF(event)">
                    <input class="form-control me-2" type="search" id="searchInput" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div id="results" class="mt-3">
                </div>
            <!--</div>   --> 

          </div>
        </div>
      </nav>
      <!-- Spinners 
      <div class="spinner-grow text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-secondary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-success" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-info" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-light" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <div class="spinner-grow text-dark" role="status">
        <span class="visually-hidden">Loading...</span>
      </div> -->
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
    <a href="https://wa.me/5491139440923" target="_blank" style="background-color: #25D366; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" style="height: 20px; vertical-align: middle; margin-right: 5px;">
        Envía un msj al grupo de alumnos
        <!-- <img src="QR.png" alt="QR"> -->
    </a> 
      <!-- Bootstrap JS -->
      <script src="js/bootstrap.bundle.min.js"></script>

      <!-- Script par busqueda -->
      <script>function searchPDF(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        const query = document.getElementById('searchInput').value;
        fetch(`/search?q=${query}`)
            .then(response => response.json())
            .then(data => {
                const resultsDiv = document.getElementById('results');
                resultsDiv.innerHTML = ''; // Limpia resultados previos

                if (data.length === 0) {
                    resultsDiv.innerHTML = '<p>No files found.</p>';
                } else {
                    data.forEach(file => {
                        const link = document.createElement('a');
                        link.href = `/download/${file}`;
                        link.textContent = file;
                        link.className = 'd-block';
                        resultsDiv.appendChild(link);
                    });
                }
            })
            .catch(error => console.error('Error:', error));
    }</script>
   </body>
</html>
