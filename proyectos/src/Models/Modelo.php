<?php

class Modelo
{
    public static function crear(): static
    {
    return new static();
    }

    public static function nombreSelf(): string
    {
    return self::class;
    }
    }

    public static function nombreStatic(): string
    {
        return static::class;
    }
    
}
class Estudiante extends Modelo {}
echo Estudiante::nombreSelf();     
echo Estudiante::nombreStatic();   
// Modelo
// Estudiante
echo get_class(Estudiante::crear());  
?>