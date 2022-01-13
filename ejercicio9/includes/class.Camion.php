<?php

class Camion extends CuatroRuedas {

    private string $longitud;

    function __construct($longitud)
    {
        $this->longitud = $longitud;
    }

    public function addRemolque($longitudRemolque) {
        $this->longitud += $longitudRemolque;
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