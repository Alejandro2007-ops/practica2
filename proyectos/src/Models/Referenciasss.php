<?php
namespace App\Referencias;
use App\Models\Materias;
$a = new Materia('BAD115', 'Bases de Datos');
$b = $a;               


$b->nombre = 'BD I';
echo $a->nombre;       
$c = clone $a;         
$c->nombre = 'BD II';
echo $a->nombre;       

var_dump($a === $b);   
var_dump($a === $c);   
var_dump($a == $b);    
