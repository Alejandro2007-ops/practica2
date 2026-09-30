<?php
class Estudiante{
    public array $notas = [];

    public function promedio(array $notas){
        return array_sum($this->notas) / count($this->notas);
    }
}


?>