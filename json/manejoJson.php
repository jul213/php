<?php 
$array = array("buenas", "saludos", "adios", "hasta luego");

echo json_encode($array);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostramos formato amigable Json</title>
</head>
<body>
    <?php
    $obj = '{"Peter":35,"Ben":37,"Joe":43}';
    echo json_decode($array);
    ?>
</body>
</html>