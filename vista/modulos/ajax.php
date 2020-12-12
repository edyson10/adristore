<?php

//CONTROLADORES
require_once '../../controlador/Controlador.php';
require_once '../../modelo/Negocio.php';
require_once '../../modelo/Conexion.php';

// DTO
require_once '../../modelo/dto/AdministradorDTO.php';

// DAO
require_once '../../modelo/dao/AdministradorDAO.php';

class ajax
{
    public function iniciarSesionAdministrador($correo, $contrasenia)
    {
        $exito = false;
        try {
            $existe = $this->buscarAdministrador($correo, $contrasenia);
            if (is_null($existe)) {
                $exito = false;
            } else {
                $exito = true;
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }

        if ($exito) {
            session_start();
            $_SESSION["Cliente"] = serialize($existe);
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se econtro el cliente"));
        }
    }

    private function buscarAdministrador($a, $b)
    {
        $existe = null;
        try {
            $controlador = $this->obtenerControlador();
            $existe = $controlador->buscarAdministradorControlador($a, $b);
        } catch (Exception $exc) {
            throw new Exception("Se genero un error en la base de datos" . $exc);
        }
        return $existe;
    }

    private function obtenerControlador()
    {
        $controlador = new Controlador();
        return $controlador;
    }
}

$ajax = new Ajax();

$iniciaSesionAdministrador = isset($_POST['ingresarCorreoAdministrador'], $_POST['ingresarContraseniaAdministrador']);

if ($iniciaSesionAdministrador) {
    $ajax->iniciarSesionAdministrador($_POST['ingresarCorreoAdministrador'], $_POST['ingresarContraseniaAdministrador']);
}
