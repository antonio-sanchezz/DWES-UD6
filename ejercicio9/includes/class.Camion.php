<?php

class Camion extends CuatroRuedas {

    private string $longitud;

    function __construct($color, $peso, $numeroPuertas, $longitud)
    {
        $this->longitud = $longitud;
        parent::__construct($color, $peso, $numeroPuertas);
    }

    public function addRemolque($longitudRemolque) {
        $this->longitud += $longitudRemolque;
    }

    public function __get($name) {
        if (property_exists(get_Class(),$name)) {
            return $this->$name;
        } else {
            return parent::__get($name);
        }
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}


?>