<?php

class Camion {

    private string $longitud;

    function __construct($longitud)
    {
        $this->longitud = $longitud;
    }

    public function addRemolque($longitudRemolque) {

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