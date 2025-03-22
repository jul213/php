<?php 
$cookie_name = "user";
$cookie_value = "Pablo";
setcookie($cookie_name, $cookie_value, time() + (8400 * 30),"/");
?>