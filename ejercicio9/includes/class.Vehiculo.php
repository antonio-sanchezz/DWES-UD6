<?php

abstract class Vehiculo implements IVehiculo {

    private string $color;
    private float $peso;
    protected int $numeroCambioColor = 0;

    function __construct($color, $peso)
    {
        $this->peso = $peso;
        $this->color = $color;   
    }

    public static function verAtributo($obj) {
        return get_object_vars($obj);
    }

    public function circula() {
        echo "El vehículo está circulando";
    }

    abstract function addPersonas($pesoPersona);

    public function setPeso($peso) {
        if ($peso < 2100) {
            $this->peso = $peso;
        } else {
            exit("El peso total del vehiculo no puede superar los 2100kg.");
        }
    }

    public function setColor($color) {
        $this->color = $color;
        $this->numeroCambioColor += 1;
    }

    public function __get($name) 
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}


?>