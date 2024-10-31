<?php function menu(){ ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://conectaempleo-formacion.fundaciontelefonica.com/es_ES/login">Fundación Movistar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://us02web.zoom.us/j/4270232033">Enlace a clases. (Zoom)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mailto:guillermo.alfaro.gma@gmail.com">Correo al Profe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search" onsubmit="searchPDF(event)">
              <input class="form-control me-2" type="search" id="searchInput" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div id="results" class="mt-3"></div>
          </div>
        </div>
      </nav>

<?php

}
?>