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

    function __set($name, $value) {
        if (is_float($value) && $value > 1) {
            $this->$name = $value;
        } else {
            exit("Error, el valor de las dimensiones debe ser mayor a 1.");
        }  
    }

    function __get($name) {
        return $this->$name;
    }

    function __toString()
    {
        return "alto=$this->alto,ancho=$this->ancho,largo=$this->largo";
    }
}

?>