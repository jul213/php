<?php 
    $file = fopen("sistema.txt", "r") or die("no se puede abrir el archivo");

    while (feof(!$file)){
        echo fgets($file) . "<br>";
    }

    fclose($file);



    $file1 = fopen("lazy.txt", "w") or die("no se puede abrir el archivo");

    $txt = "soy una nueva linea";

    fwrite($file1, $txt);
?>