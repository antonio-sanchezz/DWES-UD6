<?php

interface IVehiculo {

    public static function verAtributo($obj);

    public function circula();

    public function setColor($color);

    public function __get($name);

    public function __set($name, $value);
    
}

?>