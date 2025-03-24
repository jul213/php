

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
?>