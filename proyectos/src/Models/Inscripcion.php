<?php
namespace App\Models;

class Inscripcion
{
    public const int MAX_MATERIAS = 5;
    private static int $total = 0;

    public function __construct(public string $carnet)
    {
        self::$total++;
    }

    public static function total(): int
    {
        return self::$total;
    }
}
new Inscripcion('PR21001');
new Inscripcion('GL21002');
echo Inscripcion::total();          
echo Inscripcion::MAX_MATERIAS; 
?>