<?php 
$servername = "localhost";
$username = "username";
$password = "password";

$conn = mysqli($servername, $username, $password);

if ($conn->connected_error){
    die("connection failed");
}

?>