<?php

class CuatroRuedas extends Vehiculo  {

    private int $numeroPuertas;
    
    function __construct($color, $peso)
    {
        parent::__construct($color, $peso);
    }

    public function repintar($color) {
        $this->color = $color;
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