<?php

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL PC */
    $conexion = mysqli_connect("localhost","root","","adristore");
    /* CONEXION CON EL SERVIDOR AWS */
    //$conexion = mysqli_connect("54.162.166.149","admin","edyson10","turcolombia");
    //$conexion = new PDO("mysql:host=54.162.166.149;dbname=turcolombia", "admin","edyson10");
    //echo "Connected successfully";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}
