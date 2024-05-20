<?php

require_once "autoloader.php";
$security = new Security();
$email = $security->getUserData();
$info = $security->getUser($email);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
</head>
<style>
.content {
  margin-bottom: 50px;
}

.d-item {
    height: 600px;
}

.subtitulo {
    font-size: 30px;
}

.d-img {
  width: 100%;
    height: 710px;
    object-fit: cover;
    filter: brightness(0.6);
}
.mapa{
  border-radius: 15px;
  width:100% ;
  height:490px ;
}


.imagen {
    width: 600px;
    height: 300px;
    margin-bottom: 20px;
}

.card-footer {
    text-align: center;
}
.navbar {
            background-color: transparent !important; 
            position: absolute;
            width: 100%;
            z-index: 999;
        }
        .carousel-item {
            height: 100%; 
        }
        .navbar-dark .navbar-nav .nav-link:hover {
 
    background-color:  rgba(255, 255, 255, 0.5);
    border-radius: 50px;
}
</style>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="logined.php">
                <img src="img/logo.jpg" alt="Avatar Logo" style="width:60px;" class="rounded-pill"> 
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="logined.php" style="color:white;">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="prueba.php"style="color:white;">Destino</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php"style="color:white;">Contacto</a>
              </li>
            </ul>
            <form class="d-flex">
    <a class="nav-link" href="perfil.php" title="<?=$security->getUserData()?>">
        <i style="color: white; font-size: 2em;" class="d-block w-100 bi bi-person-circle"></i>
    </a>
</form>
          </div>
        </div>
      </nav>

      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
        <div class="carousel-item active d-item">
            <img src="img/img1.jpg" class="d-block w-100 d-img" alt="">
            <div class="carousel-caption top-0 mt-4">
                <h1 class="card-title" style="margin-top: 150px">Bienvenido, <?php echo $info['nombre'];?>!</h1>
                <p class="card-text" style="margin-top: 50px">Descubre playas paradisíacas en todo el mundo con nuestro buscador. Tu escapada playera perfecta está a solo un clic de distancia.</p>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Comienza tu búsqueda</button>
            </div>
        </div>
        <div class="carousel-item d-item">
            <img src="img/fondo3.webp" class="d-block w-100 d-img" alt="">
            <div class="carousel-caption top-0 mt-4">
                <h1 class="card-title" style="margin-top: 150px">Bienvenido, <?php echo $info['nombre'];?>!</h1>
                <p class="card-text" style="margin-top: 50px">Descubre montañas majestuosas en todo el mundo con nuestro buscador. Tu aventura en la naturaleza está a solo un clic de distancia.</p>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Comienza tu búsqueda</button>
            </div>
        </div>
        <div class="carousel-item d-item">
            <img src="img/img3.jpg" class="d-block w-100 d-img" alt="">
            <div class="carousel-caption top-0 mt-4">
                <h1 class="card-title" style="margin-top: 150px">Bienvenido, <?php echo $info['nombre'];?>!</h1>
                <p class="card-text" style="margin-top: 50px">Descubre ciudades vibrantes en todo el mundo con nuestro buscador. Tu aventura urbana perfecta está a solo un clic de distancia.</p>
                <button class="btn btn-primary px-4 py-2 fs-5 mt-5">Comienza tu búsqueda</button>
            </div>
        </div>
    </div>
  </div>

  <div class="container">
  <h2 style="text-align: center; margin: 50px;">Quienes somos</h2>
  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sobre nosotros</h5>
          <p class="card-text">En nuestra web, nuestra misión es ayudarte a descubrir las mejores playas del mundo. Ya sea que busques una playa tranquila para relajarte, un destino familiar lleno de actividades, o el lugar perfecto para practicar deportes acuáticos, estamos aquí para guiarte en cada paso del camino.</p>
          <img src="img/trabajadores.jpg" class="card-img imagen" alt="..." style=" width: 100%;">
          <a href="contacto.php" class="btn btn-primary">Contactanos</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card content">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-geo-alt-fill"></i>Ubicacion</h5>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3084.324995560287!2d-0.4467339245252179!3d39.3715200185909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604d85f8e6d457%3A0xf8e8167400479b71!2sToni%20Pizzer%C3%ADa!5e0!3m2!1ses!2ses!4v1714148633685!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
</div>
</div>


<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">

    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Nombre de la compañia</h5>
        <p>Playa finder</p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Proovedores</h5>
          <p><a href="https://www.ign.es/web/ide-area-nodo-ide-ign" class="text-white" style="text-decoration: none;">IGN</a></p>
          <p><a href="https://www.meteomatics.com/en/weather-api/?ppc_keyword=weather%20api&utm_term=weather%20api&utm_campaign=Weather+API+(Spanien)&utm_source=adwords&utm_medium=ppc&hsa_acc=5001518620&hsa_cam=16963285670&hsa_grp=145005653988&hsa_ad=596908640811&hsa_src=g&hsa_tgt=kwd-40383213246&hsa_kw=weather%20api&hsa_mt=e&hsa_net=adwords&hsa_ver=3&gad_source=1&gclid=Cj0KCQjw6auyBhDzARIsALIo6v8s1wVBJlKarCYIGybONke0MgRlu5yZSntDN5tWE_1ibex0KN0PsL0aAvRrEALw_wcB" class="text-white" style="text-decoration: none;">WeatherAPI</a></p>
          <p><a href="https://www.pexels.com/es-es/" class="text-white" style="text-decoration: none;">Pexels</a></p>
          <p><a href="https://www.tripadvisor.es/" class="text-white" style="text-decoration: none;">TripAdvisor</a></p>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links de interes</h5>
          <p><a href="" class="text-white" style="text-decoration: none;">Cuenta</a></p>
          <p><a href="" class="text-white" style="text-decoration: none;">Hazte miembro</a></p>
          <p><a href="" class="text-white" style="text-decoration: none;">Envios</a></p>
          <p><a href="" class="text-white" style="text-decoration: none;">Informacion productos</a></p>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacto</h5>
          <p>
            <i class="bi bi-house"></i> Valencia, El Pla, 34
          </p>
          <p>
            <i class="bi bi-envelope"></i> playafinder@gmail.com
          </p>
          <p>
            <i class="bi bi-telephone-fill"></i> +34 653 48 71 23
          </p>
          <p>
            <i class="bi bi-printer"></i> +01 315115548
          </p>
      </div>
    </div>

    <hr class="mb-4">

    <div class="row align-items-center">
      <div class="col-md-6 col-lg-7">
        <p>Copyright ©2024 Derechos de autor de:
          <a href="" style="text-decoration: none;">
            <strong class="text-warning">GRUPO-3</strong>
          </a>
        </p>
      </div>
    
      <div class="col-md-5 col-lg-4">
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-google"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="bi bi-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


</footer>
      
</body>
</html>