<?php

class Dimensiones {

    private float $alto;
    private float $ancho;
    private float $largo;

    public function __construct($alto, $ancho, $largo)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
    }

    function setAlto($alto)
    {
        $this->alto = $alto;
    }

    function getAlto()
    {
        return $this->alto;
    }

    function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    function getAncho()
    {
        return $this->ancho;
    }

    function setLargo($largo)
    {
        $this->largo = $largo;
    }

    function getLargo()
    {
        return $this->largo;
    }

    function __toString()
    {
        return "alto=$this->alto,ancho=$this->ancho,largo=$this->largo";
    }
}

?>