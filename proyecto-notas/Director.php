<?php
class Director {
    private $erasmus = 0;
    public function AsignarCurso(Estudiante $estudiante, $curso) {
        $estudiante->setCurso($curso);
        $this->erasmus = 0;
         

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
        echo "lo que estudias no esta en la lista para poder hacer erasmus";
         $this->erasmus = 0;
         break;
            
    
      }
     }

    public function asignarNotas(Estudiante $estudiante, $notas) {
        $estudiante->setNotas($notas);
     }

    public function calcularPromedio (Estudiante $estudiante) {
        $notas = $estudiante->getNotas();
        if (empty($notas)) {
            echo "no hay notas registradas";
            return 0;
            }
        return array_sum($notas) / count($notas);
    }

    }



?>