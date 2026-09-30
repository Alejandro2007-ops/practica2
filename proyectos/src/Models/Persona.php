<?php
namespace App\Models;

abstract class Persona{
    public function __construct(
        public readonly string $nombre,
        public readonly string $correo
    ){}
}

?>