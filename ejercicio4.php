<?php

class Vivienda {

    private string $tipoVivienda;
    private float $valorMercado;

    function __construct($tipoVivienda, $valorMercado)
    {
        $this->tipoVivienda = $tipoVivienda;
        $this->valorMercado = $valorMercado;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {

            switch ($name) {
                case "valorMercado":
                    // Si el valorMercado es menor a 0 no debe actualizarse.
                    if ($value > 0) {
                        $this->$name = $value;
                    } else {
                        echo "El valor no puede ser menor a 0.";
                    }
                    break;
                case "tipoVivienda":
                    $this->$name = $value;
                    break;
            }
    }

}

$vivienda = new Vivienda("Chalet", 250000);

echo $vivienda->tipoVivienda;
echo $vivienda->valorMercado;

$vivienda->tipoVivienda = "Piso";
$vivienda->valorMercado = 150000;

echo "<br>";
echo $vivienda->tipoVivienda;
echo $vivienda->valorMercado;



?>