<?php

class AdministradorDAO
{
    function buscarAdministrador($a, $b)
    {
        $AdministradorDTO = null;
        try {
            $conexion = Conexion::crearConexion();
            $consulta = $conexion->prepare("SELECT id_admin, nombre, apellido, correo, password FROM administrador WHERE correo = ? AND password = ?");
            $consulta->bindParam(1, $a, PDO::PARAM_STR);
            $consulta->bindParam(2, $b, PDO::PARAM_STR);
            $consulta->execute();
            $filas = $consulta->rowCount();
            if ($filas > 0) {
                $datos = $consulta->fetch();
                $AdministradorDTO = new AdministradorDTO($datos['nombre'], $datos['apellido'], $datos['correo'], $datos['password']);
                $AdministradorDTO->setId($datos['id_admin']);
            }
        } catch (Exception $exc) {
            throw new Exception("Ocurrio un error" . $exc->getTraceAsString());
        }
        return $AdministradorDTO;
    }
}
