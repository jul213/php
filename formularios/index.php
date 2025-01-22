<?php

$opcion1 = $_POST["si"];
$opcion2 = $_POST["no"];
foreach($_POST["dispositivo"] as $dispositivo){
    echo $dispositivo . "<br>";
}

echo $opcion1;
echo $opcion2;
?>
