<?php 

    interface Animal {
        public function sonido();
    }


    class Cat implements Animal {
        public function sonido(){
            echo "Meow";
        }
    }
?>