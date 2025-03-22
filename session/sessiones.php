<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones con php</title>
</head>
<body>
    <?php 
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);


    session_unset();



    session_destroy();
    ?>
</body>
</html>