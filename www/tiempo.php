<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Clima</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Consulta de Clima</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="city" class="form-label">Ciudad</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Ingresa el nombre de la ciudad">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Consultar Clima</button>
                        </div>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $city = $_POST["city"];
                        $apiKey = "TU_API_KEY"; // Reemplaza "TU_API_KEY" con tu API key de OpenWeatherMap

                        // URL de la API de OpenWeatherMap
                        $url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";

                        // Realizar la solicitud a la API
                        $response = file_get_contents($url);

                        // Decodificar la respuesta JSON
                        $data = json_decode($response);

                        // Verificar si se obtuvo una respuesta válida
                        if ($data && $data->cod == 200) {
                            $cityName = $data->name;
                            $temperature = $data->main->temp;
                            $description = $data->weather[0]->description;
                            $icon = $data->weather[0]->icon;

                            // Mostrar los datos del clima
                            echo "<h5 class='mt-3'>Clima en $cityName:</h5>";
                            echo "<p>Temperatura: $temperature °C</p>";
                            echo "<p>Descripción: $description</p>";
                            echo "<img src='http://openweathermap.org/img/wn/$icon.png' alt='Weather Icon'>";
                        } else {
                            // Mostrar un mensaje de error si la ciudad no se encuentra
                            echo "<div class='alert alert-danger mt-3'>No se encontró la ciudad ingresada.</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
