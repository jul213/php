<?php

class Estudiante {
    private $nombre;
    private $edad;
    private $curso;
    private $notas = [];
    
    
    public function __construct($nombre,$edad,$curso) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
    }
    
    
   public function getNombre() {
        return $this->nombre;
        }

    public function getCurso() {
        return $this->curso;
         }

        public function setCurso($curso) {
            $this->curso = $curso;
     }

    public function getNotas() {
         return $this->notas;
         }

    protected function setNotas($notas) {
        $this->notas = $notas;
         }

    public function agregarNota($nota) {
        if ($nota < 0 || $nota > 10) {
            throw new Exception("pon una nota valida para agregar");
            
            
            }
         $this->notas[] = $nota;
        }

    public function mostrarInfo(){
        return "Nombre: {$this->nombre}, edad: {$this->edad}, curso: {$this->curso} y tiene las siguientes notas: {$this->notas}";
}



?>
