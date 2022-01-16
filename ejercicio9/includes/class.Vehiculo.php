<?php

abstract class Vehiculo implements IVehiculo {

    private string $color;
    private float $peso;
    protected static int $numeroCambioColor = 0;

    function __construct($color, $peso)
    {
        $this->peso = $peso;
        $this->color = $color;   
    }

    public static function verAtributo($obj) {
        echo "Color: " . $obj->color . "<br>";
        echo "Peso: " . $obj->peso . "<br>";
        echo "Cambios de color: " . self::$numeroCambioColor . "<br>";

        if (get_class($obj) == "CuatroRuedas" || get_class($obj) == "Coche" || get_class($obj) == "Camion") {
            echo "Número de puertas: " . $obj->numeroPuertas . "<br>";
        }
        if (get_class($obj) == "Coche") {
            echo "Número de cadenas de nieve: " . $obj->numeroCadenasNieve . "<br>";
        } 
        if (get_class($obj) == "DosRuedas") {
            echo "Cilindrada: " . $obj->cilindrada . "<br>";
        }
        if (get_class($obj) == "Camion") {
            echo "Longitud: " . $obj->longitud . "<br>";
        }
    }

    public function circula() {
        echo "El vehículo está circulando";
    }

    abstract function addPersonas($pesoPersona);

    public function setPeso($peso) {
        if (($this->peso + $peso) <= 2100) {
            $this->peso += $peso;
        } else {
            exit("El peso total del vehiculo no puede superar los 2100kg.");
        }
    }

    public function setColor($color) {
        $this->color = $color;
        self::$numeroCambioColor += 1;
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