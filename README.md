<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movistar</title>
    <link rel="icon" href="Icon_Mov.png" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php include ("inc/clases.php");
          include ("inc/menu.php");
          include ("inc/carrusel.php"); ?>
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

        /* Contenedor de los botones con flexbox para distribución */
        .btn-group {
          display: flex;
          flex-wrap: wrap; /* Para que los botones salten de línea en pantallas pequeñas */
        }
        .btn-group a, .btn-group .btn-group {
          flex: 1 1 auto; /* Ajusta el tamaño de los botones automáticamente */
          margin: 5px; /* Añade un margen entre los botones */
        }

        /* Ajustes para pantallas pequeñas */
        @media (max-width: 768px) {
          .btn-group {
            flex-direction: column; /* Los botones se alinearán verticalmente en pantallas pequeñas */
          }
        }
    </style>
  </head>
  <body class="container" >
    <div class="alert alert-primary text-center fst-italic" role="alert" style="background: #00a9e0; color: floralwhite;">
        <img src="Icon_Mov.png" class="float-start me-3" alt="" style="height: 70px;">
        <h1>Curso de FullStack Fundación 2024</h1>
    </div>  
      <!-- Botones -->
      <?php clases(); ?>
      <!-- Menu de navegacion -->
      <?php menu(); ?>
      <!-- carrusel -->
      <?php carrusel(); ?>
    <a href="https://wa.me/5491139440923" target="_blank" style="background-color: #25D366; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; display: inline-block;">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon" style="height: 20px; vertical-align: middle; margin-right: 5px;">
      Envía un msj al grupo de alumnos
      <!-- <img src="QR.png" alt="QR"> -->  
    </a>
      <!-- Bootstrap JS -->
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- Script de búsqueda -->
      <script>
        function searchPDF(event) {
          event.preventDefault();
          const query = document.getElementById('searchInput').value;
          fetch(`/search?q=${query}`)
            .then(response => response.json())
            .then(data => {
              const resultsDiv = document.getElementById('results');
              resultsDiv.innerHTML = '';
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
        }
      </script>
  </body>
</html>
