<?php

class Mostrar extends Connection{

    function import($file){
        $conn= $this->getConn();
        $query = "DELETE FROM `Playa`";
        $result = mysqli_query($conn, $query);

        $gestor = fopen($file, "r");
        $query = "INSERT INTO `Playa`(`nombre`, `ciudad`, `codigo_postal`, `id_categoria`, `Valoracion`) VALUES (?,?,?,?,?)";
        
        while (($element = fgetcsv($gestor)) !== false) {
            $nombre = $element[0];
            $ciudad = $element[1];
            $cod_post = $element[2];
            $cat = $element[3];
            $valoracion = $element[4];

            $ready = $conn->prepare($query);
            $ready->bind_param("sssss", $nombre, $ciudad, $cod_post, $cat, $valoracion);
            $ready->execute();
            $result = $ready->get_result();
            $ready->close();
        }
        fclose($gestor);
    }

    function getAllPlayas(){
        $array = [];
        $conn= $this->getConn();
        $query = "SELECT * FROM `Playa`";
        $result = mysqli_query($conn, $query);
        $total = $result->num_rows;
        $cont = 0;
        while ($cont < $total) {
            $result->data_seek($cont);
            $info = $result->fetch_array(MYSQLI_ASSOC);
            $nombre = $info["nombre"];
            $ciudad = $info["ciudad"];
            $cod_post = $info["codigo_postal"];
            $cat = $info["id_categoria"];
            $valoracion = $info["Valoracion"];

            $object = new Playa($nombre, $ciudad, $cod_post, $cat, $valoracion);

            array_push($array, $object);
            $cont++;
        }
        return($array);
    }

    function showCards($array) {
        $output = "";
        $output = "
                    <div class='row row-cols-1 row-cols-md-3 g-4'>";
        foreach ($array as $element) {
            $nombre = $element->getNombre();
            $ciudad = $element->getCiudad();
            $valoracion = $this->valoracion($nombre);
           /* <h4><a href='changestatus.php?id=$nombre'><img src='img/bulb-icon-off.png'></a> $name </h4>*/
            $output .= "<div class='col'>
                        <div class='content card h-100'>
                        <img src='img/img1.jpg' class='card-img-top'>
                        <div class='card-body'>";
            $output .= "<h5 class='card-title'>$nombre</h5>
                <p class='card-text'>Ciudad: $ciudad</p>
                <p class='card-text' style='font-size: 20px;'> $valoracion</p>
                </div>";
            $output .= "<div class='card-footer'>
                        <a href='https://alcacer.tonipizzeria.com/' class='btn btn-primary'>Mas info</a>
                        </div></div></div>";
                        
        }
        return $output;
    }

    function valoracion($nombre){
        $valoracion = 0;
        $output = "";
        $conn= $this->getConn();
        $query = "SELECT `Valoracion` FROM `Playa` WHERE `nombre` = '$nombre'";
        $result = mysqli_query($conn, $query);
        $valoracion = $result->fetch_array(MYSQLI_ASSOC);
        $cont = 0;
        $valoracion = $valoracion['Valoracion'];
        while ($cont < 5) {
            if ($valoracion > 0) {
                $output .= "★";
                $valoracion = $valoracion - 1;
            } else{
                $output .= "✩";
            }
            $cont++;
        }
        return $output;
    }

}

?>