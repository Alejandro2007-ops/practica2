<?php
namespace App\Exections;

use RuntimeException;

class CupoAgotadoExection extends RuntimeException{
    public function __construct(
        public readonly string $codigoMateria,
    ){
        parent::__construct("sin cupo en $codigoMateria");
    }

}
?>