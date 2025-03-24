
<?php 
    class Productos {
        const hola = "te mando un saludo";

        public function saludo() {
            echo self::hola;
        }
    }

    $buenas = new Productos();
    $buenas->saludo();
    ?>