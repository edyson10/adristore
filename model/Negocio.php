<?php

class Negocio
{
    public function generarPlantilla()
    {
        include 'view/Plantilla.php';
    }

    public function generarEnlace($enlace)
    {
        if ($this->validarPestañaBarraNavegacion($enlace)) {
            return 'view/modulos/navegacion/' . $enlace . '.php';
        } else {
            return 'view/modulos/navegacion/Inicio.php';
        }
    }

    private function validarPestañaBarraNavegacion($pestaña)
    {
        $exito = false;
        $pestañas = array("Inicio","Contacto");
        if(in_array($pestaña,$pestañas))
        {
            $exito = true;
        }
        return $exito;
    }

    public function buscarAdministradorNegocio($a,$b)
    {
       return AdministradorDAO::buscarAdministrador($a,$b);
    }
}
