<?php

class Local {

    private string $ciudad;
    private string $calle;
    private int $numeroPlantas;
    private float $area;
    private Dimensiones $dimensiones;

    function __construct($ciudad, $calle, $numeroPlantas, $area, $dimensiones)
    {
        $this->ciudad = $ciudad;
        $this->calle = $calle;
        $this->numeroPlantas = $numeroPlantas;
        $this->area = $area;
        $this->dimensiones = $dimensiones;
    }

    function getArea()
    {
        return $this->area;
    }

    function getDimensiones()
    {
        return $this->dimensiones;
    }

    function __toString()
    {
        return "<p>Ciudad: $this->ciudad<br></p><p>Calle: $this->calle<br></p><p>Plantas: $this->numeroPlantas<br></p><p>Dimensiones: ($this->dimensiones)<br></p>";
    }

    function __clone()
    {
        
    }

}

?>