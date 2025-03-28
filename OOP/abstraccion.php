

<?php 

abstract class Fabrica {
    public $name;
    public $modelo;
    public $año;

    public function __construct($name, $modelo, $año){
        $this->name = $name;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    abstract public function mensage(): string;
}



class Maserati extends Fabrica {
    public function mensage(): string {
        return "has escogido el Maserati";
    }
}


class Mclaren extends Fabrica {
    public function mensage(): string {
        return "has escogido el Mclaren";
    }
}

class Audi extends Fabrica {
    public function mensage(): string {
        return "has escogido el Audi";
    }
}

$maserati = new Maserati("maserati", "modelo-3", 2000);
echo $maserati->mensage();

$mclaren = new Mclaren("mclaren", "modelo-5", 2009);
echo $mclaren->mensage();


$audi =new Audi("audi", "")


?>