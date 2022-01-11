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

    }

    function getDimensiones()
    {

    }

    function __toString()
    {
        return "<p>Ciudad: <valor><br></p><p>Calle: <valor><br></p><p>Plantas: <valor><br></p><p>Dimensiones: (<valor>)<br></p>";
    }

}

?>