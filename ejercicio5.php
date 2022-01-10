<?php

interface IEquipoFutbol {
    public function getNumeroJugadores();
    public function juegaPartido();
}

interface ICampeonato {
    public function getNombreCampeonato();
}

class EquipoFutbol implements IEquipoFutbol, ICampeonato {

    private int $numJugadores;
    private string $nombreEquipo;
    private string $nombreCampeonato;

    function __construct($numJugadores, $nombreEquipo, $nombreCampeonato)
    {
        $this->numJugadores = $numJugadores;
        $this->nombreEquipo = $nombreEquipo;
        $this->nombreCampeonato = $nombreCampeonato;
    }

    function getNumeroJugadores()
    {
        return $this->numJugadores;
    }

    function juegaPartido()
    {
        echo $this->nombreEquipo . " VICTORIA";
    }

    function getNombreCampeonato()
    {
        return $this->nombreCampeonato;
    }
}

$equipo = new EquipoFutbol(11, "RBB", "La Liga");

echo $equipo->getNumeroJugadores();
$equipo->juegaPartido();
echo $equipo->getNombreCampeonato();

?>