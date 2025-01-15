<?php


    class Sistema {

        private $estudiantes = [];

        public function agregarEstudiante(Estudiante $estudiante){
            $this->estudiantes[] = estudiante;
        }

        public function eliminarEstudiante($nombre) {
            foreach ($this-> estudiantes as $key => $estudiante) {
                if ($estudiante->getNombre() === $nombre){
                    unset($this->estudiantes[key]);
                    return true;
                }
            }
            return false;
        }

        public function listarEstudiantes (){
            foreach ($this->estudiantes as $estudiante){
                echo $estudiante-> mostrarinfo() . "/n";
                }
    }



?>
