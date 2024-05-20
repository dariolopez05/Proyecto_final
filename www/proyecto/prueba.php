<?php

require_once "autoloader.php";

$data = new Mostrar;

$result = $data->getAllPlayas();
$output = $data->showCards($result);
$security = new Security();
$email = $security->getUserData();
$info = $security->getUser($email);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayaFinder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
</head>
<style>
  body {
    background-color: grey;
    background-size: cover;
    position: relative;
    background-repeat:no-repeat;
    width: 100%;
} 
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
    height: 670px;
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
            background-color: ; 
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
h1{
  text-align: center;  
  margin-top: 70px;
  margin-bottom: 20px;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

</style>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark transparent">
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
                <a class="nav-link" href="#"style="color:white;">Destino</a>
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

    <div class="container">
      <br>
      <h1>PLAYAS</h1>
        <?php echo $output; ?>

        
    </div>
</body>



</html>