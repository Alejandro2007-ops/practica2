<?php 
class Estudiantes{
    public string $carnet;
    public string $nombre;
    public array $notas = [];

    public function agregarNota(float $nota){
        $this->notas[] = $nota;
    }

    public function promedio(){
        if(count($this->notas) === 0){
            return 0.0;
        }
        return array_sum($this->notas) / count($this->notas);
    }

}



?>