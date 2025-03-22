<?php 
$cookie_name = "user";
$cookie_value = "Pablo";
setcookie($cookie_name, $cookie_value, time() + (8400 * 30),"/");
?>

<html>
    <body>
        
        <?php 
            if (!isset($_COOKIE[$cookie_name])){
                echo "cookie named: " . $cookie_name . "is not set";
            }
        ?>
    </body>
</html>