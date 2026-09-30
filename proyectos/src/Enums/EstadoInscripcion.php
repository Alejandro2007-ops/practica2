<?php
namespace App\Enums;


enum EstadoInscripcion : string
{
    public static function desdeNota(float $nota): self
    {
        return $nota >= 6.0 
        ? self::Aprobada 
        : self::Reprobada;
    }
}
?>