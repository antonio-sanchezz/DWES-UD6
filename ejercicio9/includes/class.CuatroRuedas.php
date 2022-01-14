<?php

class CuatroRuedas extends Vehiculo  {

    private int $numeroPuertas;
    
    function __construct($color, $peso, $numeroPuertas)
    {
        $this->numeroPuertas = $numeroPuertas;
        parent::__construct($color, $peso);
    }

    public function repintar($color) {
        $this->color = $color;
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