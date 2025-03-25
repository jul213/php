<?php  
    class Bienvenida {
        public static function Saludo(){
            echo "este es un saludo";
        }
    }

    Bienvenida::Saludo();



    class A {
        public static function mensaje($valor1, $valor2){
            echo "esta este valor: $valor1";
            echo "este es otro valor: $valor2";
        }
    }


    class B {
        private $d = 0;
        private $a = 0;
        public function __construct($x,$y){
            $this->d = $x;
            $this->a = $y;
        }

        public function MostrarMensaje(){

            A::mensaje($this->d,$this->a);
        }

    }

?>