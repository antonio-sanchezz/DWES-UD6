<?php

class Coche {

    private int $numeroCadenasNieve;

    function __construct($numeroCadenasNieve)
    {
        $this->numeroCadenasNieve = $numeroCadenasNieve;
    }

    public function addCadenasNieve($num) {

    }

    public function quitarCadenasNieve($num) {

    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}


?>