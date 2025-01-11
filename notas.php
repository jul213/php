<?php



class estudiante {
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
         return $this->$notas;
         }

    protected function setNotas($notas) {
        $this->notas = $notas
         }
            
            
            
        }
    }








class Director {
    private $erasmus = 0;
    public function AsignarCurso(Estudiante $estudiante, $curso) {
        $estudiante->setCurso($curso);
        $this->erasmus = 0;
         }

    switch ($curso) {
    case "informatica":
    case "diseño grafico":
    case "derecho":
    case "marketing":
    case "administracion":
    case "economia":
    case "enfermeria":
    case "medicina":
    case "arquitectura":
    case "informatica":
     case "fisica":
        echo "eres de" . $curso . " estas en la lista para poder hacer erasmus"; 
        $this->erasmus = 1;
        break;
    default:
        echo "lo que estudias no esta en la lista para poder hacer erasmus"
         $this->erasmus = 0;
            
    
     }
     }
    

?>
