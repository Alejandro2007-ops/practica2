<?php
namespace App\Models;
class Materias{
    public function __construct(
        public string $codigo,
        public string $nombre,
        public int $uv = 4,
    ){}
}
?>