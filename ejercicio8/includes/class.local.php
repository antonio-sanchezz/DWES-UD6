<?php

include_once("class.dimensiones.php");

class Local {

    private string $ciudad;
    private string $calle;
    private int $numeroPlantas;
    private float $area;
    private Dimensiones $dimensiones;

    function __construct($ciudad, $calle, $numeroPlantas, $dimensiones)
    {
        $this->ciudad = $this->checkString($ciudad);
        $this->calle =  $this->checkString($calle);
        $this->numeroPlantas = $this->checkInteger($numeroPlantas);
        $this->dimensiones = $this->checkDimensiones($dimensiones);
        $this->area = $this->dimensiones->getAncho()*$this->dimensiones->getLargo();
    }

    function checkString($string) {

        if (is_string($string)) {
            return $string;
        } else {
            exit("Error, no es una cadena.");
        }

    }

    function checkInteger($int) {

        if (is_int($int)) {
            return $int;
        } else {
            exit("Error, no es un numero.");
        }

    }

    function checkDimensiones($dimensiones) {

        if ($dimensiones instanceof Dimensiones) {
            return $dimensiones;
        } else {
            exit("Error, la dimensiones no se han establecido correctamente.");
        }

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
        $clon = $this->dimensiones;
        return $clon;
    }

}

?>