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
            
            
            
        }



?>
