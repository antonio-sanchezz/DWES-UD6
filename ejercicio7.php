<?php

abstract class FiguraGeometrica {

    protected string $color;

    abstract function dibuja();
    abstract function area();
}

class Cuadrado extends FiguraGeometrica {

    private float $lado;

    public function __construct($lado, $color)
    {
        $this->lado = $lado;
        $this->color = $color;
    }

    function dibuja()
    {
        echo "Cuadrado de color " . $this->color . ".<br>";
    }

    function area()
    {
        return pow($this->lado, 2);
    }
}

class Triangulo extends FiguraGeometrica  {

    private float $base;
    private float $altura;

    public function __construct($base, $altura, $color)
    {
        $this->base = $base;
        $this->altura = $altura;
        $this->color = $color;
    }

    function dibuja()
    {
        echo "Triángulo de color " . $this->color . ".<br>";
    }

    function area()
    {
        return ($this->base*$this->altura)/2;
    }
}

class Circulo extends FiguraGeometrica  {

    private float $radio;

    public function __construct($radio, $color)
    {
        $this->radio = $radio;
        $this->color = $color;
    }

    function dibuja()
    {
        echo "Círculo de color " . $this->color . ".<br>";
    }

    function area()
    {
        return pi()*pow($this->radio, 2);
    }
}

$cuadrado = new Cuadrado(5, "Rojo");
$triangulo = new Triangulo(10, 15, "Verde");
$circulo = new Circulo(6, "Azul");

echo "-- CUADRADO -- <br>";
$cuadrado->dibuja();
echo "Área: " . $cuadrado->area() . "<br>";

echo "-- TRIÁNGULO -- <br>";
$triangulo->dibuja();
echo "Área: " . $triangulo->area() . "<br>";

echo "-- CÍRCULO -- <br>";
$circulo->dibuja();
echo "Área: " . $circulo->area() . "<br>";


?>