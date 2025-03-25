<?php 

trait Prioridades {
    public function pr1(){
        echo "prioridad 1 escogiada alerta minima";
    }
}

trait Advertencias {
    public function ad1(){
        echo "advertencia de nivel 1 seleccionada precaucion";
    }
}


class usoPrioridades {
    use Prioridades, Advertencias;   
}

?>