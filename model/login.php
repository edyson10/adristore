<?php

require_once 'Conexion.php';

//die (json_encode($_POST));

$correo = $_POST['correo'];
$contraseña = $_POST['contrasena'];

$sql = "SELECT * FROM administrador WHERE correo = '$correo' and contrasena = '$contraseña'";

$ejecutar = mysqli_query($conexion, $sql);
$rowcount = mysqli_num_rows($ejecutar);

if ($rowcount > 0) {
    $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
    
    if ($row['estado'] == '1') {
        $_SESSION['Administrador'] = $row['correo'];
        $_SESSION['documento'] = $row['documento'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];
        $_SESSION['correo'] = $row['correo'];
        $_SESSION['telefono'] = $row['telefono'];
        $_SESSION['imagen'] = $row['foto'];
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'estado');
    } 
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
