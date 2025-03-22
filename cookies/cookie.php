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
            } else {
                echo "cookie" . "" . $cookie_name . "is set";
                echo "value of the cookie is: " . $_COOKIE[$cookie_name];
            }
        ?>


            <?php 
             if (count($_COOKIE) > 0){
                echo "cookies enabled";
             } else {
                echo "cookies disabled";
             }
            ?>

    </body>
</html>