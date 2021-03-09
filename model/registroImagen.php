<?php

require_once 'Conexion.php';

$directorio = "../view/presentacion/ecommerce/imagenes/slider/";
//$sql = "INSERT INTO `slider` (`id`, `ruta_imagen`, `titulo`, `subtitulo`, `boton_texto`) VALUES (NULL, 'slide-01', 'Coleccion mujer 2020', 'Nueva temporada', 'Comprar ahora');";
$query = $conexion->query("SELECT * FROM slider ORDER BY id DESC limit 3");
while ($row = mysqli_fetch_array($query)) {
echo "<div class='image'>
        <img src='../view/presentacion/ecommerce/imagenes/slider/" . $row['ruta_imagen'] . "'>
    </div>";
}