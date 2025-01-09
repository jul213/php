<?php
// elimina un archivo desde cualquier lugar en el disco duro al que
// el usuario de PHP tiene acceso. Si PHP tiene acceso de root:
$username = $_POST['user_submitted_name']; // "../etc"
$userfile = $_POST['user_submitted_filename']; // "passwd"
$homedir  = "/home/$username"; // "/home/../etc"

unlink("$homedir/$userfile"); // "/home/../etc/passwd"

echo "El archivo ha sido eliminado!";
?>