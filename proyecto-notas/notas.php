<?php

class estudiante {
    private $nombre;
    private $edad;
    private $curso;
    private $periodos;
    
    
    function __construct($nombre,$edad,$curso) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->curso = $curso;
    }
    
    
    public function curso($curso) {
        $this-> curso = $curso;
        
        switch ($curso) {
            
            case "informatica":
                echo "es informatico";
                break;
            case "programador":
                echo "eres un programador";
            
            case "redes":
                echo "arquitecto de red";
                break;
            
            default:
                echo "estudias otra cosa";
                
        }
    }
        
        
        public function setPeriodos($periodos) {
            $this->periodos = $periodos;
        }
        
        public function notas($nota1,$nota2,$nota3){
            
            $resultado = $nota1+$nota2+$nota3;
            
            $promedio = $resultado/$this->periodos;
            
            return $promedio;
            
            
            
        }
    }
    

?>