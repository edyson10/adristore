<?php

class Controlador
{
    private $negocio;

    // Constructor
    public function __construct()
    {
        $this->negocio = new Negocio();
    }

    public function generarPlantilla()
    {
        return Negocio::generarPlantilla();
    }

    public function generarVista()
    {
        $enlace = filter_input(INPUT_GET,'ubicacion');
        if($enlace)
        {
            $enlace = $this->negocio->generarEnlace($enlace);
        }else
        {
            $enlace = $this->negocio->generarEnlace('Inicio');
        }
        include_once $enlace;
    }

    public function buscarAdministradorControlador($a,$b)
    {
        return $this->negocio->buscarAdministradorNegocio($a,$b);
    }
}
