<?php
$estudiante = [
    'carnet' => 'PR21001',
    'notas' => [8.5, 9.0]
];

function promedio(array $notas){
    return array_sum($notas) / count($notas);
}

echo promedio($estudiante['notas']);


?>