<?php
namespace App\Models;

class Materia
{
    private int $inscriptos = 0;
    public function __construct(
        private readonly string $codigo,
        private readonly string $nombre,
        private readonly int $cupo
    ){}

    public function tineCupo(){
        return $this->inscriptos < $this->cupo;
    }

    public function ocuparCupo(){
        $this->inscriptos++;
    }
}

?>