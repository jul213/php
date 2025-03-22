<?php 
    $file = fopen("sistema.txt", "r") or die("no se puede abrir el archivo");

    while (feof(!$file)){
        echo fgets($file) . "<br>";
    }

    fclose($file);
?>