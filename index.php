<?php

// Importar Archivos Externos
require_once 'controller/Controlador.php';
//require_once './modelo/Conexion.php';

// Activar Almacenamiento en el bufer de la pagina
ob_start();
$plantilla = new Controlador();
$plantilla->ctrPlantilla();

?>