<?php

require "estudiante.php";
require "Director.php";

$estudiante = new Estudiante("salomon",20,"informatica");

$director = new Director();


$director->AsignarCurso($estudiante, "informatica");
$director->asignarNotas($estudiante, [7,8,9]);

echo "promedio: " . $director->calcularPromedio($estudiante);



?>
