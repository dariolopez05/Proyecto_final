<?php
require_once "autoloader.php";
$security = new Security();
$registerMessage = $security->doRegister();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="img/logo.jpg">
</head>
<style>
body {
    background-image: url('img/fondo.png');
    background-size: cover;
    position: relative;
    background-repeat:no-repeat;
    
}
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 800px;
    background-color: rgba(0, 0, 0, 0.5);
}
.navbar-dark .navbar-nav .nav-link:hover {
 
 background-color:  rgba(255, 255, 255, 0.5);
 border-radius: 50px;
}

</style>
<body>
<div class="overlay"></div>
<nav class="navbar navbar-expand-sm navbar-dark transparent">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpg" alt="Avatar Logo" style="width:60px;" class="rounded-pill"> 
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="color:white;">Menu</a>
              </li>
            </ul>
            <form class="d-flex">
              <a href="login.php"><button class="btn btn-primary" type="button"style="margin-right:10px" >Log In</button></a>
              <a href="register.php"><button class="btn btn-primary" type="button">Register</button></a>
          </form>
          </div>
        </div>
      </nav>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Registrarse</h3>
          <h4><?=$registerMessage?></h4>
        </div>
        <div class="card-body">
          <form method="post" action="">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="Ingresa tu correo electrónico" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Teléfono</label>
              <input name="phone" type="tel" class="form-control" id="phone" placeholder="Ingresa tu número de teléfono" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input name="password" type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
            </div>
            <div class="mb-3">
    <label for="provincia" class="form-label">Provincia</label>
    <select name="provincia" class="form-select" id="provincia" required>
        <option value="" selected disabled>Selecciona tu provincia</option>
        <option value="Álava">Álava</option>
        <option value="Albacete">Albacete</option>
        <option value="Alicante">Alicante</option>
        <option value="Almería">Almería</option>
        <option value="Asturias">Asturias</option>
        <option value="Ávila">Ávila</option>
        <option value="Badajoz">Badajoz</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Burgos">Burgos</option>
        <option value="Cáceres">Cáceres</option>
        <option value="Cádiz">Cádiz</option>
        <option value="Cantabria">Cantabria</option>
        <option value="Castellón">Castellón</option>
        <option value="Ceuta">Ceuta</option>
        <option value="Ciudad Real">Ciudad Real</option>
        <option value="Córdoba">Córdoba</option>
        <option value="Cuenca">Cuenca</option>
        <option value="Gerona">Gerona</option>
        <option value="Granada">Granada</option>
        <option value="Guadalajara">Guadalajara</option>
        <option value="Guipúzcoa">Guipúzcoa</option>
        <option value="Huelva">Huelva</option>
        <option value="Huesca">Huesca</option>
        <option value="Islas Baleares">Islas Baleares</option>
        <option value="Jaén">Jaén</option>
        <option value="La Coruña">La Coruña</option>
        <option value="La Rioja">La Rioja</option>
        <option value="Las Palmas">Las Palmas</option>
        <option value="León">León</option>
        <option value="Lérida">Lérida</option>
        <option value="Lugo">Lugo</option>
        <option value="Madrid">Madrid</option>
        <option value="Málaga">Málaga</option>
        <option value="Melilla">Melilla</option>
        <option value="Murcia">Murcia</option>
        <option value="Navarra">Navarra</option>
        <option value="Orense">Orense</option>
        <option value="Palencia">Palencia</option>
        <option value="Pontevedra">Pontevedra</option>
        <option value="Salamanca">Salamanca</option>
        <option value="Segovia">Segovia</option>
        <option value="Sevilla">Sevilla</option>
        <option value="Soria">Soria</option>
        <option value="Tarragona">Tarragona</option>
        <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
        <option value="Teruel">Teruel</option>
        <option value="Toledo">Toledo</option>
        <option value="Valencia">Valencia</option>
        <option value="Valladolid">Valladolid</option>
        <option value="Vizcaya">Vizcaya</option>
        <option value="Zamora">Zamora</option>
        <option value="Zaragoza">Zaragoza</option>
    </select>
</div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
