<?php
// elimina un archivo desde cualquier lugar en el disco duro al que
// el usuario de PHP tiene acceso. Si PHP tiene acceso de root:
$username = filter_input(INPUT_POST, "user_submitted_name", filter_sanitize_string);
$userfile = filter_input(INPUT_POST, "user_submitted_file", filter_sanitize_string);

if (!preg_match('/^[a-zA-Z0-9_]+$/', $username) || !preg_match('/^[a-zA-Z0-9_\.]+$/', $userfile)) {
    die("Nombre de usuario o archivo no válido");
}

$homedir = "home/$username";

$fullpath = realpath("$homedir/$userfile");

if ($fullpath === false || strpos($fullpath, $homedir) !== 0) {
    die("Acceso denegado");
}

if (unlink($fullpath)) {
    echo "El archivo ha sido eliminado!";
} else {
    echo "No se pudo eliminar el archivo";
}

?>